<?php
	require_once('../config/funcoesmysql.php');
	$nome = $_POST['nome'];
	$codigo = rand(1111111111,9999999999);
	echo $codigo;
	$query = insert( 'participante','nome, cod_bar', "'".$nome."','".$codigo."'");

	header('location: ../index.php?id='. $nome);