<?php
session_start();
    if(!$_COOKIE['email'] && !$_COOKIE['password']){
        header('location:../index.php');
    }
?>
<?php include '..\Students\Connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Payment</title>
</head>
<body>
    <main class="row w-100 h-100"> 
        <?php
         include '../decoupage/sidbar.php'
                ?>   

        <div class="container-fuild  mt-2 col">
            <?php
            include '../decoupage/nav.php'
            ?>  

          <section class="d-flex flex-row justify-content-between align-items-center px-4 pt-2">
              <div>
                  <p><strong>Payment Details</strong></p>
              </div>
              <div>  
                        <button class="btn bg-info text-white fs-6 "><a href="addform.php" class="text-white text-decoration-none">ADD NEW PAYMENT</a></button>
                    </div>  
                
                <div class="pe-4">
                  <img class="" src="image/Vector.png" alt=""> 
                </div>
                
          </section> 
        
          <section  class="tab table-responsive mx-4  pt-2 ">
                <table class="table table-borderless table-striped ">
                    <thead >
                      <tr class=" bg-light text-muted">
                        <th scope="col">name</th>
                        <th scope="col" class="text-nowrap">Payment Schedule</th>
                        <th scope="col" class="text-nowrap">Bill Number</th>
                        <th scope="col" class="text-nowrap">Amount Paid</th>
                        <th scope="col" class="text-nowrap">Balance amount</th>
                        <th scope="col">date </th>
                        <th scope="col"></th>
                      </tr>
                     </thead>
                   <tbody> 
                        <?php 
                            // $payment_list = array (
                            //      array("name"=>"Karthi", "payment_schedule"=>"First", "bill_number"=>"00012223", "amount_paid"=>"100,000DH", "balance_amount"=>"500,000DH", "date"=>"05-Jan-2022","logo"=>"image/vector (3).png"),
                            //      array("name"=>"Karthi", "payment_schedule"=>"First", "bill_number"=>"00012223", "amount_paid"=>"100,000DH", "balance_amount"=>"500,000DH", "date"=>"05-Jan-2022","logo"=>"image/vector (3).png"),
                            //      array("name"=>"Karthi", "payment_schedule"=>"First", "bill_number"=>"00012223", "amount_paid"=>"100,000DH", "balance_amount"=>"500,000DH", "date"=>"05-Jan-2022","logo"=>"image/vector (3).png"),
                            //      array("name"=>"Karthi", "payment_schedule"=>"First", "bill_number"=>"00012223", "amount_paid"=>"100,000DH", "balance_amount"=>"500,000DH", "date"=>"05-Jan-2022","logo"=>"image/vector (3).png"),
                            //      array("name"=>"Karthi", "payment_schedule"=>"First", "bill_number"=>"00012223", "amount_paid"=>"100,000DH", "balance_amount"=>"500,000DH", "date"=>"05-Jan-2022","logo"=>"image/vector (3).png")
                            //  );
                            $sql= "select * from payment_details";
                          $result=mysqli_query($conn,$sql);
                          if($result){
                            while($row=mysqli_fetch_assoc($result)){
                              $id=$row['id'];
                              $name=$row['name'];
                              $payment_schedule=$row['payment_schedule'];
                              $bill_number=$row['bill_number'];
                              $amount_paid=$row['amount_paid'];
                              $balance_amount=$row['balance_amount'];
                              $date=$row['date'];

                                 echo '<tr>';

                                 echo '<td class="bg-white">'.$name.'</td>';
                                 echo '<td class="bg-white">'.$payment_schedule.'</td>';
                                 echo '<td class="bg-white">'.$bill_number.'</td>';
                                 echo '<td class="bg-white">'.$amount_paid.'</td>';
                                 echo '<td class="bg-white">'.$balance_amount.'</td>';
                                 echo '<td class="bg-white text-nowrap">'.$date.'</td>';
                                 echo '<td scope="row" class="align-middle bg-white"><img src="image/vector (3).png" alt=""></td>';
                                 echo '</tr>';
                            }  
                            }  
                        ?>
 
                   </tbody>
             </table>
        </section>
      </div>    
  </main>  
  <script src="bootstrap.bundle.min.js"></script>
</body>
</html>