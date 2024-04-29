<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
     
   

<!-- side bar -->
<div id="sidebar" class="w3-sidebar w3-bar-block w3-card" style="width:25%;right:0;z-index:2;display:none">
    <h3 class="w3-bar-item">To Change</h3>
    <button onclick="closeSidebar()" class="w3-bar-item w3-button w3-large">Close &times;</button>
    <a href="details.php" class="w3-bar-item w3-button">Change Details</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- side bar  -->






     <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.php">
                                <h1>CAR <span>Wash</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>

<?php 
$sql = "SELECT * from tblpages where type='contact'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $result)
{       
?>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-3">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p><?php   echo $result->openignHrs; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+<?php   echo $result->phoneNumber; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p><?php   echo $result->emailId; ?></p>
                                    </div>
                                    
                                </div>
                            </div>
                         <?php
                        //    if(!isset($_SESSION['user'])) {
                            ?>
                                <!-- <div class="col-3">
                                    <div class="top-bar-item" style="margin-top:10px">
                                        <a class="btn btn-custom" href="signin.php">Sign in</a>
                                    </div>
                                </div> -->
                            <?php
                        //    } else {
                            ?>
                                <div class="col-3">
                                    <div class="top-bar-item">
                                        <div class="">
                                            <img src="img/profile.png" alt="" srcset="">
                                        </div>
                                        <div class="top-bar-text">
                                            <!-- <h3>navin</h3> -->
                                            <button style="border:none" onclick="openSidebar()"><h3>navin</h3></button>
                                        </div>
                                    </div>
                                </div>
                            <?php
                         //   }
                            ?>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="washing-plans.php" class="nav-item nav-link">Washing Plans</a>
                            <a href="location.php" class="nav-item nav-link">Washing Points</a>
                    
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="admin" class="nav-item nav-link">admin</a>
                        </div>
                        <div class="ml-auto ">
                            <a class="btn btn-custom" href="contact.php">Get Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


  
   
        <script>
    // Function to open the sidebar
    function openSidebar() {
        document.getElementById("sidebar").style.display = "block";
    }

    // Function to close the sidebar
    function closeSidebar() {
        document.getElementById("sidebar").style.display = "none";
    }
</script>
