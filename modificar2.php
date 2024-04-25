
<?php include 'log/header.php'?>




    <?php
    $conexion = mysqli_connect("localhost","root","","clinica")or die("problema de conexion");





    $registros = mysqli_query($conexion, "SELECT * FROM pacientes 
                        WHERE codigo=$_REQUEST[codigo]") or die("problema con la select:" . mysqli_error($conexion));

    if($reg = mysqli_fetch_array($registros)){ 
    ?>

<form action="modificar3.php" method="post">
ingrese el nuevo nombre del pacientes:
<input type="text" name="nombre"value="<?php echo $reg['nombre']?>">
<br>
<input type="hidden" name="codigo"value="<?php echo $reg['codigo']?>">
<br>

ingrese nuevo numero de habitacion:
<input type="text" name="habitacion" value="<?php echo $reg['habitacion']?>">
<br>
<input type="hidden" name="codigo"value="<?php echo $reg['codigo']?>">
<br>
<input type="submit" value="modificar"> 
</form>

<?php   

}else{ 
  echo "mo se puede modificar este registro";
}
?>












