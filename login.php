<?php
	//Este ficheiro login.php tem o código PHP e HTML necessário para fazer o login
	require("functions.php");
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//username and password enviados do formulário (form)
		
		$myusername = $_POST['username'];
		$mypassword = $_POST['pass'];
		
		$sql = "SELECT username FROM users WHERE username = '$myusername' and pass = '$mypassword' ";
		$result = DBExecute($sql);
		
		$count = mysqli_num_rows ($result);
		mysqli_free_result($result);
		
		//Se a query (consulta) der 1 resutlado concidente com $myusername e $mypassword,
		//$count será igual a 1 (1 linha de resultado)
		
		if($count == 1)
		{
			$_SESSION['login_user'] = $myusername;//cria a variavel de sessão login_user (variavel global)
			
			header("location: welcome.php");
		}
		else
		{
			echo "
                <script type='text/javascript'>
                    alert('Senha ou utilizador errados!');
                    window.location = 'login.html';
                </script>";
		}
	}
	mysqli_close($db);
	
?>