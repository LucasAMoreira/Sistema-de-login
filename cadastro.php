<?php

	include "conecta.php";

	$nome  = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$senhaMD5=md5($senha);

	$tabela = "usuarios";
	$comandoInsere = "INSERT INTO $tabela VALUES('$nome','$senhaMD5','$email')";

	if(!$nome || !$senha || !$email){
		echo "Erro!";			
	}else{
		$insere=pg_query($psql,$comandoInsere);
		header("location:resultadoCadastro.html");
	}




?>
