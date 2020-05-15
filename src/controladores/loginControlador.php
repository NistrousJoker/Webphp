
<?php
include_once '../DAO/Operaciones.php';
$usuario = $_POST['administrador'];        
$clave = $_POST['contrasena'];       
        
try {
    $resultado = Operaciones::login($usuario, $clave);
    if($resultado['success'])  {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['token'] = sha1("crash");
        header("Location:../../index.php");
    }else {
        header("Location:../../login.php?error=" . $resultado['error']);
    }
    
} catch (Exception $exc) {
    echo "error";
}

    
        
?>
 
