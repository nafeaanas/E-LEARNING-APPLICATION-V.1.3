<?php
session_start();
    if(!$_COOKIE['email'] && !$_COOKIE['password']){
        header('location:../index.php');
    }
?>
<?php
include 'Connection.php';
if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $enroll_number=$_POST['enroll_number'];
     $date_of_admission=$_POST['date_of_admission'];



     $sql="INSERT INTO student (name,email,phone,enroll_number,date_of_admission) VALUES ('$name','$email','$phone','$enroll_number','$date_of_admission')";
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
                      <p class="enter text-muted">enter student information</p>
              </div>
              <form action="" class="p-4" method="post">
                  <div class="mb-3">
                       <label for="exampleInputemail1" class="form-label ">name</label>
                       <input type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student name" name="name" REQUIRED>
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputemail1" class="form-label ">email</label>
                       <input type="email" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student email" name="email" REQUIRED>
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputemail1" class="form-label ">phone</label>
                       <input type="phone" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student phone" name="phone" REQUIRED>
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputemail1" class="form-label ">enroll number</label>
                       <input type="number" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student enroll_number" name="enroll_number" REQUIRED>
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputemail1" class="form-label ">date of admission</label>
                       <input type="date" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter student date_of_admission" name="date_of_admission" REQUIRED>
                  </div>
                  <input name="submit"type="submit" class="btn bg-info text-white w-100" value="add">
              </form>
          </div>
    </main>
    
     <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>