<?php

namespace App;
include 'database.php';

class Contact
{
	
	function __construct()
	{
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$DNI = $_POST['dni'];
		$telefono = $_POST['telefono'];
	
	}
}

if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['dni']) && !empty($_POST['telefono'])) {
    $sql = "INSERT INTO users (nombre, apellido, dni, telefono ) VALUES (:nombre, :apellido, :dni, telefono)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
	$stmt->bindParam(':dni',$_POST['dni']);
	$stmt->bindParam(':telefono', $_POST['telefono']);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacto</title>
</head>
<header>Contacto</header>
<body>
Nombre:
<input type="text" name="Nombre" placeholder="Ingrese su nombre">
<br>
Apellido:
<input type ="text" name= "apellido" placeholder="Ingese su apellido">
<br>
DNI:
<input type ="number" name= "DNI" placeholder="Ingrese su DNI">
<br>
telefono:
<input type ="number" name= "telefono" placeholder="Ingrese su telefono">
<br>
<input type="submit" value="Submit">
</body>
</html>
