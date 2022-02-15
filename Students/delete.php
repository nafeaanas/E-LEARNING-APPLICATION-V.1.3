<?php
include 'Connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from student where id=$id";
    $result=mysqli_query($conn,$sql);
    header('location:index.php');
}
?>