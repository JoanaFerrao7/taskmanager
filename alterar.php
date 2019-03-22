<?php
	include "functions.php";
	$idviatura=$_GET ['id'];
	
	$viaturas = DBRead2($idviatura);
	
	foreach($viaturas as $cl)
		{
			$cl_marca = $cl['marca'];
			$cl_modelo = $cl ['modelo'];
			$cl_ano = $cl ['ano'];
			$cl_cor = $cl ['cor'];
			$cl_kms = $cl ['kms'];
			$cl_potencia = $cl ['potencia'];
			$cl_combustivel = $cl ['combustivel'];
		} ?>
<html>
<head>
<title>Editar veiculo </title>
<meta charset="ISO-8859-1">
</head>
<body>
	<h2>Editar veiculo</h2>
	<form action="alterar2.php" method="post">
		<table border="1">
		<tr>
			<td>ID do carro</td>
			<td><input type="text" name="idviatura" value="<?php echo $idviatura?>"/></td>
		</tr>
		<tr>
			<td>Marca</td>
			<td><input type="text" name="marca" value="<?php echo $cl_marca?>"/></td>
		</tr>
		<tr>
			<td>Modelo:</td>
			<td><input type="text" name="modelo" value="<?php echo $cl_modelo?>"/></td>
		</tr>
		<tr>
			<td>Ano:</td>
			<td><input type="text" name="ano" value="<?php echo $cl_ano?>"/></td>
		</tr>
		<tr>
			<td>Cor:</td>
			<td><input type="text" name="cor" value="<?php echo $cl_cor?>"/></td>
		</tr>
		<tr>
			<td>KMS:</td>
			<td><input type="text" name="kms" value="<?php echo $cl_kms?>"/></td>
		</tr>
		<tr>
			<td>Potencia:</td>
			<td><input type="text" name="potencia" value="<?php echo $cl_potencia?>"/></td>
		</tr>
		<tr>
			<td>Combustivel:</td>
			<td><input type="text" name="combustivel" value="<?php echo $cl_combustivel?>"/></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Alterar"/></td>
		</tr>
		</table>
		</form>
	</body>
</html>