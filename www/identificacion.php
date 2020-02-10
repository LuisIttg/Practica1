<?php

if (isset($_POST['user'])  && isset($_POST['password']) ){
	
	$users = $_POST['user'];
	$pass = $_POST['password'];

if($users == "comprador" && $pass == "comprador")	
{
	header('Location: comprador.php');
}else{?>
	<script>
    alert("ERROR, USUARIO Y CONTRASEÑA NO REGISTRADO")
    window.location = "index.php";
</script>
<?php
}

if($users == "administrador" && $pass == "administrador")	
{
	header('Location: administrador.html');
}else{?>
	<script>
    alert("ERROR, USUARIO Y CONTRASEÑA NO REGISTRADO")
    window.location = "index.php";
</script>	
<?php
}
	}
	?>