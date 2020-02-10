<html>
<head>
<title>Quienes somos</title>

</head>
 <?php include 'navbar.php'; ?>
</head>
<body background="/images/fondo.jpg">
<center>
<h1>FRAMEWORKS</h1>
<p>LUIS ÁNGEL VÁZQUEZ MORENO</p>
<a href="https://www.facebook.com/Somita.is.love"><img src="/images/fb.png" width="100" height="104"  ></a><br><br><br>
<p>FAVIÁN GUTIÉRREZ CONSTANTINO</p>
<a href="https://www.facebook.com/favian.gutierrezconstantino"><img src="/images/fb.png" width="100" height="104"   ></a><br><br><br>



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.400847969831!2d-93.17476468565485!3d16.756721125098377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd964bb4d07fd%3A0x4e771d3242c2f25a!2sTecnol%C3%B3gico%20Nacional%20de%20M%C3%A9xico%20Campus%20Tuxtla%20Guti%C3%A9rrez!5e0!3m2!1ses-419!2smx!4v1581323344675!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contáctenos</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="NOMBRES" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" placeholder="APELLIDOS" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="EMAIL" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="TELEFONO" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Descripción del mensaje a enviar" rows="7"></textarea>
                            </div>
                        </div>
                        	<script>
                      	  function aleert() {
						  alert("Mensaje enviado al administrador")
						  window.location = "index.php";
						}
						 </script>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                            
                                <button class="btn btn-success btn-lg" onclick="aleert()">Enviar</button>
                             
                            
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>