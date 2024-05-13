<?php
switch ($_SERVER["REQUEST_METHOD"]) {
    case "POST": //sumar
        $data = json_decode(file_get_contents('php://input'), true);
        $a = trim($data["a"]);
        $b = trim($data["b"]);
        $r = $a + $b;
        $vec = array("ok" => true, "suma" =>$r);
        echo json_encode($vec);
    break;
    case "PUT": //restar
        $data = json_decode(file_get_contents('php://input'), true);
        $a = trim($data["a"]);
        $b = trim($data["b"]);
        $r = $a - $b;
        $vec = array("ok" =>true, "resta" => $r);
        echo json_encode($vec);
    break;
    case "PATCH": //producto
        $data = json_decode(file_get_contents('php://input'), true);
        $a = trim($data["a"]);
        $b = trim($data["b"]);
        $r = $a * $b;
        $vec = array("ok" =>true, "producto" => $r);
        echo json_encode($vec);
    break;
    case "DELETE": //cociente
        $data = json_decode(file_get_contents('php://input'), true);
        $a = trim($data["a"]);
        $b = trim($data["b"]);
        if (!$b || $b == 0) {
            $vec = array("ok" => false, "message" => "No se puede dividir por cero", "data" => $data);
            echo json_encode($vec);
        }
        else{
            $r = $a / $b;
            $resto = $a % $b;
            $vec = array("ok" => true, "Cociente" =>$r, "Resto" => $resto);
            echo json_encode($vec);
        }
    break;
    case "COPY": //potencia
        $data = json_decode(file_get_contents('php://input'), true);
        $a = trim($data["a"]);
        $b = trim($data["b"]);
        $r = $a ** $b;
        $vec = array("ok" => true, "Potencia" =>$r, "data" => array("Base" => $a, "Exponente" => $b));
        echo json_encode($vec);
    break;
    case "OPTIONS": //cambio de base
        $data = json_decode(file_get_contents('php://input'), true);
        $a = trim($data["a"]);
        $binario = decbin($a);
        $octal = decoct($a);
        $hexa = hexdec($a);
        $vec = array("ok" => true, "data" => $data, "Respuesta" => array("binario" =>$binario, "octal"=>$octal, "hexadecimal" =>$hexa));
        echo json_encode($vec);
    break;
    case "GET": //integrantes
        $data = json_decode(file_get_contents('php://input'), true);
        $vec = array("ok"=>true, "data" => $data, "Respuesta" => array("alumno1" => "Aguirre sofia", "alumno2" => "Albarracin Fabricio", "alumno3" => "Andujar Tomas", "alumno4" => "Barraza Karen", "alumno5" => "Canseco Gabriel", "alumno6" => "Ezelino Maria"));
        echo json_encode($vec);
    break;
}
?>