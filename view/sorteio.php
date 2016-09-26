<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../webroot/css/bootstrap.css">
	<title>Sorteio</title>
</head>

<style type="text/css">
	.jumbotron{border: 1px solid #999; box-shadow: -0px -0px 45px #999;}
</style>

<body>

<div class="container">

	<div class="jumbotron" style="background-image: url('../webroot/images/logo_fatec.jpg');">
	<!--div class="jumbotron" style="background-color: white;"-->
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
					</div><br>

					<div class="row">
						<div class="col-md-4 col-xs-4">
							<button id="sortear" name="sortear" class="btn btn-success col-md-12 col-xs-12">
								Sortear
							</button>
						</div>

						<div class="col-md-8 col-xs-8" style="font-size: 200%">
							<?php echo rand(0, 500); ?>
						</div>

					</div><br>

				</div>
			</div>
			

		</form>
	</div>
</div>

</body>
</html>