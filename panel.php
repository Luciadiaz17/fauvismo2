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
    <div style="width: 100%; height: 100%; justify-content: center; align-items: center; gap: 253px; display: inline-flex">
        <div class="nav"><a href="index.html"><div style="width: 332px; height: 70px; color: #BB4430; font-size: 64px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">FAUVISMO</div></a></div>
        <div style="width: 682px; height: 19px; justify-content: center; align-items: flex-start; gap: 21px; display: inline-flex">
            <div class="nav"><a href="artistas.html"><div style="width: 80px; height: 19px; text-align: center; color: #BB4430; font-size: 15px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Artistas</div></a></div>
            <div class="nav"><a href="galeria.html"><div style="width: 69px; height: 17px; text-align: center; color: #BB4430; font-size: 15px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Galeria</div></a></div>
            <div class="nav"><a href="contacto.html"><div style="width: 85px; height: 18px; text-align: center; color: #BB4430; font-size: 15px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Contacto</div></a></div>
            <form action="resultados_buscar.php" method="post">
                <input type="search" name="buscar" placeholder="Artista" />
                <input type="submit" value="Buscar">
            </form>  
            <div class="login-buttons">
                <a href="form_login.html">Iniciar Sesión</a>
            </div>
        </div>
    </div>
    <style>
        form {
            display: flex;
            flex-direction: row; /* Cambiar a fila */
            align-items: center;
            width: 200px; /* Ajustar el ancho según sea necesario */
            margin-right: 100px;
            margin-left: -35px;
            padding: 20px;
            border-radius: 10px;
           
        }
    
        label {
            margin-right: 10px; /* Ajustar el margen para separación */
            font-size: 15px;
            color: #EFE6DD;
;
        }
    
        input[type="search"] {
            padding: 10px;
            width: 150px; /* Ajustar el ancho según sea necesario */
            font-size: 13px;
            outline: none;
            margin-right: 10px; /* Espacio entre el campo de búsqueda y el botón */
        }
    
        input[type="submit"] {
            padding: 5px 15px;
            background-color: #BB4430;
            color: #EFE6DD;
            border: none;
            border-radius: 5px;
            font-size: 13px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
    
        input[type="submit"]:hover {
            background-color: #ffffff;
        }
        .login-buttons {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;
            font-family: League Spartan;
        }

        .login-buttons a {
            padding: 5px 15px;
            background-color: #BB4430;
            color: #EFE6DD;
            text-decoration: none;
            border-radius: 5px;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-buttons a:hover {
            background-color: #ffffff;
        }
    </style>
       <div class="panel" style= "padding-top: 130px; padding-left: 330px;">
        <div style="width: 100%; height: 100%; position: relative">
            <div style="width: 411px; height: 83px; left: 177px; top: 0px; position: absolute; text-align: center; color: #BB4430; font-size: 15px; font-family: League Spartan; font-weight: 900; letter-spacing: 2.40px; word-wrap: break-word">El Metropolitan de Nueva York dedicó una exposición a Henri Matisse y André Derain en la que explora la influencia del fauvismo en el arte moderno europeo. Se trata de la primera muestra sobre esta temática en Estados Unidos.</div>
            <img style="width: 200px; height: 200px; left: 0px; top: 130px; position: absolute" img src="./imagenes/image7.png" />
            <a href="1.html"><div style="width: 165px; height: 42px; left: 18px; top: 365px; position: absolute; text-align: center; color: #040D2E; font-size: 15px; font-family: League Spartan; font-weight: 400; word-wrap: break-word">Henri Matisse</div></a>
            <img style="width: 200px; height: 200px; left: 557px; top: 130px; position: absolute" img src="./imagenes/image31.png" />
            <a href="3.html"><div style="width: 102px; height: 42px; left: 606px; top: 361px; position: absolute; text-align: center; color: #040D2E; font-size: 15px; font-family: League Spartan; font-weight: 400; line-height: 22.50px; letter-spacing: 0.90px; word-wrap: break-word">André Derain</div></a>
        </div>
    </div>
<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
echo "Hola Usuario! ";
echo $_SESSION['nombre']." ";
echo $_SESSION['apellido'];
echo "<p><El Metropolitan de Nueva York dedicó una exposición a Henri Matisse y André Derain en la que explora la influencia del fauvismo en el arte moderno europeo. Se trata de la primera muestra sobre esta temática en Estados Unidos.></p>";
echo "<a href='salir.php'>Cerrar sesion</a>";

	
}else{
	echo "Solo usuarios registrados...";
//	include("form_registro.html");
	include("form_login.html");
}
include "conexion.php";
?>
</body>
</html>