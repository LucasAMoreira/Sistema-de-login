<?php

	/*
		Cria objeto do tipo pg_connect para conectar ao banco de dados
	*/

	// O valor dessas variáveis pode mudar de acordo com a forma que o banco de dados foi implementado.
	// Nesse caso o BD está em uma máquina local, chama-se 'voyage' e não tem senha.
	$servidor="localhost";
	$usuario="postgres";
	$banco="voyage";
	$senha="";

	$psql = pg_connect("host=localhost port=5432 dbname=voyage user=postgres password=postgres");
?>
