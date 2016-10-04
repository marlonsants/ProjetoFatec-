<?php
	require_once('../config/funcoesmysql.php');
		date_default_timezone_set('America/Sao_Paulo');
	$dia = date('Y-m-d');
		if($dia == '2016-10-03'){
			$info = select('*','participante','dia_1 = 1 ORDER BY rand() ');
			echo json_encode($info[0]);	
		}else if($dia == '2016-10-04'){
			$info = select('*','participante','dia_2 = 1 ORDER BY rand() ');
			echo json_encode($info[0]);	
		}else if($dia == '2016-10-05'){
			$info = select('*','participante','dia_3 = 1 ORDER BY rand() ');
			echo json_encode($info[0]);	
		}else if($dia == '2016-10-06'){
			$info = select('*','participante','dia_4 = 1 ORDER BY rand() ');
			echo json_encode($info[0]);	
		}else if($dia == '2016-10-07'){
			$info = select('*','participante','dia_5 = 1 ORDER BY rand() ');
			echo json_encode($info[0]);	
		}else{
		echo 'erro ao sortear';
	}
	
?> 