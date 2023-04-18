<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: admin.php");
    exit;
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



    <table class="table table-hover table-dark mx-auto my-5" style="width: 1100px;">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Category</th>
                <th scope="col">Pacakge</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Booking Date</th>
            </tr>
        </thead>
        <tbody class="table-light">
        <?php
       
        include '../loginsystem/partials/_dbconnect.php';
        $sql = "SELECT * FROM `book`";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            
            $sno = $row['sno'];
            $username = $row['username'];
            $category = $row['category'];
            $p_name = $row['p_name'];
            $name = $row['name'];
            $age = $row['age'];
            $gender = $row['gender'];
            $email = $row['email'];
            $phone = $row['phone'];
            $other = $row['other'];
            $dt = $row['dt'];
            $st_date = $row['st_date'];
            $en_date = $row['en_date'];

        echo '<tr>
      <th scope="row" class="text-dark">'.$username.'</th>
      <td class="text-dark">'.$category.'</td>
      <td class="text-dark">'.$p_name.'</td>
      <td class="text-dark">'.$name.'</td>
      <td class="text-dark">'.$age.'</td>
      <td class="text-dark">'.$gender.'</td>
      <td class="text-dark">'.$email.'</td>
      <td class="text-dark">'.$phone.'</td>
      <td class="text-dark">'.$other.'</td>
      <td class="text-dark">'.$st_date.'</td>
      <td class="text-dark">'.$en_date.'</td>
      <td class="text-dark">'.$dt.'</td>
        </tr>';
        }
        
        

        ?>
         </tbody>
         </table>



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