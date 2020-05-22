<?php
include_once '../DAO/Operaciones.php';

try {
  session_start();
  $resultado = Operaciones::getProductos();
if($resultado['success'])  {
  $_SESSION['productos'] = $resultado['productos'];
  header("Location: ../../ModificarProductos.php");
  }else {
    header("Location:../../error.php?error=" . $resultado['error']);
}
} catch (Exception $exc) {
echo "error";
}
 ?>
