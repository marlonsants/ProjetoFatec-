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

			<div class="col-md-8 col-md-offset-2 col-xs-8" >

				<div id="borda" style="color: rgb(50,180,74);">
					<img src="../webroot/images/borda_cima.jpg" style="width: 100%">

					<div class="col-md-2 col-xs-2">
						<img src="../webroot/images/logo_fatec.jpg" style="width: 100%;">
						<img src="../webroot/images/FUNEP.png" style="width: 100%;">
					</div>

					<div class="col-md-2 col-xs-2">
						<img src="../webroot/images/logo_recortada.png" style="width: 100%;">
					</div>

					<div class="col-md-8 col-xs-8">
						<h2>IV Simposio de Tecnologia Sucroenergetica e de Biocombustiveis<br>Fatec - Jaboticabal-SP</h2>
					</div>

					<?php include('menu.php'); ?>

					<div class="col-md-12 col-xs-12" id="borda" style=" border-color: rgb(40,145,58);"></div>

					<!--Lista de presença no dia-->
					<div class="row">
						<h3 class="col-md-10 col-md-offset-1"><b>Data: </b>XX/XX/XXXX</h3>
					</div>

					<h3 class="row">
						<div class="col-md-5 col-md-offset-1"><b>Nome: </b>Teste1</div>
						<div class="col-md-5"><b>Código: </b>1234567890</div>
					</h3>
					<!--Fim Lista de presença no dia-->

					<img src="../webroot/images/borda_baixo.jpg" style="width: 100%">
				</div>
				
			</div>

		</div>
	</div>

</body>
</html>