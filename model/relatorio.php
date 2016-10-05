<?php 
	require_once('../config/funcoesmysql.php');
	// definimos o tipo de arquivo
   header("Content-type: application/msexcel");

 // Como será gravado o arquivo
   header("Content-Disposition: attachment; filename=Relatorio.xls");

		

		$usuarios = select('*', 'participante','1');
		
	
		if(isset($usuarios) and !empty($usuarios)){
			foreach ($usuarios as $key => $value) {
				echo'<tr>';
				echo'<td style="color:blue">' . $value['cod_bar']. '</td>';
				echo'<td style="color:blue">' . $value['nome']. 	  '</td>';
				if($value['dia_1'] == 1 ){
					echo'<td style="color:green">Presente</text></td>';
				}else{
					echo'<td style="color:red">Ausente</text></td>';
				}

				if($value['dia_2'] == 1 ){
					echo'<td style="color:green">Presente</text></td>';
				}else{
					echo'<td style="color:red">Ausente</text></td>';
				}

				if($value['dia_3'] == 1 ){
					echo'<td style="color:green">Presente</text></td>';
				}else{
					echo'<td style="color:red">Ausente</text></td>';
				}

				if($value['dia_4'] == 1 ){
					echo'<td style="color:green">Presente</text></td>';
				}else{
					echo'<td style="color:red">Ausente</text></td>';
				}

				if($value['dia_5'] == 1 ){
					echo'<td style="color:green">Presente</text></td>';
				}else{
					echo'<td style="color:red">Ausente</text></td>';
				}
			}
			echo'</tr>';
		}?>