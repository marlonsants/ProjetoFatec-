<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href='../webroot/css/bootstrap.min.css'>
	<script src='../webroot/js/jquery-2.1.1.min'></script>
	<script src='../webroot/js/bootstrap.min.js'></script>
	
	<title>Participantes Presentes</title>
</head>

<style type="text/css">
	#borda{border: 1px solid #999; box-shadow: -0px -0px 45px #999;}
</style>

<body>

	<div class="container-fluid"><br>

		<div class="row">

			<div class="col-md-10 col-md-offset-1 col-xs-8" >

				<div id="borda" >
					<img src="../webroot/images/borda_cima.jpg" style="width: 100%">

					<div class="col-md-2 col-xs-2">
						<img src="../webroot/images/logo_recortada.png" style="width: 100%;">
						<img src="../webroot/images/logo_fatec.jpg" style="width: 100%;">

					</div>

					<div class="col-md-8 col-md-offset-1 col-xs-8" style="color: rgb(50,180,74);"><br><br><br>
						<h2>IV Simposio de Tecnologia Sucroenergetica e de Biocombustiveis<br>Fatec - Jaboticabal-SP</h2>
					</div>

					<?php include('menu.php'); ?>

					<div class="col-md-12 col-xs-12" id="borda" style=" border-color: rgb(40,145,58);"></div>

					<!--Lista de presença no dia-->
					<div class="row">
						<h3 class="col-md-10 col-md-offset-1" id="lista"><center>Lista de Presença</center></h3>
					</div>
					<div id="divtab">
						<table class="table table-condensed table-hover table-striped" id="tabela" >
							<thead>
								<tr>
									<th>Código</th>
									<th>Nome</th>
									<th>03/09/2016</th>
									<th>04/09/2016</th>
									<th>05/09/2016</th>
									<th>06/09/2016</th>
									<th>07/09/2016</th>
								</tr>
							</thead>
							<tbody>

								<?php 

								require_once('../config/funcoesmysql.php');

								$usuarios = select('*', 'participante','1');
								$dia1 = '2016-10-03';
								$dia2 = '2016-10-04';
								$dia3 = '2016-10-05';
								$dia4 = '2016-10-06';
								$dia5 = '2016-10-07';
								date_default_timezone_set('America/Sao_Paulo');
								$dia = date('Y-m-d');
								if(isset($usuarios) and !empty($usuarios)){
									foreach ($usuarios as $key => $value) {
										echo'<tr>';
										echo'<td class="text text-info">' . $value['cod_bar']. '</td>';
										echo'<td class="text text-info">' . $value['nome']. 	  '</td>';
										if(strtotime($dia1) <= strtotime($dia) and $value['dia_1'] == 1 ){
											echo'<td class="text text-success">Presente</text></td>';
										}else if(strtotime($dia1) <= strtotime($dia) and $value['dia_1'] != 1 ){
											echo'<td class="text text-danger">Ausente</text></td>';
										}else{
											echo'<td class="text text-primary"> - </text></td>';
										}

										if(strtotime($dia2) <= strtotime($dia) and $value['dia_2'] == 1 ){
											echo'<td class="text text-success">Presente</text></td>';
										}else if(strtotime($dia2) <= strtotime($dia) and $value['dia_2'] != 1 ){
											echo'<td class="text text-danger">Ausente</text></td>';
										}else{
											echo'<td class="text text-primary"> - </text></td>';
										}

										if(strtotime($dia3) <= strtotime($dia) and $value['dia_3'] == 1 ){
											echo'<td class="text text-success">Presente</text></td>';
										}else if(strtotime($dia3) <= strtotime($dia) and $value['dia_3'] != 1 ){
											echo'<td class="text text-danger">Ausente</text></td>';
										}else{
											echo'<td class="text text-primary"> - </text></td>';
										}

										if(strtotime($dia4) <= strtotime($dia) and $value['dia_4'] == 1 ){
											echo'<td class="text text-success">Presente</text></td>';
										}else if(strtotime($dia4) <= strtotime($dia) and $value['dia_4'] != 1 ){
											echo'<td class="text text-danger">Ausente</text></td>';
										}else{
											echo'<td class="text text-primary"> - </text></td>';
										}

										if(strtotime($dia5) <= strtotime($dia) and $value['dia_5'] == 1 ){
											echo'<td class="text text-success">Presente</text></td>';
										}else if(strtotime($dia5) <= strtotime($dia) and $value['dia_5'] != 1 ){
											echo'<td class="text text-danger">Ausente</text></td>';
										}else{
											echo'<td class="text text-primary"> - </text></td>';
										}
									}
									echo'</tr>';
								}?>
							</tbody>
						</table>
					</div>
				</div>
				<!--Fim Lista de presença no dia-->

				<img src="../webroot/images/borda_baixo.jpg" style="width: 100%">
			</div>

		</div>

	</div>
</div>

</body>
</html>

<style type="text/css" media="screen">
	table{text-align: center;}
	td{font-weight: bold; text-align: center;}
	th{font-weight: bolder; text-align: center; font-size: 1.1em}
	#lista{margin-bottom: 50px; 	}
	#tabela{overflow: auto;}
	#divtab{height: 300px; overflow: auto;}
</style>

