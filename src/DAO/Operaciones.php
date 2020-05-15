
<?php
include_once 'ConexionBD.php';


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
   }
   else {
       return array(
           'success' => false,
           'error' => 'ha surgido un error'
       );
   }
   

     
     
 }
 
    
}
?>

