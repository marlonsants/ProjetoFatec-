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

	.barra {
    position:relative;
    display:block;
    width:100%;
    background-color:#eee;
    padding:3px;
    -webkit-border-radius:3px;
    -moz-border-radius:3px;
    -o-border-radius:3px;
    border-radius:3px;
    -webkit-box-shadow:inset 0 1px 3px rgba(0, 0, 0, .2);
    -moz-box-shadow:inset 0 1px 3px rgba(0, 0, 0, .2);
    -o-box-shadow:inset 0 1px 3px rgba(0, 0, 0, .2);
    box-shadow:inset 0 1px 3px rgba(0, 0, 0, .2)
}
.carga {
    height:20px;
    display:block;
    background-color:cornflowerblue;
    width:0%;
    border-radius:3px;
    -webkit-transition:width .8s ease;
    -moz-transition:width .8s ease;
    -o-transition:width .8s ease;
    transition:width .8s ease
}
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
					<h2>IV Simpósio de Tecnologia Sucroenergética e de Biocombustíveis<br>Fatec - Jaboticabal-SP</h2>
				</div>

				<?php include('menu.php'); ?>

				<div class="col-md-12 col-xs-12" id="borda" style=" border-color: rgb(40,145,58);"></div>

				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1" id="info">
					<h2 style="text-align: center"><b>Nome:</b><span id="nome"></span> </h2>
					<h2 id="confirma" style="color:blue;text-align: center;font-weight: bold"></h2>
				</div>

				<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="col-md-offset-4 col-md-4 col-xs-4">

				<div class="barra-area">
				    <div class="barra">
				            <span class="carga"></span>
				    </div>
				</div><br><br>
							<button type="button" id="sortear" name="sortear" class="btn btn-success col-md-12 col-xs-12">
							Sortear
							</button>

					</div>

					<div class="col-md-8 col-xs-8" style="font-size: 200%" id="nsorteado">
						<?php require_once('../config/funcoesmysql.php'); ?>
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
		
		var width = 0;
		var tempo = 20;
		var carga = document.querySelector('.carga');
		var barra = setInterval(function(){
		    width = width + 1;
		    carga.style.width = width + '%';
		    if (width === 100){ 
		        clearInterval(barra);
		        width = 0;
		    }
		},tempo);

		
			 $.ajax({
		                        type: "POST",
		                        url: "../model/sortear.php",
		                        data: env,
		                        dataType: 'json',
		                        success: function(data){
		                          console.log(data);
		                           $('#nome').html(' ');
		                           $('#ncod').html(' ');
		                           $('#confirma').html(' ');
		                           $('#nsorteado').html(' ');
		                            
		                          $('#nome').append(data['nome']);
		                          $('#ncod').append(env.codigo_barra);
		                          $('#nsorteado').append(data['codBar']);
		                            
		                        },
		                        error: function(data){
		                            console.log(data);
		                            console.log("Alerta: Erro ao buscar");
		                            $('#confirma').html(' ');
		                            $('#nome').html(' ');
		                           $('#ncod').html(' ');
		                           $('#ncod').append(env.codigo_barra);
		                            $('#confirma').append("<div class='alert alert-danger'><p>A Data Atual não corresponde ao cronograma do evento!<br>Verifique se a data do computador está de acordo com a data atual<p></div>");
		                        }
			
		    });
		
    });            	
</script>

<script type="text/javascript">
	// $(document).on('click','#sortear',function(){ 
		

	// });

</script>

</body>
</html>