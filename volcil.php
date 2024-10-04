<?php //Ejemplo aprenderaprogramar.com

$diametro = $_POST['diam'];
$altura = $_POST['altu'];
$radio = $diametro/2;
$pi = 3.141593;
$volumen = $pi*$radio*$radio*$altura;

echo "<br/> &nbsp; El volumen del cilindro es de". $volumen. "metros cubicos";
?>