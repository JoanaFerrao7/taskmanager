<?php
 session_start();
?>
<html>
	<head>
		<title>Task Creator</title>
		<link rel="stylesheet" type="text/css" href="css/style_index.css">
		<link rel="shortcut icon" href="imagens/favicon.ico" />
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			include ('functions.php');
			session_start();
			
			$timezone = date_default_timezone_get();
			$username= $login_session;
			
			//Captar os dados recebidos do formulário com o método Post
			$name=$_POST['name'];
			$description=$_POST['description'];
            //Inserir os dados na tabela do registo
			$insere="INSERT INTO tasks (`name`,`description`,`created_at`,`username`) VALUES('".$name."','".$description."','".$timezone."','".$username."')";
			$resultado=DBExecute($insere);
			
			if ($resultado == 1) 
				echo "
                <script type='text/javascript'>
                    alert('Task Created!');
                    window.location = 'welcome.php';
                </script>";
			else 
				echo "
                <script type='text/javascript'>
                    alert('Não foi inserido com sucesso, campos em falta!');
                    window.location = 'registar.html';
                </script>";
            
        
        echo "<p id='mensagem'>".$mensagem."</p>";
		?>
	</body>
</html>	