	
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
		height:3.4cm !important;
		width:8.3cm !important;
		padding:0px;
		margin-bottom: -1cm !important; 
		margin-top: 0cm !important;
		margin-right: 0.3cm !important;
		border-radius: 10px;
	}
	.view{	
		display: inline-block;
		height:3.4cm !important;
		width:8.3cm !important;
		border:1px solid black ;
		padding:0px;
		margin-bottom: -1px !important; 
		margin-top: 0cm !important;
		margin-right: 0.3cm !important;
		border-radius: 10px;
	}

	@media print{
		.view{display: none !important}
	}

	
	body{
		margin-top: 0.4cm !important;
		width: 26cm !important;
		height: 29.7cm !important;
		

	}
</STYLE>

<script type="text/javascript">
	$("#etiqueta").draggable();
</script>