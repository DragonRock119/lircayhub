<?php
     require 'config.php';
     include_once "Alerta.php";
     
     $autor = $_POST['Nombre'];
     $asunto = $_POST['Asunto'];
     $mensaje = $_POST['Mensaje'];
     $url = $_POST['Url'];

     try{
     
        $conn= conexion();
        
        $insertarSQL = "INSERT INTO id17483408_ucm.Post (Asunto, Autor, Mensaje, Categoria, Url) VALUES ('".$asunto."','".$autor."','".$mensaje."','1','".$url."');";
        
        $conn ->query($insertarSQL);

        
        

        $contenido = file_get_contents("plant.txt");
        
        $rs = mysqli_query($conn, "SELECT MAX(idPost) AS id FROM id17483408_ucm.Post");
                
        if ($row = mysqli_fetch_row($rs)) {
                $id = trim($row[0]);
        }
        
        $filename = 'ucm'.$id.'.php';

        file_put_contents($filename, $contenido);


        $update = "UPDATE id17483408_ucm.post set DatoNom = '".$filename."' where idPost =".$id.";";
        
        $conn ->query($update);

        MensajeAlerta("correcto", "Ingreso Exitoso", "ucmCat.php");

    
    }catch (Exception $e) {
    
        MensajeAlerta("error", "Ingreso no valido", "ucmCat.php");
}

    ?>