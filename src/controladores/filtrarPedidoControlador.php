<?php
session_start();
if($_SESSION['token']!=sha1("crash")){
    header("Location:login.php");
}
include_once '../DAO/Operaciones.php';

$where = '';
if($_POST['usuario'] !== ''){
  $usuario = $_POST['usuario'];
  if($where == ''){
    $where .= 'WHERE ';
  }else{
    $where .= ' AND ';
  }
  $where .= "persona='" .$usuario."'";
}
if($_POST['fecha'] !== ''){
  $fecha = $_POST['fecha'];
  if($where == ''){
    $where .= 'WHERE ';
  }else{
    $where .= ' AND ';
  }
  $rango = $_POST['rango'];
  switch ($rango) {
    case 'menor':
        $where .= "fecha<='". $fecha."'";
      break;
    case 'igual':
      $where .= "fecha='". $fecha."'";
      break;
    case 'mayor':
      $where .= "fecha>='". $fecha."'";
      break;
  }
}
if($_POST['producto'] !== ''){
  $producto = $_POST['producto'];
  if($where == ''){
    $where .= 'WHERE ';
  }else{
    $where .= ' AND ';
  }
  $where .= "codigo_producto='". $producto."'";
}
try {
  $resultado = Operaciones::getPedidos($where);
if($resultado['success'])  {
  $_SESSION['pedidos'] = $resultado['pedidos'];
  header("Location: ../../modificarPedidos.php");
  }else {
    header("Location:../../index.php?error=" . $resultado['error']);
  }
} catch (Exception $exc) {
echo "error";
}
 ?>
