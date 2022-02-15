<?php
session_start();
    if(!$_COOKIE['email'] && !$_COOKIE['password']){
        header('location:../index.php');
    }
?>
<?php
include 'Connection.php';
$id=$_GET['updateid'];
$sql="select * from student where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
     $name=$row['name'];
     $email=$row['email'];
     $phone=$row['phone'];
     $enroll_number=$row['enroll_number'];
     $date_of_admission=$row['date_of_admission'];


if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $enroll_number=$_POST['enroll_number'];
     $date_of_admission=$_POST['date_of_admission'];



     $sql="update student set id=$id,name='$name',email='$email',phone='$phone',enroll_number='$enroll_number',date_of_admission='$date_of_admission' where id=$id";
     $result=$conn->query($sql);
     header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="styleadd.css">
  <title>Document</title>
</head>
<body>
    <main class="signin d-flex justify-content-center py-3">
          <div class="signinf bg-white ">
              <div>
                      <h3 class="border-start border-info border-5 m-4 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-4 text-center">
                      <p class="enter text-muted">update student information</p>
              </div>
              <form action="" class="p-4" method="post">
                  <div class="mb-3">
                       <label for="exampleInputemail1" class="form-label ">name</label>
                       <input type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student name" name="name" value="<?php echo $name; ?>">
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputemail1" class="form-label ">email</label>
                       <input type="email" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student email" name="email" value="<?php echo $email; ?>">
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputemail1" class="form-label ">phone</label>
                       <input type="phone" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student phone" name="phone" value="<?php echo $phone; ?>">
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputemail1" class="form-label ">enroll_number</label>
                       <input type="number" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student enroll_number" name="enroll_number" value="<?php echo $enroll_number; ?>">
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputemail1" class="form-label ">date_of_admission</label>
                       <input type="date" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student date_of_admission" name="date_of_admission" value="<?php echo $date_of_admission; ?>">
                  </div>
                  <input name="submit"type="submit" class="btn bg-info text-white w-100" value="update">
              </form>
          </div>
    </main>
    
     <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>