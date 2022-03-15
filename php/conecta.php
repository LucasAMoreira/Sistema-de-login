<?php
	
	/*
		Cria objeto do tipo mysqli para conectar ao banco de dados
	*/
	
	$servidor="localhost";
	$usuario="postgres";
	$banco="voyage";
	$senha="";
	
	$psql = pg_connect("host=localhost port=5432 dbname=voyage user=postgres password=postgres");
?>
