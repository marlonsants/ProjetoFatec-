	
<!DOCTYPE>
<head>
	<meta charset="utf-8">
	<title></title>
	<script type="text/javascript" src="../webroot/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../webroot/js/jquery-ui.js"></script>
	
	
</head> 

<body>
	<?php
	require_once('../config/funcoesmysql.php');
	$codigo = $_GET['cod_bar'];

	$etiqueta = select( '*','participante', 'cod_bar = ' . $codigo);

	echo '<div id="etiqueta" class="print">';
	echo'<center >';
	echo'<p style="font-size:12px;">'.strtoupper($etiqueta[0]['nome']).'</p>';
	geraCodigoBarra($etiqueta[0]['cod_bar']);
	echo '<br>'.$etiqueta[0]['cod_bar'];
	echo '</center>';
	echo'</div>';

	for($x=0;$x<32;$x++){

		echo '<div class="view">';

		echo '</div>';
		
	}	

	?>


</body>
<STYLE TYPE="text/css">
	.print{
		display: inline-block;
		height:2.8cm;
		width:6.6cm;
		padding:0px;
		margin-bottom: 0cm;
		margin-top: 0cm;
		margin-right: 0.4cm;
	}
	.view{
		display: inline-block;
		height:2.8cm;
		width:6.6cm;
		border:1px solid black ;
		padding:0px;
		margin-bottom: 0cm;
		margin-top: 0cm;
		margin-right: 0.4cm;
	}

	@media prinst{
		.view{display: none}
	}

	p{
		text-align: center;
		margin: 0px;
		padding-top: 10px;
	}
	body{
		margin-right: 0.5cm;
		width: 23cm;
		height: 29.5cm;
		

	}
</STYLE>

<script type="text/javascript">
	$("#etiqueta").draggable();
</script>