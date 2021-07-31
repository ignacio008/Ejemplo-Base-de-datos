<?php
include ("conexion.php");

$nombre =$_POST["nombre"];

$query = "SELECT * FROM `codigocurso` WHERE nombre='$nombre'";
$resultado = $conexion->query($query);
while($row = $resultado->fetch_assoc()){




  echo $row['nombre']."<br>";
  echo $row['pw']."<br>";



?>

<input type='text' name='mostraresultados' placeholder="El resultado es: <?php echo $row['nombre'] ?>">

<?php
} 

/* PARA PONER LA INFO EN EL TEXTO el while } y <?php ?>*/
?>