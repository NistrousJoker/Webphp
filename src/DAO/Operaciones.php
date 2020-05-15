
<?php
include_once 'ConexionBD.php';
include_once '../modelo/Usuario.php';

class Operaciones{
 public function login($usuario,$clave){
     global $conexion;

   $ordenSQL = "SELECT * FROM usuarios WHERE usuario='".$usuario. "' AND clave='".$clave."' AND admin=1;";

   $consulta = $conexion->query($ordenSQL);
   if ($consulta) {
       $fila = $consulta->fetch_array();
       if($fila){
            $usuario = $fila['usuario'];
            return array(
                'success' => true,
                'datos' => $usuario
            );
       }else{
          return array(
           'success' => false,
           'error' => 'Datos incorrectos'
            );
       }
   } else {
       return array(
           'success' => false,
           'error' => 'ha surgido un error'
       );
   }
 }
 public function getUsuarios(){
   global $conexion;

   $ordenSQL = "SELECT * FROM usuarios;";

   $consulta = $conexion->query($ordenSQL);
   $usuarios = array();
   if ($consulta) {
     while($fila = $consulta->fetch_array()){
       $usuario = new Usuario($fila['codigo'], $fila['admin'],$fila['activo'],$fila['usuario'],$fila['nombre'],$fila['apellidos']);
       $usuarios[] =  $usuario;
     }
    return array(
      'success' => true,
      'usuarios' => $usuarios
    );
 }else{
   return array(
     'success' => false,
     'error' => 'Ha surgido un error'
   );
 }
}
public function modificarUsuario($codigo,$activo){
  global $conexion;
  if($activo == 0){
    $activo = 1;
  }else{
    $activo = 0;
  }
  $ordenSQL = "UPDATE `tienda`.`usuarios` SET `activo`='".$activo."' WHERE `codigo`='".$codigo."'";

  $consulta = $conexion->query($ordenSQL);
  if($consulta){
    return array(
      'success' => true
    );
  }else{
    return array(
      'success' => false,
      'error' => 'Ha surgido un error'
    );
  }
}
}
?>
