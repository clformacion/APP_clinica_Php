
<?php include 'log/header.php'?>




<?php

$conexion = mysqli_connect("localhost","root","","clinica")or die("problema con la conexion");

mysqli_query($conexion, "INSERT INTO pacientes(codigo,nombre,habitacion) VALUES('$_REQUEST[codigo]', '$_REQUEST[nombre]', $_REQUEST[habitacion])") or die("problemas con la seleccion " . mysqli_error($conexion));

mysqli_close($conexion);




echo "<h1 style='color:blue; border:20px solid blue;width:400px; margin-top: 100px; margin-left: 350px; text-align: center; background-color:white'>";





echo"El Paciente fue registrado <br> correctamente";

echo "</h1>";





?>