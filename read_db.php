<?php
$servidor = "localhost";
$basededatos = "vgames";
$usuario = "osproject";
$password = "peterchupapinga";

$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT * FROM Users";
$resultado = mysqli_query($conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
// Encabezado de la tabla
echo "<table width='20%' aling='center' cellpadding='6' cellspacing='0' bgcolor='skyblue' border='1' >";
	echo "<tr>";
		echo "<th>Username</th>";
		echo "<th>Email</th>";
		echo "<th>Birthdate</th>";
	echo "</tr>";
	
// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($columna = mysqli_fetch_array( $resultado ))
{
	echo "<tr>"; 
	echo "<td align='center' bgcolor='white'>" .$columna['Username']."</td>";
	echo "<td align='center' bgcolor='white'>" .$columna['Email']."</td>";
	echo "<td align='center' bgcolor='white'>" .$columna['Birthdate']."</td>";
             echo "</tr>";
}
echo "</table>"; // Fin de la tabla
mysqli_close( $conexion );  // cerrar conexión de base de datos
?>