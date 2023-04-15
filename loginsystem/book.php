<?php

session_start();

$insert = false;
$showError = false;
$inset = true;
if (isset($_POST['name'])) {

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);


    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $st_date = $_POST['st_date'];
    $en_date = $_POST['en_date'];

    if ($name && $gender && $age && $email && $phone && $desc && $st_date && $en_date) {
        $sql = "INSERT INTO `user`.`book` (`category`, `p_name`, `username`, `name`, `age`, `gender`, `email`, `phone`, `other`, `st_date`, `en_date`, `dt`) VALUES ('$_SESSION[category]', '$_SESSION[p_name]', '$_SESSION[username]', '$name', '$age', '$gender', '$email', '$phone', '$desc', '$st_date', '$en_date', current_timestamp());";

        if ($con->query($sql) == true) {

            $insert = true;
        } else {
            echo "ERROR: $sql <br> $con->error";
        }
    } else {
        $showError = "Please!! Enter all details present in the form.";
    }


    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/book.css">
</head>

<body>

    <img class="bg" src="../images/link-hoang-UoqAR2pOxMo-unsplash.jpg" alt="mm">

    <?php
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Note:</strong>' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
    }
    if ($insert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your package has been successfully booked, You can logout.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
    }
    ?>
    <div class="container">
        <div class="logout">
        <div class="log">
        <form action="/final/loginsystem/package.php" method="post"><button>Back</button></form>
        <form action="/final/home.php" method="post"><button>Logout</button></form>
            </div>
            <h1>Booking form</h3>
            
            
        </div>

        <?php
        if ($inset == true) {
            echo "<p>Enter your details and submit this form to book the package </p>";
        }

        ?>

        <form action="/final/loginsystem/book.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your address"></textarea>
            <input placeholder="Enter start date" name="st_date" class="textbox-n" type="text"
                onfocus="(this.type='date')" onblur="(this.type='text')" id="st_date" />
            <input placeholder="Enter end date" name="en_date" class="textbox-n" type="text"
                onfocus="(this.type='date')" onblur="(this.type='text')" id="en_date" />
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>