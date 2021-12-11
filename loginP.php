<?php
require 'config.php';
include_once "Alerta.php";

$username = $_POST['Username'];
$password = $_POST['Password'];

$conn= conexion();
 

$consulta = mysqli_query ($conn, "SELECT * FROM id17483408_ucm.usuarios WHERE Username = '".$username."' AND Password = '".$password."'");  

if(!$consulta){
    MensajeAlerta("error", "Login no valido", "login.html");
} else{
    MensajeAlerta("correcto", "Login Correcto", "categorias.html");
}
?>