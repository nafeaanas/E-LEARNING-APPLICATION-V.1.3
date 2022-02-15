<?php
include 'Connection.php';
$sql = "SELECT count(id) AS total FROM courses";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>