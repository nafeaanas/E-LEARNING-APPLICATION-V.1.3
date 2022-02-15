<?php
session_start();
    if(!$_COOKIE['email'] && !$_COOKIE['password']){
        header('location:../index.php');
    }
?>
<?php
include '../Students/Connection.php';
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $payment_schedule=$_POST['payment_schedule'];
    $bill_number=$_POST['bill_number'];
    $amount_paid=$_POST['amount_paid'];
    $balance_amount=$_POST['balance_amount'];
    $date=$_POST['date'];


     $sql="INSERT INTO payment_details (name,payment_schedule,bill_number,amount_paid,balance_amount,date) VALUES ('$name','$payment_schedule','$bill_number','$amount_paid','$balance_amount','$date')";
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
  <link rel="stylesheet" href="../Students/styleadd.css">
  <title>Document</title>
</head>
<body>
    <main class="signin d-flex justify-content-center py-2">
          <div class="signinf bg-white ">
              <div>
                      <h3 class="border-start border-info border-5 m-4 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-4 text-center">
                      <p class="enter text-muted">enter payment information</p>
              </div>
              <form action="" class="p-4  " method="post">
                  <div class="mb-2">
                       <label for="exampleInputemail1" class="form-label ">name</label>
                       <input type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter payment name" name="name" REQUIRED>
                  </div>
                  <div class="mb-2">
                       <label for="exampleInputemail1" class="form-label ">payment_schedule</label>
                       <input type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter payment payment_schedule" name="payment_schedule" REQUIRED>
                  </div>
                  <div class="mb-2">
                       <label for="exampleInputemail1" class="form-label ">bill_number</label>
                       <input type="number" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter payment bill_number" name="bill_number" REQUIRED>
                  </div>
                  <div class="mb-2">
                       <label for="exampleInputemail1" class="form-label ">amount_paid</label>
                       <input type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter payment amount_paid" name="amount_paid" REQUIRED>
                  </div>
                  <div class="mb-2">
                       <label for="exampleInputemail1" class="form-label ">balance_amount</label>
                       <input type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter payment balance_amount" name="balance_amount" REQUIRED>
                  </div>
                  <div class="mb-2">
                       <label for="exampleInputemail1" class="form-label ">date</label>
                       <input type="date" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="Enter payment date" name="date" REQUIRED>
                  </div>
                  
                  <input name="submit"type="submit" class="btn bg-info text-white w-100" value="add">
              </form>
          </div>
    </main>
    
     <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>