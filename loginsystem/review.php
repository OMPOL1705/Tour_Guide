<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;

}

$check = false;
$check2 = false;
if (isset($_POST['rating'])) {


    include '../loginsystem/partials/_dbconnect.php';
    $rating = $_POST['rating'];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];
    
    if ($rating && $email && $feedback) {
        

        $sql = "INSERT INTO `review` (`username`, `rating`, `email`, `feedback`, `dt`) VALUES ('$_SESSION[username]', '$rating', '$email', '$feedback', current_timestamp());";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $check = true;
        } 
    }
    else{
        $check2 = true;
    }
    

}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Review</title>

    <style>
        .form-control {
            width: 60%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/final/loginsystem/review.php">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/final/loginsystem/p2.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/final/loginsystem/logout.php">Log out</a>
                </li>
                

            </ul>

        </div>
    </nav>
    <?php
    
    if ($check) {
        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> Feedback sent succesfully.We will surely work on this.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> ';
    }
    if ($check2){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> Feedback not added as all details should be entered.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> ';
    }
     ?>


    <div class="container my-4 d-flex justify-content-center flex-column">
        <h1 class="d-flex justify-content-center">FEEDBACK</h1>

        <form action="/final/loginsystem/review.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Your experience to our website</label>
                <select class="form-control" name="rating" id="rating">
                    <option>Great</option>
                    <option>Good</option>
                    <option>Medium</option>
                    <option>Bad</option>
                    <option>Worse</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">E-mail</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Any suggestions</label>
                <textarea class="form-control" name="feedback" id="feedback" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>