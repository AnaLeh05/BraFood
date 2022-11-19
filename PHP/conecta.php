<?php
	$hostname = "localhost";
	$usuario = "root";
	$senha = "";
	$bancodedados = "brafood";
	
	$link = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

	if ($link->connect_errno) {
		echo "Conexão falhou: (" . $link->connect_errno . ") " . $link->connect_error;
	}
?>