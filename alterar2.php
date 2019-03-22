<?php
	include "functions.php";
	
	session_start();
	
	//captar os dados recebidos do formulário com o método POST
	$idviatura=$_POST['idviatura'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$ano=$_POST['ano'];
	$cor=$_POST['cor'];
	$kms=$_POST['kms'];
	$potencia=$_POST['potencia'];
	$combustivel=$_POST['combustivel'];
	
	$altera="UPDATE viaturas SET `marca`='$marca',`modelo`='$modelo',`ano`='$ano',`cor`='$cor',`kms`='$kms',`potencia`='$potencia',`combustivel`='$combustivel' WHERE `idviatura`=$idviatura;";
	
	$resultado =DBExecute($altera);
	
	header("Location: welcome.php");
?>