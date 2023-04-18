<?php
$check = false;
$check2 = false;
if (isset($_POST['cat'])) {


    include '../loginsystem/partials/_dbconnect.php';
    $cat = $_POST['cat'];
    $p_name = $_POST["p_name"];
    $desc = $_POST["desc"];
    $location = $_POST["location"];
    $price = $_POST["price"];
    $img = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));


    if ($p_name && $cat && $desc && $location && $price && $img) {
        $cat = str_replace(' ', '', $cat);
        $cat = strtolower($cat);

        $sql = "INSERT INTO `$cat` (`p_name`, `desc`, `location`, `price`, `dt`, `img`) VALUES ('$p_name', '$desc', '$location', '$price', current_timestamp(), '$img');";
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

    <title>Panel</title>

    <style>
        .form-control {
            width: 60%;
        }
    </style>
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
                    <a class="nav-link" href="/final/admin/panel.php">Home</a>
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
    
    if ($check) {
        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> Package added to respective category successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> ';
    }
    if ($check2){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> Package not added as all details should be entered.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> ';
    }
     ?>


    <div class="container my-4 d-flex justify-content-center flex-column">
        <h1 class="d-flex justify-content-center">ADD PACKAGE</h1>

        <form action="/final/admin/addpack.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Category</label>
                <select class="form-control" name="cat" id="cat">
                    <option>Family Tours</option>
                    <option>Religious Tours</option>
                    <option>Adventure Tours</option>
                    <option>Special Event Tours</option>
                    <option>Group Tours</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Package Name</label>
                <input type="text" class="form-control" name="p_name" id="p_name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Location</label>
                <input type="text" class="form-control" name="location" id="location">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input type="number" class="form-control" name="price" id="price">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" name="img" id="img">
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