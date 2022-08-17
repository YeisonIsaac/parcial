<?php
// Incluimos los datos de conexión y las funciones:
include("conexion.php");
include("index.php");
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["nombre"], $_POST["apellido"], $_POST["genero"]) and $_POST["nombre"] !="" and $_POST["apellido"]!="" and $_POST["genero"]!="" ){

//traspasamos a variables locales, para evitar complicaciones con las comillas:
$nombre = $_POST["nombre"];
$email = $_POST["apellido"];
$mensaje = $_POST["genero"];

//Preparamos la orden SQL
$consulta = "INSERT INTO persona
(nombre,apellido,genero) VALUES ('$nombre','$apellido','$genero')";

//Aqui ejecutaremos esa orden

} else {

echo '<p>Por favor, complete el <a href="index.php">formulario</a></p>';
}
?>