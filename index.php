<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Donation</title>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
        <header class="continer-fluid ">
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo">
                            <img src="assets/images/logo.png" alt="" class="w-25">
                        </div>
                        <div class="col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">

                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="./index.html">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#about">About Us</a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="./donate.php">Donate Blood</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./receive.php">Recieve Blood</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./receiver.php">Register Reciever</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        
        

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slide-02.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, <br>
                            aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                            sed sagittis at, sagittis quis neque. Praesent.</p>

                        <div class=" vbh">

                            <div class="btn btn-success  bounceInUp"> <a class="text-light" href="./donate.php">Donate Blood</a> </div>
                            <div class="btn btn-success  bounceInUp"> <a class="text-light" href="#about">About Us</a> </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/slide-03.jpg" alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, <br>
                            aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                            sed sagittis at, sagittis quis neque. Praesent.</p>

                        <div class=" vbh">

                            <div class="btn btn-danger  bounceInUp"> Donate Now </div>
                            <div class="btn btn-danger  bounceInUp"> Contact US </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    
    <!--*************** About Us Starts Here ***************-->
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
               <h2>About Us</h2>
               <p>Saving Lives, One Drop at a Time</p>
           </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2>About Blood Donors</h2>
                    <p>At Blood Donors, we are passionate about making a difference in the world 
                        of healthcare through our Blood Donation Management System. Our mission is to connect donors,
                         healthcare providers, and recipients in a seamless and efficient manner, ultimately saving lives and 
                         promoting the spirit of giving. With years of experience and a dedicated team of professionals, we have 
                         developed a cutting-edge platform that streamlines the entire blood donation process. We understand the 
                         critical importance of timely and safe blood transfusions, and our system is designed to ensure that every
                          drop of donated blood reaches those in need. Join us in our quest to create a world where no one 
                          has to suffer due to a shortage of blood. Together,
                         we can make a positive impact on countless lives, one donation at a time. Thank you for being a part of this vital mission.</p>
                </div>
                <div class="col-md-6 image">
                    <img src="assets/images/about.jpg" alt="">
                </div>
            </div>
       </div>
   </section>
    

   

   <?php
   error_reporting(0);
  
       $conn = mysqli_connect("localhost","admin","admin","bloodbank");
       $sql = " SELECT * FROM blooddonation;";
       $output = mysqli_query($conn,$sql);
       echo "<div class='p-5'>";
       echo "<table class='table table-striped table-bordered my-5'>";
       echo "<thead class='thead-dark'><tr>";
       
       // Output column headers
       foreach (mysqli_fetch_fields($output) as $field) {
           echo "<th>{$field->name}</th>";
       }
       
       echo "</tr></thead><tbody>";
       
       while ($row = mysqli_fetch_assoc($output)) {
           echo "<tr>";
       
           // Access the data in each row
           foreach ($row as $item) {
               echo "<td>$item</td>";
           }
       
           echo "</tr>";
       }
       
       echo "</tbody></table>";
       echo "</div>";
   ?>

    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
