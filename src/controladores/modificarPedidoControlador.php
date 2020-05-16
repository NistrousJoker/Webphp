<?php
session_start();
if($_SESSION['token']!=sha1("crash")){
    header("Location:login.php");
}
include_once '../DAO/Operaciones.php';
$codigo = $_GET['codigoPedido'];
$estado = $_GET['estado'];
try {
  $resultado = Operaciones::modificarPedido($codigo, $estado);
if($resultado['success'])  {
  header("Location: ../../modificarPedidos.php");
  }else {
    header("Location:../../index.php?error=" . $resultado['error']);
  }
} catch (Exception $exc) {
echo "error";
}
 ?>
