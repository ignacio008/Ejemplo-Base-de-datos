

<?php
include ("conexion.php");
$nombre = $_POST['nombre'];
$pw = $_POST['pw'];
// paraque todos los input no esten vacios
if (isset($_POST['nombre']) && !empty ($_POST['nombre']) 
&& (isset($_POST['pw']) && !empty ($_POST['pw']))
)
{
  // Conexion a la base de datos
  $query="INSERT INTO `codigocurso` (`id`, `nombre`, `pw`)
  VALUES (NULL, '$nombre', '$pw');";
  $resultado= $conexion->query($query);
  echo "datos insertados";
}else{
  echo "Problemas de conexion";
}
?>