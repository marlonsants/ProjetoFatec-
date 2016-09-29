
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Fatec</title>
    <link rel="stylesheet" href='webroot/css/bootstrap.min.css'>
    <script src='webroot/js/jquery-2.1.1.min'></script>
    <script src='webroot/js/bootstrap.min.js'></script>
</head>

<style type="text/css">
    #borda{border: 1px solid #999; box-shadow: -0px -0px 45px #999;}
</style>

<body>

    <div class="container-fluid"><br>

        <div class="row">

            <div class="col-md-8 col-md-offset-2 col-xs-8" >

                <div id="borda" style="color: rgb(50,180,74);">
                    <img src="webroot/images/borda_cima.jpg" style="width: 100%">

                    <div class="col-md-2 col-xs-2">
                        <img src="webroot/images/logo_fatec.jpg" style="width: 100%;">
                        <img src="webroot/images/FUNEP.png" style="width: 100%;">
                    </div>

                    <div class="col-md-2 col-xs-2">
                        <img src="webroot/images/logo_recortada.png" style="width: 100%;">
                    </div>

                    <div class="col-md-8 col-xs-8">
                        <h2>IV Simposio de Tecnologia Sucroenergetica e de Biocombustiveis<br>Fatec - Jaboticabal-SP</h2>
                    </div>

                    <div class="col-md-12 col-xs-12" id="borda" style=" border-color: rgb(40,145,58);"></div>

                    <form id="formcad" method="post" action="sessao/sessao.php">

                        <!-- Informa se o cadastro foi Feito com Sucesso -->
                        <?php if(isset($usuario)){ ?>
                        <div class="alert alert-success"><center> <?php $usuario ?> cadastrado com sucesso! </center></div>
                        <?php } ?>

                        <center class="col-md-12"><h3>Acesse sua conta!</h3></center>
                        <?php 
                        		if(isset($_GET['erro'])){
                        			switch ($_GET['erro']) {
                        				case 1:
                        					echo '<div style="text-align:center;color:red;font-weight:bold">Usuario não cadastrado, verique e tente novamente</div>';
                        					break;
                        				case 2:
                        					echo '<div style="text-align:center;color:red;font-weight:bold">O nome de usuario está incorreto, verifique e tente novamente</div>';
                        					break;
                        				case 3:
                        					echo '<div style="text-align:center;color:red;font-weight:bold">A senha está incorreta, verifique e tente novamente</div>';
                        					break;	
                        				default:
                        					# code...
                        					break;
                        			}
                        			
                        		} 
                        ?>

                        <!-- Mensagem de Erro Caso Exista-->
                        <?php if(isset($erro)){ echo $erro;} ?>

                        <!-- input token -->
                        <div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>

                        <!-- input usuário -->
                        <div class="col-md-10 col-md-offset-1 form-group" id="usuario">
                            <input type="text" name="usuario" placeholder="E-mail" class="col-md-12 form-control">
                        </div>

                        <!-- input senha -->
                        <div class="col-md-10 col-md-offset-1 form-group" id="senha">
                            <input type="password" name="senha" placeholder="Senha" class="col-md-12 form-control">
                        </div>

                       

                        <!-- Botão logar -->
                        <div class="col-md-2 col-md-offset-5" id="logar">
                            <button type="submit" class="col-md-12 btn btn-info">Login</button>
                        </div>
                    </form>

                    <img src="webroot/images/borda_baixo.jpg" style="width: 100%">
                </div>
                
            </div>

        </div>
    </div>

</body>
</html>