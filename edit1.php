<?php
     require 'config.php';
     include_once "Alerta.php";
     
     $autor = $_POST['Nombre'];
     $mensaje = $_POST['Mensaje'];
     $id = $_GET['id'];
     $dato = $_GET['datnom'];
    
     try{
     
        $conn= conexion();

        $insertarSQL = "UPDATE id17483408_ucm.Comentarios SET Autor= '".$autor."', Mensaje= '".$mensaje."' WHERE idComentarios= $id;";
     
        $conn ->query($insertarSQL);


        MensajeAlerta("correcto", "Editado Exitoso", $dato);
    
    }catch (Exception $e) {
    
        MensajeAlerta("error", "Editado no valido", $dato);
}

    ?>