<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recieve Blood</title>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="styles/recieve.css">
</head>

<body>
        <header class="continer-fluid ">
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo">
                            <img src="assets/images/logo.png" alt="" style="width: 60px;">
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
                                            <a class="nav-link" href="./donate.html">Donate Blood</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./receive.php">Recieve Blood</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="search-container">
            <h1>Search for Donors</h1>
            <form id="search-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" placeholder="Enter city">

                </div>
                <div>
                    <label for="blood-type">Blood Type:</label>
                    <select id="blood-type" name="blood-type">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B+">B-</option>
                        <option value="B+">O+</option>
                        <option value="B+">O-</option>
                        <option value="B+">AB-</option>
                    </select>

                </div>

                <input type="submit" class="btn" value="Search" name="submit"></button>
            </form>

                <div id="search-results">
                    <!-- Search results will be displayed here -->
                </div>
        </div>

        <?php
    error_reporting(0);
    if (isset($_POST['submit'])) {
        //$function_to_call = "findDonorForRecipient"; 
        //$arguments = [$_POST['city'],$_POST['blood-type']];
        $blood_type = $_POST['blood-type'];
        $city = $_POST['city'];
        $conn = mysqli_connect("localhost","admin","admin","bloodbank");
        //error_reporting(E_ERROR | E_PARSE);
        $sql = " SELECT * FROM donor WHERE blood_type = '$blood_type' ORDER BY CASE WHEN city = '$city' THEN 0 ELSE 1 END, city;";
        $output = mysqli_query($conn,$sql);

        echo "<table>";
while ($row = mysqli_fetch_assoc($output)) {
    echo "<tr>";
    // Access the data in each row
    foreach($row as $item){
        echo "<td>$item</td>";
    }
    echo "</tr>";
}
echo "</table>";
        
        

        //$command = "python connector.py $function_to_call " . implode(" ", $arguments);
        //$output = shell_exec($command);
        
        
        
        // Output the result
    //echo $output;

    }
    ?>


    




    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </html>