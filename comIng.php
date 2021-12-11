<?php
     require 'config.php';
     include_once "Alerta.php";
     
     $autor = $_POST['Nombre'];
     $mensaje = $_POST['Mensaje'];
     $idpost = $_POST['idpost'];
     $nota = $_POST['Nota'];
     $dato = $_GET['dato'];
    
     try{
     
        $conn= conexion();

        $insertarSQL = "INSERT INTO id17483408_ucm.Comentarios (Autor, Mensaje, idPost, Nota) VALUES ('".$autor."','".$mensaje."', $idpost, $nota);";
        
        $conn ->query($insertarSQL);


        MensajeAlerta("correcto", "Ingreso Exitoso", $dato);

    
    }catch (Exception $e) {
    
        MensajeAlerta("error", "Ingreso no valido", $dato);
}

    ?>