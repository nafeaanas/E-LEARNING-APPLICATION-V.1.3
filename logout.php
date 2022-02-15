<?php
    session_start();
    session_unset();
    setcookie('email' , $_SESSION['email'] , time() - 60*20*24 , null , null , false , true);
    setcookie('password' , $_SESSION['password'] , time() - 60*20*24 , null , null , false , true);
    session_destroy();
    header("location:index.php");
?>