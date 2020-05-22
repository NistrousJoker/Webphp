<?php
session_start();
if($_SESSION['token']!=sha1("crash")){
    header("Location:login.php");
}
include_once '../DAO/Operaciones.php';
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$existencias = $_GET['existencias'];
$imagen = $_GET['imagen'];
$categoria = $_GET['categoria'];

try {
  $resultado = Operaciones::nuevoProducto($descripcion, $precio, $existencias, $imagen, $categoria);
if($resultado['success'])  {
  header("Location: ../../modificarProductos.php");
  }else {
    header("Location:../../error.php?error=" . $resultado['error']);
  }
} catch (Exception $exc) {
echo "error";
}
 ?>
