<?php
	include "functions.php";
	
	session_start();
	
	//captar os dados recebidos do formulário com o método POST
    $id_task=$_POST['id_task'];
    $completed_at=$_POST['completed_at'];
	
	$altera="UPDATE tasks SET `completed_at`='$completed_at' WHERE `id_task`='$id_task'";
	
	$resultado =DBExecute($altera);
	
	header("Location: welcome.php");
?>