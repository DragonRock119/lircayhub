<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <div class="container">

    
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="#modalTitle" ></h4> 
        </div>
        <div class="modal-body">
         <img id="image_modal" style="width:150px" src="">
         <font size="6"> <label id="label1"> </label> </font>
        </div>
        <div class="modal-footer">
        <a class="btn btn-primary" id="boton_redirec" href="">OK</a>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<?php
	
	$imagen="";
	$mensaje="";
	$redireccion="";
	   
	  function MensajeAlerta($opcion, $mensaje, $redireccion)
	  {

	    if ($opcion== 'correcto')
	    {
	      $imagen="assets/images/img-correcto.jpg";
	    }
	    if ($opcion== 'error')
	    {
	      $imagen="assets/images/img-error.png";
	    }
	    echo '<button type="button" id="verModal" style="display: none;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-imagen="'.$imagen.'" data-mensaje="'.$mensaje.'"data-redireccion="'.$redireccion.'">Open Modal</button>';
	  }

?>



<script type="text/javascript">

  $(document).ready(function (){
   LlamarModal();
   $("#verModal").click();
  });



  function LlamarModal()
  {
    $('#myModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var dato_i = button.data('imagen')
      var dato_m = button.data('mensaje')
      var dato_r = button.data('redireccion')

      var modal = $(this)
      $('#image_modal').attr('src', dato_i);
      document.getElementById('label1').innerHTML = dato_m;
      $('#boton_redirec').attr('href', dato_r);
      
     
    });
    
  }
  
</script>

