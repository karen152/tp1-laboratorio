<?php 

//include("con_db.php");
//if($conex)
{
	echo "conectado a mysql de sof";
}

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['contraseña']) >= 1 &&  strlen($_POST['email']) >= 1) {

		$name = trim($_POST['name']);
		$contraseña=trim($_POST['contraseña']);
	    $email = trim($_POST['email']);
	   // $fechareg = date("d/m/y");
	   // $consultaa = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
		$consulta="INSERT INTO `datos`( `nombre`, `contraseña`, `email`) VALUES ('$name','$contraseña','$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te registraste a hipatya!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡hubo un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>