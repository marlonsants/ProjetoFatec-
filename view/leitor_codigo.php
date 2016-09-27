<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../webroot/css/bootstrap.css">
	<title>Leitor de Código de Barras</title>
</head>

<style type="text/css">
	.jumbotron{border: 1px solid #999; box-shadow: -0px -0px 45px #999;}
</style>

<body>

<div class="container">

	<div class="jumbotron" style="background-image: url('../webroot/images/logo_fatec.jpg');">
		<form>

			<div class="row" style="border: 2px solid #999; background-color: white;">
				<div class="col-md-4 col-xs-4">
					<img src="../webroot/images/logo_fatec.jpg">
				</div>

				<center class="col-md-8 col-xs-8">
				<br>
					<h2>XX° Simposio de Xxxxxxxxxxx <br>Fatec - Jaboticabal-SP</h2>
				</center>
			</div><br>

			<div class="row" style="border: 2px solid #999; background-color: white;">
				<div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
			
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<h3><b>Nome:</b> Teste Teste Teste</h3>
							<h3><b>E-mail:</b> Teste Teste Teste</h3>
							<h3><b>Instituição:</b> Teste Teste Teste</h3>
						</div>
					</div>

					<div class="row">
						<center class="col-md-12 col-xs-12">
							<!-- colocar aqui, talvez, o codigo de barra gerado pelo numero no input -->
							<h1>||||||||||||||||||||||||||||</h1>
						</center>
					</div>

					<div class="row">
						<div class="col-md-12 col-xs-12">
							<center><label>Numero do Código de Barra</label></center>
							<input type="text" name="codigo_barra" id="codigo_barra" class="form-control">	
						</div>
					</div><br>

				</div>
			</div>
			

		</form>
	</div>
</div>

</body>
</html>