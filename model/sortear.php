<?php
	require_once('../config/funcoesmysql.php');
	
							 	
	
	$info = select('p.*,c.dia1,c.codBar','controle_presenca as c LEFT JOIN  participante as p on c.id_participante = p.id_participante','c.dia1 = 1 ORDER BY rand() ');
	if($info){
		echo json_encode($info[0]);	
	}else{
		echo 'erro ao sortear';
		echo $info;
	}
	
?> 