<?php
	include "functions.php";
	
	session_start();
	
	//captar os dados recebidos do formulário com o método POST
	$id_task=$GET['id'];
	date_default_timezone_set('UTC');
    $date = date('m/d/Y h:i:s a', time());
	
	$altera="UPDATE tasks SET `completed_at`='$date' WHERE `id_task`='$id_task'";
	
	$resultado =DBExecute($altera);
	
	header("Location: welcome.php");
?>