<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
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
        <div class="item centre"><a href="p1.html">Family Tours</a></div>
        <div class="item centre"><a href="p2.html">Religious Tours</a></div>
        <div class="item centre"><a href="p3.html">Adventure Tours</a></div>
        <div class="item centre"><a href="p4.html">Special Event Tours</a></div>
        <div class="item centre"><a href="p5.html">Group Tours</a></div>
        
    </div>

     <div class="cont1">
        <div class="card1">
            <div class="img1">
                <img src="https://source.unsplash.com/300x300/?mumbai,travel" alt="" srcset="" width="300px" height="250px" border-radius="10px">
            </div>
            <div class="c3">
                <div class="info centre">
                <p>Description: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, ducimus?
                        <br>
                        Location: Mumbai <br>
                        Price: 3000 <br>
                    </p>
                </div>
                <div class="book centre">
                <a href="/final/loginsystem/book.php">BOOK NOW</a>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="img1">
                <img src="https://source.unsplash.com/300x300/?travel,canada" alt="" srcset="" width="300px" height="250px" border-radius="10px">
            </div>
            <div class="c3">
                <div class="info centre">
                <p>Description: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, ducimus?
                        <br>
                        Location: Canada <br>
                        Price: 3000 <br>
                    </p>
                </div>
                <div class="book centre">
                <a href="/final/loginsystem/book.php">BOOK NOW</a>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="img1">
                <img src="https://source.unsplash.com/300x300/?travel,china" alt="" srcset="" width="300px" height="250px" border-radius="10px">
            </div>
            <div class="c3">
                <div class="info centre">
                <p>Description: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, ducimus?
                        <br>
                        Location: China <br>
                        Price: 3000 <br>
                    </p>
                </div>
                <div class="book centre">
                <a href="/final/loginsystem/book.php">BOOK NOW</a>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="img1">
                <img src="https://source.unsplash.com/300x300/?travel,dubai" alt="" srcset="" width="300px" height="250px" border-radius="10px">
            </div>
            <div class="c3">
                <div class="info centre">
                <p>Description: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, ducimus?
                        <br>
                        Location: Dubai <br>
                        Price: 3000 <br>
                    </p>
                </div>
                <div class="book centre">
                <a href="/final/loginsystem/book.php">BOOK NOW</a>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="img1">
                <img src="https://source.unsplash.com/300x300/?canada" alt="" srcset="" width="300px" height="250px" border-radius="10px">
            </div>
            <div class="c3">
                <div class="info centre">
                <p>Description: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, ducimus?
                        <br>
                        Location: Canada <br>
                        Price: 3000 <br>
                    </p>
                </div>
                <div class="book centre">
                <a href="/final/loginsystem/book.php">BOOK NOW</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>