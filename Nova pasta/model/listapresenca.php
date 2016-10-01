<?php
	require_once('../config/funcoesmysql.php');

	$usuarios = select('*', 'participante');

	echo json_encode($usuarios);