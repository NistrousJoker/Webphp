<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar usuarios</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <?php
        include_once 'src/modelo/Usuario.php';
        include_once 'compruebaLogin.php';
        if(!isset($_SESSION['usuarios'])){
          header('Location: src/controladores/getUsuariosControlador.php');
        }else{
          $usuarios = $_SESSION['usuarios'];
          unset($_SESSION["usuarios"]);
        }
        ?>
        <h1 style="text-align: center">Dar de alta o baja un usuario</h1>
        <div style="text-align: left">
        <a href="index.php"><button>Volver</button></a>
        </div>
        <table cellspacing="50" style="margin: 0 auto; text-align: center">
          <thead>
            <tr>
              <td>Admin</td>
              <td>Activo</td>
              <td>Usuario</td>
              <td>Nombre</td>
              <td>Apellidos</td>
              <td>Acciones</td>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($usuarios as $key => $usuario) {
             ?>
            <tr> 
              <td><?php echo $usuario->getAdmin(); ?></td>
              <td><?php echo ($usuario->getActivo() == 1 ?  'Activado' : 'Baja'); ?></td>
              <td><?php echo $usuario->getUsuario(); ?></td>
              <td><?php echo $usuario->getNombre(); ?></td>
              <td><?php echo $usuario->getApellidos(); ?></td>
              <td><a href="src/controladores/modificarUsuarioControlador.php?usuario=<?php echo $usuario->getCodigo();  ?>&activo=<?php echo $usuario->getActivo();  ?>"><button><?php echo ($usuario->getActivo() == 1 ?  'Dar de baja' : 'Dar de alta'); ?></button></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </body>
</html>
