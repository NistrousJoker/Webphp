<?php
include_once '../DAO/Operaciones.php';

try {
  session_start();
  $resultado = Operaciones::getUsuarios();
if($resultado['success'])  {
  $_SESSION['usuarios'] = $resultado['usuarios'];
  header("Location: ../../modificarUsuarios.php");
  }else {
    header("Location:../../error.php?error=" . $resultado['error']);
}
} catch (Exception $exc) {
echo "error";
}
 ?>
