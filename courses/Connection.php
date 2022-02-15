<?php
$conn = mysqli_connect("localhost","root","","e_classe_db");
if($conn->connect_error){
    die("failed connection" .$conn->connect_error);
}
?>