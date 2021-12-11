<?php
    require 'config.php';
    $conn = conexion();
    $id = $_GET['id'];
    $dato = $_GET['datnom'];
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/marvel-logo.svg.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Categoría UCM</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu1 cid-sQRfdThW24" once="menu" id="menu1-b">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/marvel-logo.svg.png" alt="Mobirise" style="height: 4.1rem;">
                    </a>
                </span>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="categorias.html">Categorías</a></li></ul>
                
                
            </div>
        </div>
    </nav>
</section>

<?php

        $query = "SELECT * FROM id17483408_ucm.Comentarios where idComentarios= $id;";
        $result = mysqli_query($conn,$query);
        $mostrar=mysqli_fetch_array($result);

?>

<section data-bs-version="5.1" class="features9 cid-sQRoQzOhJd" id="features10-f">
    <!---->
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>Edita este Post</strong></h3>
            
        </div>
        <div class="row mt-4">
        <form action="edit1.php?id=<?php echo $id?>&datnom=<?php echo $dato?>" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="Nombre" placeholder="Nombre" data-form-field="name" class="form-control" value="<?php echo $mostrar['Autor'] ?>" id="Nombre">
                        </div>
                        
                        
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="Mensaje" placeholder="Mensaje" data-form-field="textarea" class="form-control" id="Mensaje"><?php echo $mostrar['Mensaje'] ?></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-black display-4">Editar</button></div>
                    </div>
                </form>
                <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><a href="<?php echo $dato ?>" class="btn btn-black display-4">Volver</a></div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer7 cid-sQRfrmsihv" once="footers" id="footer7-c">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2021 MCUniversoZ - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>
  
</body>
</html>