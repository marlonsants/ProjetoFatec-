	

<head>
	<meta charset="utf-8">
	<title></title>
	<script type="text/javascript" src="../webroot/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../webroot/js/jquery-ui.js"></script>
	
</head> 

<?php
require_once('../config/funcoesmysql.php');
$codigo = $_GET['cod_bar'];

$etiqueta = select( '*','participante', 'cod_bar = ' . $codigo);

echo '<div id="etiqueta" style="display:inline-block;height:90px;width:234px;border:2px solid black ;padding:0px;margin:2px">';
echo'<center style="padding:0px;margin:0px">';
echo'<p>Nome:'.$etiqueta[0]['nome'].'</p>';
geraCodigoBarra($etiqueta[0]['cod_bar']);
echo '<br>'.$etiqueta[0]['cod_bar'];
echo '</center>';
echo'</div>';
?>


<?php 
for($x=1;$x<34;$x++){
	echo '<div class="view" style="display:inline-block;height:90px;width:234px;border: solid black ;padding:0px;margin:2px"></div>';

}
?>

<STYLE TYPE="text/css">

@media print{
    .iew{display:none;}
}
	p{
		text-align: center;
		margin: 0px;
		padding: 0px;
	}
	body{
		margin:0px;
		padding: 0px;
		width: 793.700px;

	}
</STYLE>

<script type="text/javascript">
	$("#etiqueta").draggable();
</script>