<?php
     require 'config.php';
     include_once "Alerta.php";
     
     $id = $_GET['id'];
     $dato = $_GET['datnom'];
    
     try{
     
        $conn= conexion();
     
        $insertarSQL = "DELETE FROM id17483408_ucm.Comentarios WHERE idComentarios = $id;";
     
        $conn ->query($insertarSQL);


        MensajeAlerta("correcto", "Borrado Exitoso", $dato);
    
    }catch (Exception $e) {
    
        MensajeAlerta("error", "Borrado no valido", $dato);
}

    ?>