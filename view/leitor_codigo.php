<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href='../webroot/css/bootstrap.min.css'>
	<script src='../webroot/js/jquery-2.1.1.min'></script>
	<script src='../webroot/js/bootstrap.min.js'></script>

	<title>Leitor de codigo v2</title>

	<style type="text/css">
		#borda{border: 1px solid #999; box-shadow: -0px -0px 45px #999; border-radius: 2px;}
	</style>
</head>
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

				<div class="col-md-12 col-xs-12" id="borda" style=" border-color: rgb(40,145,58);"></div>

				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1" id="info">
					<h3><b>Nome:</b><span id="nome"></span> </h3>
					<h3><b>E-mail:</b><span id="email"></span> </h3>
					<h3><b>Instituição:</b><span  id="inst"></span> </h3>
					<h3 id="confirma" style="color:blue;text-align: center;font-weight: bold"></h3>
				</div>

				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<center><label><h3 id="ncod"></h3></label></center>
						<input type="text" id="codigo_barra" class="form-control">
				</div>

				<img src="../webroot/images/borda_baixo.jpg" style="width: 100%">
			</div>
				
		</div>
		
	</div>
</div>

</body>
</html>