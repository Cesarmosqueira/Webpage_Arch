<META HTTP-EQUIV="REFRESH" CONTENT="2; URL=http://localhost/index.html">
<?php
$servidor = "localhost";
$basededatos = "vgames";
$usuario = "osproject";
$password = "peterchupapinga";

$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

$Username = $_POST["Username"];
$Email = $_POST["Email"];
$Birthdate = $_POST["Birthdate"];

if($Username==NULL or $Email==NULL or $Birthdate==NULL){}
else {
	$insertar= "INSERT INTO Users (Username, Email, Birthdate) VALUES ('$Username','$Email','$Birthdate')";
	$query= mysqli_query($conexion,$insertar);
}
	header('Location: index.html');
	die()          
?>
