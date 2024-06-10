<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet"type="text/css"href="estilos.css">
<link rel="shortcut icon" href="./logomin.png" type="image/x-icon">
<title>Contacto</title>
</head>
<body>
  <div style="width: 100%; height: 100%; justify-content: center; align-items: center; gap: 253px; display: inline-flex">
    <div class="nav"><a href="index.html"><div style="width: 332px; height: 70px; color: #BB4430; font-size: 64px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">FAUVISMO</div></a></div>
    <div style="width: 682px; height: 19px; justify-content: center; align-items: flex-start; gap: 21px; display: inline-flex">
        <div class="nav"><a href="2.html"><div style="width: 193px; height: 19px; text-align: center; color: #BB4430; font-size: 15px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Maurice de Vlaminck</div></a></div>
        <div class="nav"><a href="3.html"><div style="width: 123px; height: 19px; text-align: center; color: #BB4430; font-size: 15px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Andre Derain</div></a></div>
        <div class="nav"><a href="henri.html"><div style="width: 128px; height: 19px; text-align: center; color: #BB4430; font-size: 15px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Henri Matisse</div></a></div>
        <div class="nav"><a href="galeria.html"><div style="width: 69px; height: 17px; text-align: center; color: #BB4430; font-size: 15px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Galeria</div></a></div>
        <div class="nav"><a href="contacto.html"><div style="width: 85px; height: 18px; text-align: center; color: #BB4430; font-size: 15px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Contacto</div></a></div>
    </div>
</div>
<div class="desktop-3">
    <div class="desktop-3-child">
    </div>
    <div class="contacto">BÚSQUEDA</div>


    
        <div class="container">
        <?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' ");
?>
<article style="">
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'];
			echo $resultados['bio'];
	
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>

        </div>
