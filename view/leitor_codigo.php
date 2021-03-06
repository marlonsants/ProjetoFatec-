<?php require_once('../sessao/verificaSessao.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href='../webroot/css/bootstrap.min.css'>
	<script src='../webroot/js/jquery-2.1.1.min.js'></script>
	<script src='../webroot/js/bootstrap.min.js'></script>
	
	<title>Leitor de Código de Barras</title>
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

					<div class="col-md-12 col-xs-12" id="borda" style=" border-color: rgb(40,145,58);"></div>

					<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1" id="info">
					<div class="row">
						<h3 class="col-md-2 col-xs-2"><b>Nome:</b></h3>
						<h3 class="col-md-10 col-xs-10" id="nome"></h3>
					</div>
					
					<div class="row">
						<h3 class="col-md-2 col-xs-2"><b>Status: </b></h3>
						<h4 class="col-md-10 col-xs-10" id="confirma"></h4>
					</div>
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

	<script type="text/javascript">
		$('document').ready(function(){
			$('#codigo_barra').focus();
		});
	</script>


	<script type="text/javascript">
		$(document).on('change','#codigo_barra',function(){ 
			var env = {};
			env.codigo_barra = $('#codigo_barra').val();
			$.ajax({
				type: "POST",
				url: "../model/confirmaPresenca.php",
				data: env,
				dataType: 'json',
				success: function(data){
					console.log(data);
					$('#nome').html(' ')
	                           // $('#inst').html(' ');
	                           // $('#email').html(' ');
	                           // $('#ncod').html(' ');
	                           $('#confirma').html(' ');
	                           if(data[0]['tipo'] == 1){
	                           	$('#confirma').append("<div class='alert alert-danger'><p>A Data Atual não corresponde ao cronograma do evento!<br>Verifique a data do evento<p></div>");
	                           	$( "#codigo_barra" ).focus();
	                           	return;
	                           }else{
	                           	$('#nome').append(data[0]['nome']);
	                           	$('#confirma').append("<div class='alert alert-success'>Presença confirmada</div>");
	                           	$('#ncod').html(' ');
	                           	$('#ncod').append('Código: ' + env.codigo_barra);
	                           	$("#codigo_barra").val('');
	                           	$( "#codigo_barra" ).focus();
	                           }

	                       },
	                       error: function(data){
	                       	console.log(data);
	                       	console.log("Alerta: Erro ao buscar");

	                       	$('#confirma').html(' ');	                         
	                       	$('#nome').html(' ');
	                       	$('#ncod').html(' ');
	                       	$('#ncod').append('Código: ' + env.codigo_barra);
	                       	$('#confirma').append("<div class='alert alert-danger'><p>O Código informado não corresponde a nenhum usuário cadastrado!<p></div>");
	                           	$("#codigo_barra").val('');
	                       	$( "#codigo_barra" ).focus();
	                       }
	                   });
			
			$('#codigo_barra').val(' ');
		});                 


	</script>

</body>
</html>