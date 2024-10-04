<?php
//recuperar los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

//validar los datos
if (empty($nombre) || empty($correo)) {
	echo "Por favor, rellene todos los campos";
	// code...
}else{
	echo"¡Gracias por enviar su informacion! Su nombre es $nombre y su correo electrónico es $correo";
}
?>