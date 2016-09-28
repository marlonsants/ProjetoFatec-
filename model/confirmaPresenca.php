<?php 
require_once('../config/funcoesmysql.php');
// $dataAtual = date('Y-m-d');
$codBarInput = $_POST['codigo_barra'];
$confirma = select('codBar,id_participante','controle_presenca',"codBar = '".$codBarInput."' ");
	if($confirma){
		$id = $confirma[0]['id_participante'];
		$participante = select('nome,instituicao,email','participante',"id_participante = ".$id." ");
		if($participante){
			echo json_encode($participante[0]);
			updatemysql('dia1 = 1','controle_presenca','id_participante = '.$id.' ');
		}
		

	}else{
		echo 'erro ao buscar participante';
	}
 ?>
