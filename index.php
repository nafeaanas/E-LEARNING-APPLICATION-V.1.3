<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
    <main class="signin d-flex justify-content-center align-items-center">
          <div class="signinf bg-white">
              <div>
                      <h3 class="border-start border-info border-5 m-4 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-4 text-center">
                      <p class="sign"><strong>SIGN IN</strong></p>
                      <?php
                         if(isset($_GET['error'])){
                              echo '<p class="text-danger">Password or Email is incorrect !</p>';
                         }
                         else {
                              echo '<p class="enter text-muted ">Enter your credentials to access your account</p>';
                         }
                      ?>              </div>
              <form class="p-4" action="login.php" method="POST">
                   <?php session_start(); ?>
                  <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label ">Email</label>
                       <input type="email" value="<?php if($_SESSION['email']){echo $_SESSION['email'];} ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" name="email">
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputPassword1" class="form-label">Password</label>
                       <input type="password" value="<?php if($_SESSION['password']) {echo $_SESSION['password'];} ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" name="password">
                  </div>
                  <div>
                       <input type="checkbox" name="remember_me" id="remember_me">
                       <label for="remember_me">Remember me</label>
                  </div>
                        <button  type="submit" class="btn bg-info text-white w-100 mt-3"><a class="text-white text-decoration-none">SIGN IN</a> </button>
                  <div class="forget  mt-3 text-center">
                       <span>Forgot your password?<a class="text-info" href=""><strong> Reset Password</strong> </a></span>
                  </div>
              </form>
          </div>
    </main>
     <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>