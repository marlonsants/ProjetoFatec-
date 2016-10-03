<?php 
require_once('../config/funcoesmysql.php');
	// definimos o tipo de arquivo
header("Content-type: application/msexcel");

 // Como será gravado o arquivo
header("Content-Disposition: attachment; filename=Relatorios.xls");
?>
<meta charset=utf-8>
<table>	
	<thead>
		<tr>	
			<th	>Código</th>
			<th	>Nome</th>
			<th	>03/10/2016</th>
			<th	>04/10/2016</th>
			<th	>05/10/2016</th>
			<th	>06/10/2016</th>
			<th	>07/10/2016</th>
		</tr>
	</thead>
	<tbody>	
		<?php
		$usuarios = select('*', 'participante','1');
		

		if(isset($usuarios) and !empty($usuarios)){
			foreach ($usuarios as $key => $value) {
				echo'<tr>';
				echo'<td style="color:blue">' . $value['cod_bar']. '</td>';
				echo'<td style="color:black">' . $value['nome']. 	  '</td>';
				if($value['dia_1'] == 1 ){
					echo'<td style="color:green">Presente</td>';
				}else{
					echo'<td style="color:red">Ausente</td>';
				}

				if($value['dia_2'] == 1 ){
					echo'<td style="color:green">Presente</td>';
				}else{
					echo'<td style="color:red">Ausente</td>';
				}

				if($value['dia_3'] == 1 ){
					echo'<td style="color:green">Presente</td>';
				}else{
					echo'<td style="color:red">Ausente</td>';
				}

				if($value['dia_4'] == 1 ){
					echo'<td style="color:green">Presente</td>';
				}else{
					echo'<td style="color:red">Ausente</td>';
				}

				if($value['dia_5'] == 1 ){
					echo'<td style="color:green">Presente</td>';
				}else{
					echo'<td style="color:red">Ausente</td>';
				}
			}
			echo'</tr>';
		}?>
	</tbody>
</table>		

