<?php
    session_start();
    $_SESSION['user']= $_POST ['usuario'];
    $_SESSION['pass'] =$_POST['pass'];
    header("Location: mostrar.php");
?>