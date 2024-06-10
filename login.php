<?php session_start();?>
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
	<style>
.login-container {
    background-color: #fff;
    margin-left: 450px;
    margin-top: 75px;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    font-family: League Spartan;
}

h2 {
    color: #BB4430;
    font-size: 24px;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    padding-left: 85px;
}

label {
    margin-bottom: 10px;
    font-size: 14px;
    color: #333;
}

input[type="text"],
input[type="password"] {
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

input[type="submit"] {
    padding: 10px;
    background-color: #BB4430;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #940a0a;
}

.register-link {
    margin-top: 20px;
    font-size: 14px;
}

.register-link a {
    color: #BB4430;
    text-decoration: none;
    font-weight: bold;
}
</style>

<?php
$usuario=$_POST['usuario'];
$password=md5($_POST['clave']);

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT nombre, apellido FROM usuarios WHERE usuario='$usuario' AND clave='$password'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
	
	$_SESSION['nombre']=$respuesta['nombre'];
	$_SESSION['apellido']=$respuesta['apellido'];
		
		echo "Hola ".$_SESSION['nombre']." ".$_SESSION['apellido']."<br />";
		echo "Acceso al panel de usuarios.<br/>";
		echo "<a href='panel.php'>Panel</a>";	

}else{
	echo "No es un usuario registrado";
	include("form_registro.html");
}
?>

</body>
</html>