<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<script>



	</script>

	
    <form method="post">
    	<h1>REGISTRO EN HIPATYA</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
		<input type="password" name="contraseña" placeholder="Ingrese contraseña">
    	<input type="email" name="email" placeholder="EJ: fofi2911@gmail.com">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>