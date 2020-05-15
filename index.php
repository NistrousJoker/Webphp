<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if($_SESSION['token']!=sha1("crash")){
    header("Location:login.php");
}
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>

        
        <h1>Login correcto</h1>
        <section class="servicios">
                <div class="contenedor">
                    <h2 class="titulo">Bienvenido <%=usuarioActual %></h2>
                    <div class="servicio-cont">
                        <div class="servicio-ind">
                            <img class="imagen-prueba1" src="imagenes/descarga.jfif" alt="" class="imagen-usuario">
                            <h3><button type="submit" onclick="Cargar('ModificarUsuarios.php', 'cuerpo');">Usuarios</button></h3>
                            <p></p>
                        </div>
                        <div class="servicio-ind">
                            <img class="imagen-prueba2" src="imagenes/images.png" alt="" class="imagen-usuario">
                            <h3><button type="submit" onclick="Cargar('ModificarProductos.php', 'cuerpo');">Productos</button></h3>
                            <p></p>
                        </div>
                        <div class="servicio-ind">
                            <img class="imagen-prueba2" src="imagenes/productos/pedido.jpg" alt="" class="imagen-usuario">
                            <h3><button type="submit" onclick="Cargar('ModificarPedidos.php', 'cuerpo');">Pedidos</button></h3>
                            <p></p>
                        </div>
                        <div class="servicio-ind">
                            <img class="imagen-prueba3" src="imagenes/productos/cerrar.jpg" alt="" class="imagen-usuario">
                            <h3><button type="submit"onclick="Cargar('CierreSesion','cuerpo')">Cerrar Sesion </button></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </section>
    </body>
</html>