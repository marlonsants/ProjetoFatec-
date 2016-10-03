
		<?php 
		require_once('../config/funcoesmysql.php'); ?>

<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<STYLE TYPE="text/css">
		p{
			text-align: center;
			margin: 0px;
			padding: 0px;
		}
		body{
			margin:0px;
			padding: 0px;
			width: 793.700px;
			height: 1122.519px;
		}
	</STYLE>
</head>
<body>

	<div>
<?php
	
		$participantes = select('*','participante','1 order by nome');
			foreach ($participantes as $key => $value) {
				echo '<div style="display:inline-block;height:90px;width:234px;border:solid black 2px;padding:0px;margin:2px">';
				echo'<center style="padding:0px;margin:0px">';
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