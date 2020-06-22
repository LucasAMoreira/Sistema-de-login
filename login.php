<?php

	// Inicia sessão de login
	session_start('mySession');

	// Conecta ao banco de dados
	include "conecta.php";

	// Armazena email e senha
	$email=$_POST['email'];
	$senha=$_POST['senha'];

	// "Encripta" senha
	$senhaMD5=md5($senha);

	// Tabela consultada
	$tabela="usuarios";

	// Consulta SQL que seleciona usuario de acordo com nome e senha
	$comandoBusca = "SELECT * FROM $tabela WHERE email = '$email' and senha = '$senhaMD5'";

	// Faz consulta 
	$busca=pg_query($psql,$comandoBusca);

	// Número de tuplas encontradas (Deve ser 1)
	$numeroElementos=pg_affected_rows ($busca);	

	// Se encontrou prossegue, senão volta para página de login
	if($numeroElementos==1){
		$_SESSION["e"]=$email;
		$_SESSION["s"]=$senha;
		header("location:inicio-logado.html");
	}else{
		header("location:login.html");
	}

	exit;

?>
