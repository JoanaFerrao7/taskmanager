<?php
	//Este ficheiro session.php verifica a variável de sessão(variável global)
	//Se não houver sessão, redirecionará para a página de login
	include ("functions.php");
	session_start();
	
	$user_check = 	$_SESSION['login_user'];
	$sql =	 		"SELECT username FROM users WHERE username = '$user_check'";
	$ses_sql = 		DBExecute($sql);
	
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	
	$login_session = $row['username'];
	
	mysqli_free_result($ses_sql);
	
	if(!isset($_SESSION['login_user'])){
	header("location:index.html");
	}
?>