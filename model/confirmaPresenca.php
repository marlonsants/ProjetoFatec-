<?php 
require_once('../config/funcoesmysql.php');
// $dataAtual = date('Y-m-d');
$codBarInput = $_POST['codigo_barra'];
$confirma = select('*','participante',"cod_bar = '".$codBarInput."' ");
	if(!empty($confirma)){
		$dia = date('Y-m-d');

		if($dia == '2016-09-28'){	
			$teste = updatemysql('dia_1 = 1','participante',"cod_bar = '".$codBarInput."' ");			
			echo json_encode($confirma);
		}else if($dia == '2016-10-04' ){
			$teste = updatemysql('dia_2 = 1','participante',"cod_bar = '".$codBarInput."' ");			
			echo json_encode($confirma);
		}else if($dia == '2016-10-05' ){
			$teste = updatemysql('dia_3 = 1','participante',"cod_bar = '".$codBarInput."' ");			
			echo json_encode($confirma);
		}else if($dia == '2016-10-06' ){
			$teste = updatemysql('dia_4 = 1','participante',"cod_bar = '".$codBarInput."' ");			
			echo json_encode($confirma);
		}else if($dia == '2016-10-07' ){
			$teste = updatemysql('dia_5 = 1','participante',"cod_bar = '".$codBarInput."' ");			
			echo json_encode($confirma);
		}else{
			$erro[0] = array('tipo' => 1 );
			echo json_encode($erro);
		}
	}else{
			echo 'Usuário não encontrado';
	}
 ?>
