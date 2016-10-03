<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href='../webroot/css/bootstrap.min.css'>
	<script src='../webroot/js/jquery-2.1.1.min.js'></script>
	<script src='../webroot/js/bootstrap.min.js'></script>
	
	<title>Cadastro de Participantes</title>
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
                    	<img src="../webroot/images/fatec_logo.jpg" style="width: 100%;">
                    </div>

                    <div class="col-md-2 col-xs-2">
                        <img src="../webroot/images/logo_recortada.png" style="width: 100%; height: 130px">
                    </div>

                    <div class="col-md-8 col-xs-8" style="color: rgb(50,180,74);">
                        <h2>IV SIMPOSIO DE TECNOLOGIA SUCROENERGETICA E DE BIOCOMBUSTIVEIS<br>FATEC - JABOTICABAL-SP</h2>
                    </div>

					<?php include('menu.php'); ?>

					<div class="col-md-12 col-xs-12" id="borda" style=" border-color: rgb(40,145,58);"></div><br>

					<div class="row">
						<div class="col-md-10 col-md-offset-1">

							<form action="../model/cadastrar.php" method="post" accept-charset="utf-8">
								<h4><b>Nome:</b></h4>
								<input type="text" id="inptnome" name="nome" class="form-control"><br>
								<h4><b>E-mail:</b></h4>
								<input type="text" id="inptemail" name="email" class="form-control"><br>
								<h4><b>Instituição:</b></h4>
								<input type="text" id="inptinst" name="inst" class="form-control"><br>

								<div class="row">
									<div class="col-md-4 col-md-offset-4">
										<button class="btn btn-success" type="submit">Cadastrar e Imprimir Código de Barra</button>
									</div>
								</div>
							</form>

						</div>
					</div><br>

					<img src="../webroot/images/borda_baixo.jpg" style="width: 100%">
				</div>
				
			</div>

		</div>
	</div>

	