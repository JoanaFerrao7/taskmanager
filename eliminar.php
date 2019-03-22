<?php
	include "functions.php";
	$id=$_GET ['id'];
	echo $id;
	
	$dropCliente = DBDelete($id);
	header ("Location: welcome.php");
?>