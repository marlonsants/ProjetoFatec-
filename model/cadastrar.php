<?php
	require_once('../config/funcoesmysql.php');
	$nome = $_POST['nome'];
	$codigo = rand(1111111111,9999999999);
	$query = insert( 'participante','nome, cod_bar', "'".$nome."','".$codigo."'");



	header('location: geraetiqueta.php?cod_bar='. $codigo);