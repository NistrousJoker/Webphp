<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="es">

    <head>
        <title>Administracion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./js/libCapas.js"></script>
        <link rel="icon" type="image/png" href="./imagenes/icono.png" sizes="64x64">

        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <form class="form-login" method="post" action="src/controladores/loginControlador.php">
                                <?php if(isset($_GET['error'])){ ?> 
                <h1><?php echo $_GET['error']; ?></h1>
            <?php } ?>
            <h5>Login</h5>
            <input class="controles" type="text" name="administrador" value="" placeholder="Administrador">
            <input class="controles" type="password" name="contrasena" value="" placeholder="Contraseña">
            <input class="ingresar" type="submit" name="ingresar" value="Ingresar">
            <p><a href="#">¿Olvidaste tu Contraseña?</a></p>
        </form>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </body>
</html>