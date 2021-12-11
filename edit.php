<?php
     require 'config.php';
     include_once "Alerta.php";
     
     $autor = $_POST['Nombre'];
     $asunto = $_POST['Asunto'];
     $mensaje = $_POST['Mensaje'];
     $url = $_POST['Url'];
     $id = $_GET['id'];
    
     try{
     
        $conn= conexion();

        $insertarSQL = "UPDATE id17483408_ucm.Post SET Asunto= '".$asunto."', Autor= '".$autor."', Mensaje= '".$mensaje."', Url='".$url."' WHERE idPost= $id;";
     
        $conn ->query($insertarSQL);


        MensajeAlerta("correcto", "Editado Exitoso", "ucmCat.php");
    
    }catch (Exception $e) {
    
        MensajeAlerta("error", "Editado no valido", "ucmCat.php");
}

    ?>