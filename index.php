<!DOCTYPE html>
<html>
<head>
    <title>4Events - Login</title>
    <link rel="stylesheet" type="text/css" href="webroot/css/bootstrap.css">
</head>
<body>
    <div class="header">
        <h1>4Events</h1>
        <h4>Sistema para Gestão de Eventos Científicos<hr></h4>
    </div>
    <div class="col-md-12">
       <form id="formcad" method="post" action="view/cadastro" class="col-md-12 col-xs-12 col-lg-12">
        <div class="container" >
            <div id="boxLoggin">
                <div class="jumbotron col-md-6 col-md-offset-3" id="cadastrar">
                    <a href="view/cadastro.php" id="novo">Já é registrado ?</a>
                </div>
                <!-- Inicio da caixa de login -->
                <div class="jumbotron col-md-6 col-md-offset-3" id="centerbox"> 
                 <div class="col-md-10 col-md-offset-1" id="usuario">


                     <!-- Informa se o cadastro foi Feito com Sucesso -->
                     <?php if(isset($usuario)){ ?>
                      <div class="alert alert-success"><center> <?php $usuario ?> cadastrado com sucesso! </center></div>
                      <?php } ?>


                      <h3>Acesse sua conta!</h3>

                      <!-- Mensagem de Erro Caso Exista-->
                      <?php if(isset($erro)){ echo $erro;} ?>
                  </div>
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
                <div class="col-md-2 col-md-offset-10" id="logar">
                    <button type="submit" class="col-md-12 btn btn-info">Login</button>
                </div>
            </div>
            <!-- Fim da caixa de login  -->
        </div>
    </div>
</form>
</div>
</body>
</html>

<style type="text/css">
    body{background-color:  #F8F7FF;}
    /*Caixa de Destaque com o nome do Sistema*/
    .header{background-color: #33B5E5; color:#fff; text-align: center; font-weight: bolder; height:300px; margin-top: -21px}
    /*Box que Guarda todo o Conteudo do login*/
    #boxLoggin{margin-top: -150px;}
    /*Jumbotron de Registro*/
    #cadastrar{background-color: #364152; padding: 10px; margin-bottom:0;text-align: right; }
    #novo{color:#fff; font-weight: bold;} 
    /*Título 'Acesse Sua Conta' */
    h3{color: #33B5E5;}
    /*Jumbotron Central*/
    #centerbox{background-color: #fff;margin-bottom:-5px; margin-top: -5px; border-radius:0px; box-shadow: 0 0 25px #777;}
    /*Botão de Login*/
    .btn-info{background-color: #364152; border: #364152; height:60px; width:60px;}
    .btn-info:hover{background-color: #33B5E5;}
    /*Jumbotron nova senha*/
    #novasenha{background-color: #F2F2F2; padding: 20px; margin-top:0;text-align: center;}
    /*Link Esqueceu sua senha?*/
    #esqueceu{color: #000;}
</style>