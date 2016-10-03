<?php 
// including the config file
include('../config/funcoesmysql.php');


$csv_file =  $_FILES['csv_file']['tmp_name'];
if (is_file($csv_file)) {
	$input = fopen($csv_file, 'a+');
	// if the csv file contain the table header leave this line
	$row = fgetcsv($input, 1024, ','); // here you got the header
	while ($row = fgetcsv($input, 1024, ',')) {
		$codigo = rand(1111111111,9999999999);
		insert('participante','nome,email,instituicao,cod_bar'," '".$row[0]."','".$row[1]."','".$row[2]."','".$codigo."'  ");
		
	}
}

// redirect to the index page
header('location: ../view/exportar.php');
?>


