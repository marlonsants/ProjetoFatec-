<?php require_once('../sessao/verificaSessao.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<link rel="stylesheet" href='../webroot/css/bootstrap.min.css'>
	<script src='../webroot/js/jquery-2.1.1.min'></script>
	<script src='../webroot/js/bootstrap.min.js'></script>	<title>Sorteio</title>
</head>

<style type="text/css">
	#borda{border: 1px solid #999; box-shadow: -0px -0px 45px #999;}

	#myProgress {
    position: relative;
    width: 100%;
    height: 30px;
    background-color: grey;
	}
	#myBar {
	    position: absolute;
	    width: 1%;
	    height: 100%;
	    background-color: rgb(0,0,200);
	}
	span{color: black}
	.glyphicon{color: white;}
</style>

<body>

	<div class="container-fluid"><br>

		<div class="row">

			<div class="col-md-10 col-md-offset-1 col-xs-8" >

				<!--div id="borda" style="color: rgb(50,180,74);"-->
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

					<div class="col-md-12 col-xs-12" id="borda" style=" border-color: rgb(40,145,58);"></div>

					<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1" id="info">
						<h3><b>Nome:</b><span id="nome"></span> </h3>
						<h3><b>Código:</b><span id="codigoBarra"></span> </h3>
						<h2 id="confirma" style="color:blue;text-align: center;font-weight: bold"></h2>

						<div id="myProgress" class="progress">
  								<div id="myBar"></div>
							</div><br><br>
					</div>

					<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
						<div class="col-md-offset-4 col-md-4 col-xs-4">

							
							<button type="button" id="sortear" name="sortear" class="btn btn-success col-md-12 col-xs-12">
								Sortear
							</button>

						</div>

						

					</div>

					<img src="../webroot/images/borda_baixo.jpg" style="width: 100%">
				</div>
				
			</div>

		</div>
	</div>

	<script type="text/javascript">
		$(document).on('click','#sortear',function(){ 
			var env = {};

				$('#nome').html(' ');
				$('#confirma').html(' ');
				$('#codigoBarra').html(' ');

			 	var elem = document.getElementById("myBar"); 
			    var width = 1;
			    var id = setInterval(frame, 10);
			    function frame() {
			        if (width >= 100) {
			            clearInterval(id);
			        } else {
			            width+= 0.2; 
			            elem.style.width = width + '%'; 
			        }
			    }

			$('#confirma').html('<br><h3><b>Sorteando...<b></h3> ');
			
			var stop = setInterval(function(){
				console.log('entrou no ajax');
				$.ajax({
					type: "POST",
					url: "../model/sortear.php",
					data: env,
					dataType: 'json',
					success: function(data){
						console.log(data);
						$('#nome').html(' ');
						
						$('#confirma').html(' ');
						$('#codigoBarra').html(' ');
						$('#nsorteado').html(' ');
						$('#confirma').html(' ');
						$('#confirma').append('<h1 class"alert alert-success" style="font-family: Arial">Parábens!!!</h1> ');

						$('#nome').append(data['nome'].toUpperCase());
						
						$('#codigoBarra').append(data['cod_bar']);

					},
					error: function(data){
						console.log(data);
						console.log("Alerta: Erro ao buscar");
						$('#confirma').html(' ');
						$('#nome').html(' ');
						
						
						$('#confirma').append("<div class='alert alert-danger'><p>A Data Atual não corresponde ao cronograma do evento!<br>Verifique se a data do computador está de acordo com a data atual<p></div>");
					}

				});
				clearInterval(stop);
			}, 5000);  
		});         	
	</script>

	<script type="text/javascript">
	// $(document).on('click','#sortear',function(){ 
		

	// });

</script>

</body>
</html>