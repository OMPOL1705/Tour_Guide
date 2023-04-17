<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;

}

if (isset($_POST['p_name'])){
    $table_name = $_POST["table_name"];
    $_SESSION['category'] = $table_name;
    $p_name = $_POST["p_name"];
    $_SESSION['p_name'] = $p_name;

    header("location: book.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pk.css">
    <title>Package</title>
</head>

<body>
    
    <header>
        <nav>
            <img src="../images/logo.png" alt="" width="150px" height="150px">
            <div class="tt">
                <ul>
                    <a href="/final/home.php">Home</a>
                    <a href="/final/loginsystem/logout.php">Log Out</a>

                </ul>
            </div>
            <div class="search centre">
                <input type="text" placeholder="Anything">
                <button>Search</button>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="item centre"><a href="/final/loginsystem/package.php">Family Tours</a></div>
        <div class="item centre"><a href="/final/loginsystem/p2.php">Religious Tours</a></div>
        <div class="item centre"><a href="/final/loginsystem/p3.php">Adventure Tours</a></div>
        <div class="item centre"><a href="/final/loginsystem/p4.php">Special Event Tours</a></div>
        <div class="item centre"><a href="/final/loginsystem/p5.php">Group Tours</a></div>

    </div>

    <div class="cont1">

        <?php

        include 'partials/_dbconnect.php';
        $sql = "SELECT * FROM `familytours`";
        $result = mysqli_query($conn, $sql);



        while ($row = mysqli_fetch_assoc($result)) {
            
            $p_name = $row['p_name'];
            $desc = $row['desc'];
            $location = $row['location'];
            $price = $row['price'];
            $img = $row['img'];

            echo '<div class="card1" style="margin: 47px;">
            <div class="img1">
                <img src="data:image;base64,' . base64_encode($row['img']) . '" alt="" srcset="" width="300px"
                    height="250px" border-radius="10px">
            </div>
            <div class="c3">
                
                <div class="info centre">
                <div class="Pack_name" style="display:flex; justify-content: center; margin: 8px">  
                <h1>' . $p_name . '</h1>
                </div>
                    <p>Description: ' . $desc . '?
                        <br>
                        Location: ' . $location . ' <br>
                        Price: ' . $price . ' <br>
                    </p>
                </div>
                <div class="book centre">
                <form action="/final/loginsystem/package.php" method="post">
                <input type="hidden" name="table_name" value="Family tours">
                <input type="hidden" name="p_name" value="' . $p_name . '">
                <button type="submit" class="btn btn-primary" style="padding: 8px 20px;background-color: #a5a1a1;border-radius: 6px;font-size: 20px; color:white; margin-top:20px; cursor:pointer;">Book Now</button>
                    </form>
                </div>
            </div>
        </div>';

        }

        ?>

    </div>

</body>

</html>