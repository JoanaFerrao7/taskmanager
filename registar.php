<?php
	//Este ficheiro, APÓS LOGIN (autenticação) com sucesso; apresentará uma página de boas-vindas
	include ('session.php');
?>
<html>
	<head>
		<title>Task Creator</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<style>
body{
    background-color:#9c9cad;
    font-family: 'Roboto', sans-serif;
	color:#0d0d26;
}

</style>
			
	</head>
	
	<body>
		<h2>Task Creator</h2> 
		 <form action="inserir.php" method="post">
		
			<table border="1">
			 <tr>
				<td>Name:</td>
				<td><input type="text" name="name"/></td>
			 </tr>
			 <tr>
				<td>Description:</td>
				<td><input type="text" name="description"/></td>
			 </tr>
			 <tr>
				<td>Criado por:</td>
				<td><input type="text" name="username" value="<?php echo $login_session?>" readonly/></td>
			 </tr>
			</table>
			<br>
			<button type="submit">Create</button>
		</form>
	</body>
</html>