<footer class="con">
    <div style="width: 100%; height: 100%; position: relative">
        <div style="width: 332px; height: 70px; left: 175px; top: 0px; position: absolute; text-align: center; color: #BB4430; font-size: 15px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">FAUVISMO</div>
        <div style="width: 682px; height: 19px; left: 0px; top: 70px; position: absolute; justify-content: center; align-items: flex-start; gap: 21px; display: inline-flex">
            <div style="width: 193px; height: 19px; text-align: center; color: #BB4430; font-size: 12px; font-family: League Spartan; font-weight: 900; word-wrap: break-word;">Maurice de Vlaminck</div>
            <div style="width: 123px; height: 19px; text-align: center; color: #BB4430; font-size: 12px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Andre Derain</div>
            <div style="width: 128px; height: 19px; text-align: center; color: #BB4430; font-size: 12px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Henri Matisse</div>
            <div style="width: 69px; height: 17px; text-align: center; color: #BB4430; font-size: 12px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Galeria</div>
            <div style="width: 85px; height: 18px; text-align: center; color: #BB4430; font-size: 12px; font-family: League Spartan; font-weight: 900; word-wrap: break-word">Contacto</div>
        </div>
        <div style="width: 40px; height: 40px; padding: 3.33px; left: 321px; top: 108px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
            <div style="width: 33.33px; height: 33.33px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 40 40" fill="none">
                <path d="M28.9 9.10016C28.5045 9.10016 28.1178 9.21746 27.7889 9.43722C27.46 9.65699 27.2037 9.96934 27.0523 10.3348C26.9009 10.7002 26.8613 11.1024 26.9385 11.4903C27.0156 11.8783 27.2061 12.2347 27.4858 12.5144C27.7655 12.7941 28.1219 12.9846 28.5099 13.0617C28.8978 13.1389 29.3 13.0993 29.6654 12.9479C30.0309 12.7965 30.3432 12.5402 30.563 12.2113C30.7827 11.8824 30.9 11.4957 30.9 11.1002C30.9 10.5697 30.6893 10.061 30.3143 9.68595C29.9392 9.31088 29.4305 9.10016 28.9 9.10016ZM36.5667 13.1335C36.5343 11.7507 36.2753 10.3825 35.8 9.0835C35.3763 7.97205 34.7167 6.96563 33.8667 6.1335C33.0414 5.27921 32.0326 4.62379 30.9167 4.21683C29.6211 3.7271 28.2515 3.46218 26.8667 3.4335C25.1 3.3335 24.5334 3.3335 20 3.3335C15.4667 3.3335 14.9 3.3335 13.1334 3.4335C11.7486 3.46218 10.3789 3.7271 9.08337 4.21683C7.9695 4.62791 6.9616 5.28276 6.13337 6.1335C5.27908 6.95879 4.62367 7.96756 4.21671 9.0835C3.72698 10.3791 3.46206 11.7487 3.43337 13.1335C3.33337 14.9002 3.33337 15.4668 3.33337 20.0002C3.33337 24.5335 3.33337 25.1002 3.43337 26.8668C3.46206 28.2516 3.72698 29.6213 4.21671 30.9168C4.62367 32.0328 5.27908 33.0415 6.13337 33.8668C6.9616 34.7176 7.9695 35.3724 9.08337 35.7835C10.3789 36.2732 11.7486 36.5381 13.1334 36.5668C14.9 36.6668 15.4667 36.6668 20 36.6668C24.5334 36.6668 25.1 36.6668 26.8667 36.5668C28.2515 36.5381 29.6211 36.2732 30.9167 35.7835C32.0326 35.3765 33.0414 34.7211 33.8667 33.8668C34.7204 33.0378 35.3806 32.0305 35.8 30.9168C36.2753 29.6178 36.5343 28.2497 36.5667 26.8668C36.5667 25.1002 36.6667 24.5335 36.6667 20.0002C36.6667 15.4668 36.6667 14.9002 36.5667 13.1335ZM33.5667 26.6668C33.5546 27.7248 33.363 28.773 33 29.7668C32.7339 30.4922 32.3065 31.1475 31.75 31.6835C31.2095 32.2343 30.5554 32.6609 29.8334 32.9335C28.8395 33.2964 27.7913 33.488 26.7334 33.5002C25.0667 33.5835 24.45 33.6002 20.0667 33.6002C15.6834 33.6002 15.0667 33.6002 13.4 33.5002C12.3015 33.5207 11.2077 33.3516 10.1667 33.0002C9.47634 32.7136 8.8523 32.2881 8.33337 31.7502C7.78019 31.2147 7.35811 30.5588 7.10004 29.8335C6.69313 28.8254 6.46745 27.7534 6.43337 26.6668C6.43337 25.0002 6.33337 24.3835 6.33337 20.0002C6.33337 15.6168 6.33337 15.0002 6.43337 13.3335C6.44084 12.2519 6.63829 11.1801 7.01671 10.1668C7.31012 9.46335 7.76048 8.83626 8.33337 8.3335C8.83973 7.76044 9.46552 7.30532 10.1667 7.00016C11.1826 6.63357 12.2534 6.44196 13.3334 6.4335C15 6.4335 15.6167 6.3335 20 6.3335C24.3834 6.3335 25 6.3335 26.6667 6.4335C27.7247 6.44563 28.7729 6.63724 29.7667 7.00016C30.5241 7.28125 31.2039 7.73824 31.75 8.3335C32.2962 8.84546 32.723 9.47138 33 10.1668C33.3705 11.1817 33.5622 12.2531 33.5667 13.3335C33.65 15.0002 33.6667 15.6168 33.6667 20.0002C33.6667 24.3835 33.65 25.0002 33.5667 26.6668ZM20 11.4502C18.3097 11.4535 16.6583 11.9577 15.2545 12.8992C13.8506 13.8407 12.7573 15.1772 12.1128 16.7398C11.4682 18.3023 11.3012 20.0209 11.633 21.6784C11.9648 23.3358 12.7804 24.8577 13.9768 26.0518C15.1732 27.2459 16.6967 28.0585 18.3548 28.3871C20.0129 28.7156 21.7311 28.5453 23.2925 27.8977C24.8538 27.2501 26.1882 26.1542 27.1269 24.7486C28.0657 23.3429 28.5667 21.6905 28.5667 20.0002C28.5689 18.8753 28.3487 17.7612 27.9188 16.7218C27.4888 15.6823 26.8576 14.7382 26.0615 13.9436C25.2653 13.149 24.32 12.5196 23.2797 12.0917C22.2395 11.6638 21.1249 11.4458 20 11.4502ZM20 25.5502C18.9024 25.5502 17.8293 25.2247 16.9166 24.6148C16.0039 24.005 15.2926 23.1382 14.8725 22.1241C14.4524 21.1099 14.3425 19.994 14.5567 18.9174C14.7708 17.8408 15.2994 16.8519 16.0756 16.0757C16.8518 15.2995 17.8407 14.771 18.9173 14.5568C19.9939 14.3427 21.1098 14.4526 22.1239 14.8726C23.1381 15.2927 24.0049 16.0041 24.6147 16.9167C25.2245 17.8294 25.55 18.9025 25.55 20.0002C25.55 20.729 25.4065 21.4507 25.1276 22.1241C24.8487 22.7974 24.4398 23.4092 23.9245 23.9246C23.4091 24.44 22.7973 24.8488 22.1239 25.1277C21.4506 25.4066 20.7289 25.5502 20 25.5502Z" fill="black"/>
              </svg></div>
        </div>
    </div>
</footer>
</html>
