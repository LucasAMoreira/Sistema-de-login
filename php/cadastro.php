<?php

	/*
		cadastro.php
		Recebe as informações do usuário via POST e as cadastra em um banco de dados
	*/


	include "conecta.php";

	// Recebe nome, email e senha de 'cadastro.html'
	$nome  = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	// Encripta senha do usuário
	$senhaMD5=md5($senha);

	// Cadastra nome, email e senha encriptada do usuário na tabela 'usuarios'
	$tabela = "usuarios";
	$comandoInsere = "INSERT INTO $tabela VALUES('$nome','$senhaMD5','$email')";

	// Se não faltar nenhuma informação vai para resultadoCadastro.html
	if(!$nome || !$senha || !$email){
		echo "Erro!";
	}else{
		$insere=pg_query($psql,$comandoInsere);
		header("location:resultadoCadastro.html");
	}

?>
