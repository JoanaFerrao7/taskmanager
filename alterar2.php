<?php
	include "functions.php";
	
	session_start();
	
	//captar os dados recebidos do formulário com o método POST
	
	$id_task=$_POST['id_task'];
	$name=$_POST['name'];
	$description=$_POST['description'];
	
	$altera="UPDATE tasks SET `name`='$name',`description`='$description' WHERE `id_task`=$id_task;";
	
	$resultado =DBExecute($altera);
	
	header("Location: welcome.php");
?>