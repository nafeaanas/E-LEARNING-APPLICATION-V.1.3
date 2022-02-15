<?php
session_start();
    if(!$_COOKIE['email'] && !$_COOKIE['password']){
        header('location:../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
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

                    <section class=" row mt-2 justify-content-center  ms-3 " >  
                            <article class=" rectan1 col-12  col-md-5  m-2  col-lg rounded-3">
                                    <div class="ps-3 pt-2 text-muted">
                                        <img src="image/Vecto (2).png" alt="students">                     
                                        <p class="mt-2">Students</p>
                                    </div>  
                                    <div  class="text-end pe-3">
                                        <p class="fs-6"><strong><?php include '..\Students\statistiques_student.php'; ?></strong></p>
                                    </div>
                            </article>
                            <article class="rectan2 col-12  col-md-5 m-2  col-lg rounded-3">
                                    <div class="ps-3 pt-2 text-muted">
                                        <img src="image/Vecto (3).png" alt="course">
                                        <p class="mt-2">Courses</p>
                                    </div>  
                                    <div class="text-end pe-3">
                                        <p class="fs-6"><strong><?php include '../courses/statistiques_courses.php' ?></strong></p>
                                    </div> 
                            </article> 
                        
                            <article class="rectan3  col-12  col-md-5 m-2  col-lg rounded-3">
                                    <div class="ps-3 pt-2 text-muted">
                                        <img src="image/Vecto (4).png" alt="Payments">                          
                                        <p class="mt-2">Payments</p>
                                    </div>  
                                    <div class="text-end pe-3">
                                        <p class="fs-6"><strong>DHS <?php include '../Payment/statistiques_payment.php' ?></strong></p>
                                    </div> 
                            </article>
                            <article class="rectan4 col-12 col-md-5 m-2 col-lg rounded-3">
                                    <div class="ps-3 pt-2 text-muted">
                                        <img src="image/Vecto (1).png" alt="users">                     
                                        <p class="mt-2">Users</p>
                                    </div>  
                                    <div class="text-end pe-3">
                                        <p class="fs-6"><strong>3</strong></p>
                                    </div>   
                            </article> 
                    </section>
                </div>   
         </main>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>