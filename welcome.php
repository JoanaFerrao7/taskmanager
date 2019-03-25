<?php
	//Este ficheiro, APÓS LOGIN (autenticação) com sucesso; apresentará uma página de boas-vindas
	include ('session.php');
?>
<html>

	<head>
		<title> Welcome!</title>
		<meta charset = "UTF-8">
	</head>

	<body>
		<div align = "right"; style = " font-size:12px;"><h2>
		<p> Welcome <?php echo ' '.$login_session.'<br>'; ?>
		<a href = "logout.php"> Log out (<i> out </i>) </a></p></h2>
		</div>
		
		<?php $tasks = DBRead($login_session)?>
		<h1> List of tasks</h1>
		<table width="100%" border="1">
			<tr> 
			<td align=center>
			Name
			</td>
			<td align=center>
			Description
			</td>
			<td align=center>
			Create At
			</td>
			<td align=center>
			Created By
			</td>
			<td align=center>
			Completed At
			</td>
			<td align=center>
			Edit
			</td>
			<td align=center>
			Delete
			</td>
			<?php 
			foreach($tasks as $cl){
			
			echo "<tr>
			<td align=center>".($cl['name'])."</td>
			<td align=center>".($cl['description'])."</td>
			<td align=center>".($cl['created_at'])."</td>
	        <td align=center>".($cl['username'])."</td>
			<td align=center>".($cl['completed_at'])."</td>";
			
			date_default_timezone_set('UTC');
			$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
			$dayoftask = $cl['completed_at'];
			if(is_null($cl['completed_at'])){
			if($dayoftask <= $date){
			?>
			<td><a href="alterar.php?id=<?=$cl['id_task']?>">&#8634;</a></td>
			<td><a href="eliminar.php?id=<?=$cl['id_task']?>" onclick="return confirm('Tem a certeza que pretende eliminar o registo?')">x</a></td>
			</tr>
			<?php
			}	 else{}}} 
			?>
		</table>
		<br>
		<a href="registar.html"> <input type="button" name="" value="Create Task"></a>
	</body>
	
</html>