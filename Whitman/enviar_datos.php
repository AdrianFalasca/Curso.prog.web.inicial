<?php
	
$nombre_formu=$_POST['nombre'];
$apellido_formu=$_POST['apellido'];
$correo_formu=$_POST['correo'];
$mensaje_formu=$_POST['mensaje'];


$cuerpo_mail="Nombre: ". $nombre_formu."\r\n". "Apellido: ". $apellido_formu."\r\n". "Correo electronico: ".$correo_formu. "\r\n"."Mensaje: ".$mensaje_formu;



$respuesta="From: $nombre_formu $apellido_formu <$correo_formu>";


mail("adrifalasca@hotmail.com","Consulta de la pagina de Walt", $cuerpo_mail,  $respuesta);


$datos_conexion=mysqli_connect("localhost","id11520782_whitman","#1819","id11520782_walt" ) or die ("Error al conectar con la base de datos");


mysqli_query ($datos_conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_formu', '$apellido_formu', '$correo_formu', '$mensaje_formu')");
	



header("Location: index.php?e=ok#contacto");




?>
