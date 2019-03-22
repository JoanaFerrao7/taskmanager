
<html>
	<head>
		<title>Inserir registo na BD</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<h2>Inserir registos da DB</h2>
		<?php
			include ('functions.php');
			session_start();
			
			//Captar os dados recebidos do formulário com o método Post
			$marca=$_POST['marca'];
			$modelo=$_POST['modelo'];
			$ano=$_POST['ano'];
			$cor=$_POST['cor'];
			$kms=$_POST['kms'];
			$potencia=$_POST['potencia'];
			$combustivel=$_POST['combustivel'];
			
			/*Avalia se alguma das variáveis contém um valor nulo ou string vazia */
			if(!$marca || !$modelo || !$ano || !$cor || !$kms || !$potencia || !$combustivel )
			{
				echo ' Campos em falta. Volte atrás e tente de novo.';
				exit;
			}
			echo 'Dados recebidos:<br/>';
		
			//Inserir os dados na tabelta do registo
			$insere="INSERT INTO viaturas (`marca`,`modelo`,`ano`,`cor`,`kms`,`potencia`,`combustivel`) VALUES('".$marca."','".$modelo."','".$ano."','".$cor."','".$kms."','".$potencia."','".$combustivel."')";
			$resultado=DBExecute($insere);
			if ($resultado == 1) echo '<p>Dados inseridos<br/>';
			else echo '<p>Dados não inseridos <br/>';
		?>
		<p><a href="welcome.php">Voltar</a></p>
	</body>
</html>	