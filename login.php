<?php
include 'Students/Connection.php';
session_start();
$sql="SELECT * FROM comptes WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
$result = mysqli_query($conn,$sql);
$compte=mysqli_fetch_assoc($result);
if($compte){
    $_SESSION['name'] = $compte['name'];
    $_SESSION['email'] = $compte['email'];
    $_SESSION['password'] = $compte['password'];
    if(isset($_POST['remember_me'])){
        setcookie('email' , $_SESSION['email'] , time() + 60*60*24 ,  null , null , false , true);
        setcookie('password' , $_SESSION['password'] , time() + 60*60*24 , null , null , false , true);
    }else {
        setcookie('email' , $_SESSION['email'] , time() + 60*20 ,  null , null , false , true);
        setcookie('password' , $_SESSION['password'] , time() + 60*20 , null , null , false , true);
    }
    header("location:Dashboard/index.php");
}else {
    header("location:index.php?error");
}

?>