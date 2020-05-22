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

    </head>
    <body>
              <a href="index.php"><button>Volver a index</button></a>

        <?php if(!isset($_GET['error'])){
            header("Location:index.php");
        }else{
            ?>
        <h2><?php echo $_GET['error']; ?></h2>
                <?php
        } ?>
        
        
    </body>
</html>
