<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/custom.js" charset="utf-8"></script>
    </head>
    <body>
      <?php
      include_once 'src/modelo/Producto.php';
      include_once 'compruebaLogin.php';
      if(!isset($_SESSION['productos'])){
        header('Location: src/controladores/getProductosControlador.php');
      }else{
        $productos = $_SESSION['productos'];
        unset($_SESSION["productos"]);
      }
      ?>
      <a href="index.php"><button>Volver a index</button></a>
      <table>
        <thead>
          <tr>
            <td>Codigo</td>
            <td>Descripcion</td>
            <td>Precio</td>
            <td>Existencias</td>
            <td>Imagen</td>
            <td>Categoria</td>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($productos as $key => $producto) {
          $estado = 'En proceso';
          $boton = 'Enviar';
           ?>
          <tr>
            <td><input class="producto<?php echo $producto->getCodigo(); ?>" name="codigo" value="<?php echo $producto->getCodigo(); ?>" readonly/></td>
            <td><input class="producto<?php echo $producto->getCodigo(); ?>" name="descripcion" value="<?php echo $producto->getDescripcion(); ?>" required="true"/></td>
            <td><input class="producto<?php echo $producto->getCodigo(); ?>" name="precio" value="<?php echo $producto->getPrecio(); ?>" required="true"/></td>
            <td><input class="producto<?php echo $producto->getCodigo(); ?>" name="existencias" value="<?php echo $producto->getExistencias(); ?>" required="true"/></td>
            <td><input class="producto<?php echo $producto->getCodigo(); ?>" name="imagen" value="<?php echo $producto->getImagen(); ?>" required="true"/></td>
            <td><input class="producto<?php echo $producto->getCodigo(); ?>" name="categoria" value="<?php echo $producto->getCategoria(); ?>" required="true"/></td>
            <td><button onclick="enviarDatos(<?php echo $producto->getCodigo(); ?>)">Modificar</button></td>
          </tr>
          <?php } ?>
          <tr>
            <td></td>
            <td><input class="productonuevo" name="descripcion" required="true"/></td>
            <td><input class="productonuevo" name="precio"  required="true"/></td>
            <td><input class="productonuevo" name="existencias" required="true"/></td>
            <td><input class="productonuevo" name="imagen"  required="true"/></td>
            <td><input class="productonuevo" name="categoria" required="true"/></td>
            <td><button onclick="crearProducto('nuevo')">Crear</button></td>
          </tr>
        </tbody>
      </table>
    </body>
</html>
