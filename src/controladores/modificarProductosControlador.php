<?php
session_start();
if($_SESSION['token']!=sha1("crash")){
    header("Location:login.php");
}
include_once '../DAO/Operaciones.php';
$codigo = $_GET['codigo'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$existencias = $_GET['existencias'];
$imagen = $_GET['imagen'];
$categoria = $_GET['categoria'];
try {
  $resultado = Operaciones::modificarProductosControlador($codigo, $descripcion, $precio, $existencias, $imagen, $categoria);
if($resultado['success'])  {
  $_SESSION['productoModificado'] = $codigo;
  header("Location: ../../modificarProductos.php");
  }else {
    header("Location:../../error.php?error=" . $resultado['error']);
  }
} catch (Exception $exc) {
echo "error";
}
 ?>
