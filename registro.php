<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css"href="estilos.css">
    <link rel="shortcut icon" href="./logomin.png" type="image/x-icon">
    <title>Fauvismo</title>
</head>
<body>
<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$clave = md5($_POST['clave']);

	include("conexion.php");


	$consulta = mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, email, usuario, clave, newsletter) VALUES('$nombre','$apellido','$email', '$usuario', '$clave', '$news')");


	header("Location:form_login.html");

?>	
    
</body>
</html>