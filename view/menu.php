<style type="text/css">
  .meulink{color: #000; text-decoration:none; border-radius: 10px; margin-right: 5px; margin-bottom: 10px;}
  .meulink:hover{color: white; text-decoration:none; background-color: rgb(50,180,74);}

  .meulinksair{color: #000; text-decoration:none; border-radius: 10px; margin-bottom: 10px;}
  .meulinksair:hover{color: white; text-decoration:none; background-color: #E84C3A;}
  .active{color: white; text-decoration:none; background-color: rgb(50,180,74);}
</style>
<div class="col-md-12"><br>
<nav>
  <a href="leitor_codigo.php?id=leitor_codigo" id="leitor_codigo" class=" meulink col-md-2 col-md-offset-1 ">
    <center><h4><span class="glyphicon glyphicon-barcode"></span> Identificação</h4></center>
  </a>

  <a href="sorteio.php?id=sorteio" id="sorteio" class=" meulink col-md-2">
    <center><h4><span class="glyphicon glyphicon-stats"></span> Sorteio</h4></center>
  </a>

  <a href="cadastro.php?id=cadastro" id="cadastro" class=" meulink col-md-2">
    <center><h4><span class="glyphicon glyphicon-pencil"></span> Cadastro</h4></center>
  </a>

  <a href="presenca.php?id=presenca" id="presenca" class=" meulink col-md-2">
    <center><h4><span class="glyphicon glyphicon-calendar"></span> Presença</h4></center>
  </a>

  <a href="../sessao/logout.php" class="meulinksair col-md-2">
    <center><h4 ><span class="glyphicon glyphicon-log-out" ></span> Sair</h4></center>
  </a>
</nav>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    var status = "<?php echo $_GET['id']; ?>";
    console.log(status);
    $('#'+status).addClass('active');


  });
</script>