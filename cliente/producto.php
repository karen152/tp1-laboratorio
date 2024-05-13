<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel=stylesheet href="styles.css">
    <title>Document</title>
</head>
<body>
<div class="box">
    <form method="POST">
		<div class="flex center">
			<label for="num1" class="element">Numero 1</label>
			<input type="number" class="element" name="num1">
		</div>
		<div class="flex center">
			<label for="num2" class="element">Numero 2</label>
			<input type="number" class="element" name="num2">

		</div>
        
		<div class="flex center">
			<button type="submit">Calcular</button>
		</div>
		

    </form>
	<div class="links">
		<a href="suma.php" >Suma</a>
    	<a href="resta.php">Resta</a>
		<a href="producto.php">Producto</a>
		<a href="cociente.php">Division</a>
		<a href="potencia.php">Potencia</a>
		<a href="base.php">Base</a>
		<a href="integrantes.php">Integrantes</a>
	</div>
</div>
    <?php
//verificar si se enviaron los datos
if(isset($_POST["num1"])){
	$num1=trim($_POST["num1"]);
	$num2=trim($_POST["num2"]);
	if($num1 == null || $num2 == null){
		echo "<h2>Ingrese valores correctos</h2>";
	}
	else{
		$fields = array('a' => $num1, 'b' => $num2);
	//$fields_string = http_build_query($fields);
	$fields_json = json_encode($fields);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://localhost/tp1/calculadora.php");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
	//curl_setopt ($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_json);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$data = curl_exec($ch);
	curl_close($ch);
	$datos=json_decode($data);
	//print_r($datos);
	echo "<h2>el producto de ".$num1." y ".$num2."  es:".$datos->producto."</h2>";
	}
	
}
?>
</body>
</html>