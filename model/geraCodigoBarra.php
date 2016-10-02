
<?php 
require_once('../config/funcoesmysql.php'); ?>

<html>
<head>
	<title></title>
	<meta charset="utf-8">

</head>
<body>

	<div>
		<?php

		$participantes = select('*','participante','1 Limit 33');
		foreach ($participantes as $key => $value) {
			echo '<div id="etiqueta" class="print">';
			echo'<center >';
			echo'<p style="font-size:9px">'.strtoupper($value['nome']).'</p>';
			geraCodigoBarra($value['cod_bar']);
			echo '<br>'.$value['cod_bar'];
			echo '</center>';
			echo'</div>';
		}
		



		?>


		
	</div> 

</body>
</html>

	<STYLE TYPE="text/css">

		.print{
			display: inline-block;
			height:3.3cm !important;
			width:8.3cm !important;
			padding-bottom:0px;
			margin-top: 0cm !important;
			margin-right: 0.3cm !important;
			border-radius: 10px;
		}
		.view{	
			display: inline-block;
			height:3.4cm !important;
			width:8.3cm !important;
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
			width: 26cm !important;
			height: 29.7cm !important;


		}
	</STYLE>

	<script type="text/javascript">
		$("#etiqueta").draggable();
	</script>