<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href='webroot/css/bootstrap.min.css'>
	<script src='webroot/js/jquery-2.1.1.min'></script>
	<script src='webroot/js/bootstrap.min.js'></script>
	
	<title>Leitor de Código de Barras</title>
</head>

<style type="text/css">
	.jumbotron{border: 1px solid #999; box-shadow: -0px -0px 45px #999;}
</style>

<body>

<div class="container">

	<div class="jumbotron">
		

			<div class="row" style="border: 2px solid #999; background-color: white;">
				<div class="col-md-4 col-xs-4">
					<img src="webroot/images/logo_fatec.jpg">
				</div>

				<center class="col-md-8 col-xs-8">
				<br>
					<h2>XX° Simposio de Xxxxxxxxxxx <br>Fatec - Jaboticabal-SP</h2>
				</center>
			</div><br>

			<div class="row" style="border: 2px solid #999; background-color: white;">
				<div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
			
					<div class="row">
						<div class="col-md-12 col-xs-12" id="info">
							<h3><b>Nome:</b><span id="nome"></span> </h3>
							<h3><b>E-mail:</b><span id="email"></span> </h3>
							<h3><b>Instituição:</b><span  id="inst"></span> </h3>
							<h3 id="confirma" style="color:blue;text-align: center;font-weight: bold"></h3>
						</div>
					</div>

					<div class="row">
						<center class="col-md-12 col-xs-12">
							
							<h1>||||||||||||||||||||||||||||</h1>
						</center>
					</div>

					<div class="row">
						<div class="col-md-12 col-xs-12">
							<center><label><h3 id="ncod"></h3></label></center>
							
								<input type="text" id="codigo_barra" class="form-control">	
								
						
							
						</div>
					</div><br>

				</div>
			</div>
			

		
	</div>
</div>

<script type="text/javascript">
	$(document).on('blur','#codigo_barra',function(){ 
	var env = {};
		env.codigo_barra = $('#codigo_barra').val();
		 $.ajax({
	                        type: "POST",
	                        url: "model/confirmaPresenca.php",
	                        data: env,
	                        dataType: 'json',
	                        success: function(data){
	                          console.log(data);
	                           $('#nome').html(' ');
	                           $('#inst').html(' ');
	                           $('#email').html(' ');
	                           $('#ncod').html(' ');
	                           $('#confirma').html(' ');
	                            
	                          $('#nome').append(data['nome']);
	                          $('#inst').append(data['instituicao']);
	                          $('#email').append(data['email']);
	                          $('#ncod').append(env.codigo_barra);
	                          $('#confirma').append("Presença confirmada");
	                            
	                        },
	                        error: function(data){
	                            console.log(data);
	                            console.log("Alerta: Erro ao buscar");
	                            $('#confirma').html(' ');
	                            $('#nome').html(' ');
	                           $('#inst').html(' ');
	                           $('#email').html(' ');
	                           $('#ncod').html(' ');
	                           $('#ncod').append(env.codigo_barra);
	                            $('#confirma').append("O código informado não corresponde a nenhum partipante cadastrado, verifique e tente novamente");
	                        }
	    });
    });                 
	

</script>

</body>
</html>