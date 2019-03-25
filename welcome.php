<?php
	//Este ficheiro, APÓS LOGIN (autenticação) com sucesso; apresentará uma página de boas-vindas
	include ('session.php');
?>
<html>

	<head>
		<title> Welcome!</title>
		<meta charset = "UTF-8">
		
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>



	</head>

	<body>
		<div align = "right" style = " font-size:12px;"><h2>
		<p> Welcome <?php echo ' '.$login_session.'<br>'; ?>
		<a href = "logout.php"> Log out (<i> out </i>) </a></p></h2>
		</div>
		
		<?php $tasks = DBRead($login_session)?>
        <h1> List of tasks</h1>
        <?php
        			foreach($tasks as $cl){
        date_default_timezone_set('UTC');
        $date = date('m/d/Y h:i:s a', time());
        $dayoftask = $cl['completed_at'];
        
        if($dayoftask < $date){
        echo "
		<table width=100% border=1>
			<tr> 
			<td align=center>Name</td>
            <td align=center>Description</td>
            <td align=center>Create At</td>
			<td align=center>Created By</td>
			<td align=center>Completed At</td>
            <td align=center>Edit</td>
            <td align=center>Complete</td>
			<td align=center>Delete</td> 
            </tr>
            <tr>
			<td align=center>".($cl['name'])."</td>
			<td align=center>".($cl['description'])."</td>
			<td align=center>".($cl['created_at'])."</td>
	        <td align=center>".($cl['username'])."</td>
			<td align=center>".($cl['completed_at'])."</td>";
			?>
            <td align=center><a href="alterar.php?id=<?=$cl['id_task']?>">&#8634;</a></td>
            <td align=center><a href="alterar.php?id=<?=$cl['id_task']?>">&#10003;</a></td>
			<td align=center><a href="eliminar.php?id=<?=$cl['id_task']?>" onclick="return confirm('Tem a certeza que pretende eliminar o registo?')">x</a></td>
            </tr>
			<?php
            echo"</table><br>";}else{
                echo"<table width=100% border=1>
                <tr> 
                <td align=center>Name</td>
                <td align=center>Description</td>
                <td align=center>Create At</td>
                <td align=center>Created By</td>
                <td align=center>Completed At</td>
                </tr>
                <tr>
                <td align=center>".($cl['name'])."</td>
                <td align=center>".($cl['description'])."</td>
                <td align=center>".($cl['created_at'])."</td>
                <td align=center>".($cl['username'])."</td>
                <td align=center>".($cl['completed_at'])."</td>  
                </tr>             
                </table>";
            }
            } 
			?>
		<br>
		<a href="registar.php"> <input type="button" name="" value="Create Task"></a>
	</body>
	
</html>