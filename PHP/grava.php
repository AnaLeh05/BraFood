<?php
	include("conecta.php");
	
	$recnome=$_POST["nome"];
	$recemail=$_POST["email"];
	$recsenha=$_POST["senha"];
	
	mysqli_query($conexao, "insert into dados (nome, email, senha) values ('$recnome', '$recemail', '$recsenha')");
	
	header("location:lista.php");
?>