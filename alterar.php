<?php
	include "functions.php";
	$id_task=$_GET ['id'];
	
	$tasks = DBRead3($id_task);
	
	foreach($tasks as $cl)
		{
			$cl_name = $cl['name'];
			$cl_description = $cl ['description'];
			$cl_created_at = $cl ['created_at'];
			$cl_completed_at = $cl ['completed_at'];
		} ?>
<html>
<head>
<title>Edit Task </title>
<meta charset="ISO-8859-1">
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
	<h2>Edit Task</h2>
	<form action="alterar2.php" method="post">
		<table border="1">
		<tr>
			<td>Task ID</td>
			<td><input type="text" name="id_task" value="<?php echo $id_task?>" readonly/></td>
		</tr>
		<tr>
			<td>Task Name</td>
			<td><input type="text" name="name" value="<?php echo $cl_name?>"/></td>
		</tr>
		<tr>
			<td>Task Description</td>
			<td><input type="text" name="description" value="<?php echo $cl_description?>"/></td>
		</tr>
		<tr>
			<td>Task Created At</td>
			<td><input type="text" name="created_at" value="<?php echo $cl_created_at?>" readonly/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Alterar"/></td>
		</tr>
		</table>
		</form>
	</body>
</html>