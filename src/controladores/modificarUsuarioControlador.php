<?php
session_start();
if($_SESSION['token']!=sha1("crash")){
    header("Location:login.php");
}
include_once '../DAO/Operaciones.php';
$codigo = $_GET['usuario'];
$activo = $_GET['activo'];
try {
  $resultado = Operaciones::modificarUsuario($codigo, $activo);
if($resultado['success'])  {
  header("Location: ../../modificarUsuarios.php");
  }else {
    header("Location:../../error.php?error=" . $resultado['error']);
  }
} catch (Exception $exc) {
echo "error";
}
 ?>
