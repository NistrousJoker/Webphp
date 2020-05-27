<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar prodructos</title>
        <link rel="stylesheet" href="css/estilo.css">
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
        if(isset($_SESSION["productoModificado"])){
          $codigo = $_SESSION["productoModificado"];
          unset($_SESSION["productoModificado"]);
          ?>
          <script type="text/javascript">
            alert("Producto con codigo " + <?php echo  $codigo; ?> + ' modificado');
          </script>
          <?php
        }
      }
      ?>
        <h1 style="text-align: center">Modificar un producto</h1>
        <div>
      <a href="index.php"><button>Volver</button></a>
      </div>
      <table cellspacing="10" style="margin: 0 auto; text-align: center;">
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
            <td><p><?php echo $producto->getCodigo(); ?></p></td>
            <td><input class="producto<?php echo $producto->getCodigo(); ?>" name="descripcion" value="<?php echo $producto->getDescripcion(); ?>" required="true"/></td>
            <td><input class="producto<?php echo $producto->getCodigo(); ?>" name="precio" value="<?php echo $producto->getPrecio(); ?>" required="true"/></td>
            <td><input class="producto<?php echo $producto->getCodigo(); ?>" name="existencias" value="<?php echo $producto->getExistencias(); ?>" required="true"/></td>
            <td><input class="producto<?php echo $producto->getCodigo(); ?>" name="imagen" value="<?php echo $producto->getImagen(); ?>" required="true"/></td>
            <td>
              <select class="producto<?php echo $producto->getCodigo(); ?>" name="categoria" required="true">
                <option value="componentes" <?php echo ($producto->getCategoria() == 'componentes' ? 'selected' : false) ?>>componentes</option>
                <option value="consolas" <?php echo ($producto->getCategoria() == 'consolas' ?  'selected' : false) ?>>consolas</option>
                <option value="perifericos" <?php echo ($producto->getCategoria() == 'perifericos' ?  'selected' : false) ?>>perifericos</option>
                <option value="portatiles" <?php echo ($producto->getCategoria() == 'portatiles' ?  'selected' : false) ?>>portatiles</option>
              </select>
            </td>
            <td><button onclick="enviarDatos(<?php echo $producto->getCodigo(); ?>)">Modificar</button></td>
          </tr>
          <?php } ?>
          <tr>
            <td></td>
            <td><input class="productonuevo" name="descripcion" required="true"/></td>
            <td><input class="productonuevo" type="number" name="precio"  required="true"/></td>
            <td><input class="productonuevo" type="number" name="existencias" required="true"/></td>
            <td><input class="productonuevo" name="imagen"  required="true"/></td>
            <td>  <select class="productonuevo" name="categoria" required="true">
                <option value="">Seleccione una categoria</option>
                <option value="componentes">componentes</option>
                <option value="consolas">consolas</option>
                <option value="perifericos">perifericos</option>
                <option value="portatiles">portatiles</option>
              </select></td>
            <td><button onclick="crearProducto('nuevo')">Crear</button></td>
          </tr>
        </tbody>
      </table>
    </body>
</html>
