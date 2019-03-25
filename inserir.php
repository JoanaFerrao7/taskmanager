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
			
			date_default_timezone_set('UTC');
			$date = date("Y-m-d H:i:s");
			
			//Captar os dados recebidos do formulário com o método Post
			$name=$_POST['name'];
			$description=$_POST['description'];
			$username=$_POST['username'];
            //Inserir os dados na tabela do registo
			$insere="INSERT INTO tasks (`name`,`description`,`created_at`,`username`) VALUES('".$name."','".$description."','".$date."','".$username."')";
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
                    alert('Error. Please complete all the boxes!');
                    window.location = 'registar.php';
                </script>";
            
        
        echo "<p id='mensagem'>".$mensagem."</p>";
		?>
	</body>
</html>	