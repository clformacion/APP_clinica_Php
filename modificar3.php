
<?php include 'log/header.php'?>

  
   <?php

   $conexion = mysqli_connect("localhost","root","","clinica")or die("problema con la conexion");

   mysqli_query($conexion,"UPDATE pacientes 
                         set nombre='$_REQUEST[nombre]' 
                         WHERE codigo='$_REQUEST[codigo]'")or die("problema en el select". mysqli_error($conexion));
                      
    ?>

<?php  
mysqli_query($conexion,"UPDATE pacientes 
                         set habitacion='$_REQUEST[habitacion]' 
                         WHERE codigo='$_REQUEST[codigo]'")or die("problema en el select". mysqli_error($conexion));
        
        
echo "<h1 style='color:blue; border:20px solid blue;width:400px; margin-top: 100px; margin-left: 350px; text-align: center; background-color:white'>";


echo"El Paciente fue Moficado <br> correctamente";





    ?> 

