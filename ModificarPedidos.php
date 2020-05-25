<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar pedido</title>
        <link rel="stylesheet" href="css/estilo_1.css">
    </head>
    <body>
      <?php
      include_once 'src/modelo/Pedido.php';
      include_once 'compruebaLogin.php';
      if(!isset($_SESSION['pedidos'])){
        header('Location: src/controladores/getPedidosControlador.php');
      }else{
        $pedidos = $_SESSION['pedidos'];
        unset($_SESSION["pedidos"]);
      }
      ?>
        <h1 style="text-align: center">Modificar pedido</h1>
        <a href="index.php"><button style="margin: 10px auto;">Volver</button></a>
      <table cellspacing="50" style="margin: 0 auto; text-align: center">
        <thead>
          <tr>
            <td>Codigo</td>
            <td>Fecha</td>
            <td>Usuario</td>
            <td>Num productos</td>
            <td>Importe</td>
            <td>Estado</td>
            <td>Cambiar Estado</td>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($pedidos as $key => $pedido) {
          $estado = 'En proceso';
          $boton = 'Enviar';
          switch ($pedido->getEstado()) {
            case 0:
            $estado = 'En proceso';
            $boton = 'Enviar';
              break;
            case 1:
            $estado = 'Enviado';
            $boton = 'Entregado';
              break;
            case 2:
            $estado = 'Entregado';
            $boton = null;
              break;
            case 3:
            $estado = 'Cancelado';
            $boton = null;
              break;
          }
           ?>
          <tr>
            <td><?php echo $pedido->getCodigo(); ?></td>
            <td><?php echo $pedido->getFecha(); ?></td>
            <td><?php echo $pedido->getPersona(); ?></td>
            <td><?php echo json_encode($pedido->getProductos()); ?></td>
            <td><?php echo $pedido->getImporte(); ?></td>
            <td><?php echo $estado; ?></td>
            <?php if($boton !== null){ ?>
            <td><a href="src/controladores/modificarPedidoControlador.php?codigoPedido=<?php echo $pedido->getCodigo();  ?>&estado=<?php echo $pedido->getEstado();  ?>"><button><?php echo $boton; ?></button></a></td>
            <?php } ?>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <h2 style="text-align: center">Filtro</h2>
      <form style="transform: translate(45%, 45%)" class="filtro" action="src\controladores\filtrarPedidoControlador.php" method="post">
          <input  type="text" name="usuario" placeholder="usuario" value=""><br />
<input type="text" name="fecha" placeholder="fecha" value=""><br />
<input type="text" name="producto" placeholder="producto" value=""><br />
Menor
<input type="radio" name="rango" checked="checked"  value="menor">
Igual
<input type="radio" name="rango" checked="checked"  value="igual">
mayor
<input type="radio" name="rango" checked="checked"  value="mayor">
<button stype="submit">Filtrar</button>
</form>
    </body>
</html>
