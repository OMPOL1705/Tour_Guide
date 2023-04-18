<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: admin.php");
    exit;
}

$showAlert = false;
$showError = false;
$shower = false;
if (isset($_POST['a_name'])) {


    include '../loginsystem/partials/_dbconnect.php';
    $a_name = $_POST['a_name'];
    $a_pass = $_POST["a_pass"];
    $cpassword = $_POST["cpassword"];

    // $exists = false;
    if ($a_name && $a_pass && $cpassword) {
        $existSql = "SELECT * FROM `admin_login` WHERE a_name = '$a_name'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
        if ($numExistRows > 0) {
            // $exists = true;
            $showError = "Username Already Exists";
        } else {
            if ($a_pass == $cpassword) {
                $sql = "INSERT INTO `admin_login` ( `a_name`, `a_pass`, `dt`) VALUES ('$a_name', '$a_pass', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $showAlert = true;
                }
                
        
                
            } else {
                $showError = "Passwords do not match";
            }
        }

    } else {
        $shower = true;

    }

}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Panel</title>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/final/admin/panel.php">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/final/admin/panel.php">Home </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/final/home.php">Log out</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/final/admin/addpack.php">Add package</a>
                        <a class="dropdown-item" href="/final/admin/bookings.php">View bookings</a>
                        <a class="dropdown-item" href="/final/admin/feedback.php">View Feedbacks</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/final/admin/newadmin.php">Add new admin</a>
                    </div>
                </li>

            </ul>

        </div>
    </nav>

    <?php
    if ($shower) {
        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Please!</strong> Enter your details.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
    }
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
    }

    ?>
    <div class="container my-4 mx-auto" style="width: 500px;">
        <h1 class="text-center">Add new admin
        </h1>
        <form action="/final/admin/newadmin.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="a_name" name="a_name" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="a_pass" name="a_pass">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
            </div>

            <button type="submit" class="btn btn-primary">SignUp</button>
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