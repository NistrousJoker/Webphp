<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include_once 'compruebaLogin.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/estilo.css">

    </head>
    <body>


        <h1 style="text-align: center">Login correcto</h1>
        <section class="servicios">
                <div class="contenedor">
                    <div class="servicio-cont">
                        <div class="servicio-ind">
                            <img class="imagen-prueba2" src="imagenes/descarga.jfif" alt="" class="imagen-usuario">
                            <h3><a href="modificarUsuarios.php"><button type="submit">Usuarios</button></a></h3>
                            <p></p>
                        </div>
                        <div class="servicio-ind">
                            <img class="imagen-prueba2" src="imagenes/images.png" alt="" class="imagen-usuario">
                            <h3><a href="ModificarProductos.php"><button type="submit">Productos</button> </a></h3>
                            <p></p>
                        </div>
                        <div class="servicio-ind">
                            <img class="imagen-prueba2" src="imagenes/pedido.jpg" alt="" class="imagen-usuario">
                            <h3><a href="modificarPedidos.php"><button type="submit">Pedidos</button></a></h3>
                            <p></p>
                        </div>
                        <div class="servicio-ind">
                            <img class="imagen-prueba3" src="imagenes/cerrar.jpg" alt="" class="imagen-usuario">
                            <h3><a href="src/controladores/cerrarSesion.php"><button type="submit">Cerrar Sesion </button></a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </section>
    </body>
</html>
