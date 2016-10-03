<?php  
session_start();
if(!isset($_SESSION['logado'])){

		echo '<h3>Erro de sessão pra continuar faça login novamente <a href="../index.php">Fazer Login</a></h3>';
	
	exit();

}

 ?>