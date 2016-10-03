<?php 
require_once('../config/funcoesmysql.php');

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$verifica = select('*','adm',"nome = '".$usuario."' AND senha = '".$senha."'  ");

	if($verifica){
		session_start();
		$_SESSION['logado'] = true;
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha'] = $senha;
		header('location: ../view/leitor_codigo.php');
	}else{
		header('location: ../index.php?erro=1');
	}

 ?>