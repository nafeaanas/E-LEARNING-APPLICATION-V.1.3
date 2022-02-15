   <div class=" Sidbar col-auto d-xl-block d-none  d-flex flex-column vh-100  "> 
            <div>
                <h1 class="E-classe border-start border-info border-3 px-1 m-3"><strong>E-classe</strong></h1>
            </div>
            <div class="d-flex justify-content-center">
                <img src="image/youcode.png" alt="" width="100" height="100" class="YoucodeImg rounded-circle mt-4 me-2 ">
            </div>
            <div class="text-center">
                <h2 class="pt-4" id="AdminName">
                    <?php
                        echo $_SESSION['name'];
                    ?>
                </h2>
                <p class="text-info" id="Admin">Admin</p>
            </div>
            <ul class="nav nav-pills flex-column mb-auto p-2 px-4 ">
                <li> 
                    <a href="../Dashboard/index.php" class="nav-link  ps-5 mt-1 bg-info"> <img src="image/Vector (13).png" alt="home"><span class="ms-2 text-black ps-2">Home</span> </a> 
                </li>
                <li> 
                    <a href="../courses/index.php" class="nav-link text-black ps-5 mt-1"> <img src="image/Vector (12).png" alt="Course"><span class="ms-2 ps-3">Courses</span> </a> </li>
                <li> 
                    <a href="../Students/index.php" target="_blank" class="nav-link text-black ps-5 mt-1"> <img src="image/Vector (11).png" alt="student"><span class="ms-2 ps-2">Students</span> </a> 
                </li>
                <li> 
                    <a href="../Payment/index.php" target="_blank" class="nav-link text-black ps-5 mt-1"> <img src="image/Vector (10).png" alt="payement"><span class="ms-1 ps-3">Payment</span> </a> 
                </li>
                <li> 
                    <a href="#" class="nav-link text-black ps-5 mt-1"> <img src="image/Vector (9).png" alt="report"><span class="ms-2 ps-3">Report</span> </a> 
                </li>
                <li> 
                    <a href="#" class="nav-link text-black ps-5 mt-2"> <img src="image/Vector (8).png" alt="Settings"><span class="ms-1 ps-3">Settings</span> </a> 
                </li>
            </ul>
            <div class=" mb-4 p ">
                <ul class="nav nav-pills flex-column px-4">
                    <li> 
                        <a href="../logout.php" class="nav-link text-black text-center "> <span class="ms-2 pe-2">Logout</span> <img src="image/Vector (7).png" alt="Logout"> </a>
                    </li>
                </ul>
            </div>
    </div>