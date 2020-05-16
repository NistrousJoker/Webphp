
<?php
include_once 'ConexionBD.php';
include_once '../modelo/Usuario.php';
include_once '../modelo/Pedido.php';

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

public function getPedidos($where){
  global $conexion;

  $ordenSQL = "SELECT distinct* FROM pedidos LEFT JOIN detalle ON detalle.codigo_pedido = pedidos.codigo ".$where;

  $consulta = $conexion->query($ordenSQL);
  $pedidos = array();
  if ($consulta) {
    while($fila = $consulta->fetch_array()){
      $pedido = new Pedido($fila['codigo'], $fila['persona'],$fila['fecha'],$fila['importe'],$fila['estado']);
        $ordenSQLProductos = "SELECT * FROM detalle WHERE codigo_pedido='".$fila['codigo']."'";
        $consultaProductos = $conexion->query($ordenSQLProductos);
        if($consultaProductos){
          $productos = array();
          while($filaProd = $consultaProductos->fetch_array()){
            $productos[] =  $filaProd['codigo_producto'];
          }
     $pedido->setProductos($productos);
        }else{
          return array(
            'success' => false,
            'error' => 'Ha surgido un error'
          );
        }
      $pedidos[] =  $pedido;
    }
    return array(
      'success' => true,
      'pedidos' => $pedidos
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
public function modificarPedido($codigo,$estado){
  global $conexion;
  $estado++;
  $ordenSQL = "UPDATE `tienda`.`pedidos` SET `estado`='".$estado."' WHERE `codigo`='".$codigo."'";

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
