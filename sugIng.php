<?php
     require 'config.php';
     include_once "Alerta.php";
     
     $autor = $_POST['Nombre'];
     $asunto = $_POST['Asunto'];
     $mensaje = $_POST['Mensaje'];
    
     try{
     
        $conn= conexion();
        
        $insertarSQL = "INSERT INTO id17483408_ucm.Post (Asunto, Autor, Mensaje, Categoria) VALUES ('".$asunto."','".$autor."','".$mensaje."','3');";
        
        $conn ->query($insertarSQL);

        
        

        $contenido = file_get_contents("plant.txt");
        
        $rs = mysqli_query($conn, "SELECT MAX(idPost) AS id FROM id17483408_ucm.Post");
                
        if ($row = mysqli_fetch_row($rs)) {
                $id = trim($row[0]);
        }
        
        $filename = 'sug'.$id.'.php';

        file_put_contents($filename, $contenido);


        $update = "UPDATE id17483408_ucm.post set DatoNom = '".$filename."' where idPost =".$id.";";
        
        $conn ->query($update);

        MensajeAlerta("correcto", "Ingreso Exitoso", "sugerencias.php");

    
    }catch (Exception $e) {
    
        MensajeAlerta("error", "Ingreso no valido", "sugerencias.php");
}

    ?>