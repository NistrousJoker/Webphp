<?php
    session_start();
    if($_SESSION['token']!=sha1("crash")){
        header("Location:login.php");
    }
 ?>
