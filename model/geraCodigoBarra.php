<?php
	function geraCodigoBarra($numero){
		$fino = 1;
		$largo = 3;
		$altura = 50;
		
		$barcodes[0] = '00110';
		$barcodes[1] = '10001';
		$barcodes[2] = '01001';
		$barcodes[3] = '11000';
		$barcodes[4] = '00101';
		$barcodes[5] = '10100';
		$barcodes[6] = '01100';
		$barcodes[7] = '00011';
		$barcodes[8] = '10010';
		$barcodes[9] = '01010';
		
		for($f1 = 9; $f1 >= 0; $f1--){
			for($f2 = 9; $f2 >= 0; $f2--){
				$f = ($f1*10)+$f2;
				$texto = '';
				for($i = 1; $i < 6; $i++){
					$texto .= substr($barcodes[$f1], ($i-1), 1).substr($barcodes[$f2] ,($i-1), 1);
				}
				$barcodes[$f] = $texto;
			}
		}
		
		echo '<img src="../imagens/p.gif" width="'.$fino.'" height="'.$altura.'" border="0" />';
		echo '<img src="../imagens/b.gif" width="'.$fino.'" height="'.$altura.'" border="0" />';
		echo '<img src="../imagens/p.gif" width="'.$fino.'" height="'.$altura.'" border="0" />';
		echo '<img src="../imagens/b.gif" width="'.$fino.'" height="'.$altura.'" border="0" />';
		
		echo '<img ';
		
		$texto = $numero;
		
		if((strlen($texto) % 2) <> 0){
			$texto = '0'.$texto;
		}
		
		while(strlen($texto) > 0){
			$i = round(substr($texto, 0, 2));
			$texto = substr($texto, strlen($texto)-(strlen($texto)-2), (strlen($texto)-2));
			
			if(isset($barcodes[$i])){
				$f = $barcodes[$i];
			}
			
			for($i = 1; $i < 11; $i+=2){
				if(substr($f, ($i-1), 1) == '0'){
  					$f1 = $fino ;
  				}else{
  					$f1 = $largo ;
  				}
  				
  				echo 'src="../imagens/p.gif" width="'.$f1.'" height="'.$altura.'" border="0">';
  				echo '<img ';
  				
  				if(substr($f, $i, 1) == '0'){
					$f2 = $fino ;
				}else{
					$f2 = $largo ;
				}
				
				echo 'src="../imagens/b.gif" width="'.$f2.'" height="'.$altura.'" border="0">';
				echo '<img ';
			}
		}
		echo 'src="../imagens/p.gif" width="'.$largo.'" height="'.$altura.'" border="0" />';
		echo '<img src="../imagens/b.gif" width="'.$fino.'" height="'.$altura.'" border="0" />';
		echo '<img src="../imagens/p.gif" width="1" height="'.$altura.'" border="0" />';
	}

	
?>

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
		require_once('../config/funcoesmysql.php');

		$participantes = select('c.codBar,p.nome,p.email,p.instituicao','controle_presenca as c LEFT JOIN participante as p ON c.id_participante = p.id_participante','1');
			foreach ($participantes as $key => $value) {
				echo '<div style="display:inline-block;height:90px;width:234px;border:solid black 2px;padding:0px;margin:2px">';
				echo'<center style="padding:0px;margin:0px">';
				echo'<p>Nome:'.$value['nome'].'</p>';
				geraCodigoBarra($value['codBar']);
				echo '<br>'.$value['codBar'];
				echo '</center>';
				echo'</div>';
			}
		

				
				
		  ?>

		  
		
	</div> 

</body>
</html>