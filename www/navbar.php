<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
<style>
      .navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
}
    </style>
</head>
<body>
 
<nav class="navbar navbar-light" style="background-color: #e3f2fd;" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-left">
                <li><a href="index.php"  >Menú</a></li>
                <li><a href="contacto.php"  >Contacto</a></li>
           
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a  class="btn btn-primary" data-toggle="modal" data-target="#iniciasesion"  data-whatever="@mdo">INICIAR SESION</a></li>
        </ul>
    </div>
</nav> 


<div class="modal fade" id="iniciasesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <form class="form-horizontal" method="POST" action="identificacion.php">

        <h5 class="modal-title" id="exampleModalLabel">INICIA SESIÓN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input type="text" name="user" class="form-control" id="user"  required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Contraseña:</label>
            <input type="password"name="password" class="form-control" id="password"  required>
          </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </div>
</div>

</form>

  </body>
</html>
