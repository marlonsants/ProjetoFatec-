<style type="text/css">
  .meulink{color: #fff; text-decoration:none; border-radius: 10px; margin-top: 5px; }
  .meulink:hover{color: white; text-decoration:none; background-color: rgb(50,180,74);}

  .meulinksair{color: #fff; text-decoration:none; border-radius: 10px;margin-top: 5px;}
  .meulinksair:hover{color: white; text-decoration:none; background-color: #E84C3A;}
  .active{color: white; text-decoration:none; background-color: rgb(50,180,74);}
  a{font-weight: bolder; color: #fff;}
  .div{background-color: #fff }
</style>
<br>
<nav class="navbar navbar-inverse col-md-12 ">
  <a href="leitor_codigo.php?id=leitor_codigo" id="leitor_codigo" class=" meulink col-md-2">
    <center><h5><span class="glyphicon glyphicon-barcode"></span> Identificação</h5></center>
  </a>

  <a href="sorteio.php?id=sorteio" id="sorteio" class=" meulink col-md-2">
    <center><h5><span class="glyphicon glyphicon-stats"></span> Sorteio</h5></center>
  </a>

  <a href="cadastro.php?id=cadastro" id="cadastro" class=" meulink col-md-2">
    <center><h5><span class="glyphicon glyphicon-pencil"></span> Cadastro</h5></center>
  </a>

  <a href="presenca.php?id=presenca" id="presenca" class=" meulink col-md-2">
    <center><h5><span class="glyphicon glyphicon-calendar"></span> Presença</h5></center>
  </a>

  <a href="../model/relatorio.php?id=presenca" id="relatorio" class=" meulink col-md-2">
    <center><h5><span class="glyphicon glyphicon-list-alt"></span> Relatório</h5></center>
  </a>

  <a href="../sessao/logout.php" class="meulinksair col-md-2">
    <center><h5 ><span class="glyphicon glyphicon-log-out" ></span> Sair</h5></center>
  </a>
</nav>


<script type="text/javascript">
  $(document).ready(function(){
    var status = "<?php echo $_GET['id']; ?>";
    console.log(status);
    $('#'+status).addClass('active');


  });
</script>