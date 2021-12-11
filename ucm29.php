<?php
    require 'config.php';
    $conn = conexion();
    $dato = basename(__FILE__);
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
          
          
          <title>Post</title>
          <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
          <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
          <link rel="stylesheet" href="assets/dropdown/css/style.css">
          <link rel="stylesheet" href="assets/socicon/css/styles.css">
          <link rel="stylesheet" href="assets/theme/css/style.css">
          <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
          <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
          <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
          <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>
          
          
          
        </head>
        <body>
          
          <section data-bs-version="5.1" class="menu menu1 cid-sQRu6HKFpl" once="menu" id="menu1-p">
            
        
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
        
        <section data-bs-version="5.1" class="features9 cid-sQRu6IaTwp" id="features10-q">
            <!---->
            
            
            <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>Post</strong></h3>
            
        </div>
        <div class="row mt-4">
        <?php
                    $query = 'SELECT * FROM id17483408_ucm.Post where DatoNom = "'.$dato.'";';
                    $result = mysqli_query($conn,$query);
                while($mostrar=mysqli_fetch_array($result)){
                    ?>
            <div class="card col-12">
                <div class="card-wrapper">
                    <div class="top-line row">
                        <div class="col">
                            <h4 class="card-title mbr-fonts-style display-5"><strong><?php echo $mostrar['Asunto']?></strong></h4>
                        </div>
                            <p class="card-title mbr-fonts-style display-5">Autor: <?php echo $mostrar['Autor']?></p>
                    </div>
                    <div class="bottom-line">
                        <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $mostrar['Mensaje']?>
                        </p>
                    <?php
                    
                        $consu = "SELECT AVG(Nota) FROM id17483408_ucm.Comentarios WHERE idPost= ".$mostrar['idPost'].";";
                        $jk = mysqli_query($conn,$consu);
                        $not = mysqli_fetch_array($jk);
                        $not = $not[0];
                        $n = bcdiv($not, '1', 1);

                    ?>
                        <p class="card-title mbr-fonts-style display-5">Valoración: <?php echo $n ?></p>
                        <a href="https://www.contadorvisitasgratis.com" title="contador de visitas web">
                        <img src="https://counter7.stat.ovh/private/contadorvisitasgratis.php?c=2zsshqemsl2ewnjedku71k8gt27f7s88" style="width: 15%;" border="0" title="contador de visitas web" alt="contador de visitas web"></a>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <a href="<?php echo $mostrar['Url'] ?>" class="btn btn-black display-4">Ver Más</button></a>
                        </div>
                    </div>
                </div>
            </div><?php
                }
                ?> 
            
        </div>
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>Comentarios</strong></h3>
            
        </div>
        <?php

                $consu = 'SELECT idPost from id17483408_ucm.Post where DatoNom = "'.$dato.'";';
                $res = mysqli_query($conn, $consu);
                $id = mysqli_fetch_array($res);
                $id = $id[0];
                
        ?>

        <div class="row mt-4">
        <?php
                    
                    $query = 'SELECT * FROM id17483408_ucm.Comentarios where idPost = '.$id.';';
                    $result = mysqli_query($conn,$query);
                while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <div class="card col-12">
                <div class="card-wrapper">
                    <div class="top-line row">
                            <p class="card-title mbr-fonts-style display-5">Autor: <?php echo $mostrar['Autor']?></p>
                    </div>
                    <div class="bottom-line">
                        <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $mostrar['Mensaje']?>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <a href="comEdit.php?id=<?php echo $mostrar['idComentarios']?>&datnom=<?php echo $dato?>" class="btn btn-black display-4">Editar</button></a>
                        </div>
                        <div class="col-2">
                            <a href="comDel.php?id=<?php echo $mostrar['idComentarios']?>&datnom=<?php echo $dato?>" class="btn btn-black display-4">Eliminar</button></a>
                        </div>
                    </div>
                </div>
                </div><?php
                }
                ?> 
            
        </div>
        

    </div>
        </section>
        
        <section data-bs-version="5.1" class="form5 cid-sQRu6IEB1x" id="form5-r">
            
            
            <div class="container">
                <div class="mbr-section-head">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Añadir Comentario</strong></h3>
                    
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                        <form action="comIng.php?dato=<?php echo $dato ?>" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                            <div class="dragArea row">
                                <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                                    <input type="text" name="Nombre" placeholder="Nombre" data-form-field="nombre" class="form-control" value="" id="Nombre">
                                    <div class="col-md-3">
                                        <label for="validationCustom04" class="form-label">Valora esta Publicacion </label>
                                        <select class="form-select" id="Nota" name="Nota">
                                        <option selected disabled value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-12 form-group mb-3" data-for="textarea">
                                    <textarea name="Mensaje" placeholder="Mensaje" data-form-field="textarea" class="form-control" id="Mensaje"></textarea>
                                    <input type="hidden" name="idpost" id="idpost" value="<?php echo $id; ?>">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-black display-4">Publicar</button></div>
                            </div>
                        </form>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><a href="categorias.html" class="btn btn-black display-4">Volver</a></div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <section data-bs-version="5.1" class="footer7 cid-sQRu6IUUcz" once="footers" id="footer7-s">
        
            
        
            
        
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