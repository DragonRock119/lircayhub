<?php
     require 'config.php';
     include_once "Alerta.php";
     
     $id = $_GET['id'];
    
     try{
     
        $conn= conexion();

        $rs = mysqli_query($conn, "SELECT DatoNom from id17483408_ucm.Post where idPost= $id");
        if ($row = mysqli_fetch_row($rs)) {
            $nom = trim($row[0]);}

        unlink(''.$nom.'');
     
        $insertarSQL = "DELETE FROM id17483408_ucm.Post WHERE idPost = $id;";
     
        $conn ->query($insertarSQL);


        MensajeAlerta("correcto", "Borrado Exitoso", "comicsCat.php");
    
    }catch (Exception $e) {
    
        MensajeAlerta("error", "Borrado no valido", "comicsCat.php");
}

    ?>