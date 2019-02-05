<?php 
	$conexion=mysqli_connect('localhost','root','','programas');
    $daytoday = date("w");
    echo $daytoday;
 ?>


<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>mostrar datos</title>
</head>
<body>

	<table border="1" >
		<tr>
			<td>Programa</td>
			<td>Descripción</td>
			<td>Hora Inicio</td>
			<td>Hora Fin</td>
		</tr>

		<?php 
		$sql="SELECT * FROM programas where semestre = '1' and diadetransmision = '1' order by horarioinicio asc";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombreprog'] ?></td>
			<td><?php echo $mostrar['descripcion'] ?></td>
			<td><?php echo $mostrar['horarioinicio'] ?></td>
			<td><?php echo $mostrar['horafin'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>