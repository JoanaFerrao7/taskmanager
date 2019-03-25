<?php
	//Este ficheiro, APÓS LOGIN (autenticação) com sucesso; apresentará uma página de boas-vindas
	include ('session.php');
?>
<html>

	<head>
		<title> Welcome!</title>
        <meta charset = "UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		
<style>
body{
    font-family: 'Roboto', sans-serif;
	color:white;
}

table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {background-color: #f2f2f2;}
.btn {
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  background: #60a4d1;
  padding: 12px 20px 12px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #4a84a8;
  text-decoration: none;
}
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
            $complete=[];
            $incomplete=[];
            foreach( $tasks as $cl ){
                date_default_timezone_set('UTC');
                $date = date('m/d/Y h:i:s a', time());
                $dayoftask = $cl['completed_at'];
                if( $dayoftask < $date ){
                    $complete[]="
                        <tr>
                            <td>{$cl['name']}</td>
                            <td>{$cl['description']}</td>
                            <td>{$cl['created_at']}</td>
                            <td>{$cl['username']}</td>
                            <td><form action='complete.php' method='POST'><input type='submit' value='complete'></form>
                            <td><a href='alterar.php?id={$cl['id_task']}'>&#8634;</a></td>
                            <td><a href='eliminar.php?id={$cl['id_task']}'' onclick='return confirm('Tem a certeza que pretende eliminar o registo?')''>x</a></td>
                        </tr>";
                } else {
                    $incomplete[]="
                        <tr>
                            <td>{$cl['name']}</td>
                            <td>{$cl['description']}</td>
                            <td>{$cl['created_at']}</td>
                            <td>{$cl['username']}</td>
                            <td>{$cl['completed_at']}</td>
                        </tr>";
                }
            }
        ?>


        <!-- Completed tasks -->
        <table id='complete' width='100%' border=1>
            <tr> 
                <td align=center>Name</td>
                <td align=center>Description</td>
                <td align=center>Created At</td>
                <td align=center>Created By</td>
                <td align=center>Complete</td>
                <td align=center>Edit</td>
                <td align=center>Delete</td> 
            </tr>
            <?php
                echo implode( PHP_EOL, $complete );
            ?>
        </table><br>



        <!-- uncompleted tasks -->
        <table id='incomplete' width='100%' border=1>
            <tr> 
                <td align=center>Name</td>
                <td align=center>Description</td>
                <td align=center>Created At</td>
                <td align=center>Created By</td>
                <td align=center>Completed At</td>
            </tr>
            <?php
                echo implode( PHP_EOL, $incomplete );
            ?>
        </table>
		<br>
		<a href="registar.php"> <input type="button" name="" value="Create Task" class="btn"></a>
	</body>
	
</html>