<?php
	require_once('../config/funcoesmysql.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$inst = $_POST['inst'];
	$codigo = rand(1111111111,9999999999);
	$query = insert( 'participante','nome, cod_bar,email,instituicao', "'".$nome."','".$codigo."','".$email."','".$inst."'");



	header('location: geraetiqueta.php?cod_bar='. $codigo);