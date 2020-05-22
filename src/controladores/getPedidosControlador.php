<?php
include_once '../DAO/Operaciones.php';

try {
  session_start();
  $resultado = Operaciones::getPedidos('');
if($resultado['success'])  {
  $_SESSION['pedidos'] = $resultado['pedidos'];
  header("Location: ../../modificarPedidos.php");
  }else {
    header("Location:../../error.php?error=" . $resultado['error']);
}
} catch (Exception $exc) {
echo "error";
}
 ?>
