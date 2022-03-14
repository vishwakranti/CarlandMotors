<?php
require_once './utilities/helperFunctions.php';
include "config.php";

// check if the member is logged in
if (isLoggedIn()) {
    header("Location: login.php");
} else {

    // get car id from URL
    $car_id = $_GET["car_id"];
    $user_id = $_SESSION['id'];

    // check for duplicate car ID 
    $query = "SELECT * FROM vehicle_wishlist WHERE car_id = '$car_id' && user_id  = '$user_id'  ";
    $result = mysqli_query($link, $query);
    if (!$row = mysqli_fetch_array($result)) { // there is no matching record
        // SQL for INSERT
        $query = "INSERT INTO vehicle_wishlist (car_id, user_id) VALUES ('$car_id', '$user_id')";
        mysqli_query($link, $query);
    }

    // redirect to WishList.php
    header("Location: WishList.php");
} // end of if
?>
<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Carland Motors - Find the best car for you!">
    <meta name="author" content="Vishwakranti Suryawanshi">
    <title>Carland Motors</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <style>
        @media (min-width: 768px) {
            .mt-0 {
                margin-top: 20px !important;
            }
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <header class="mt-0">
        <?php
        include './partials/navbar.php';
        ?>
    </header>
    <main>
        <div class="container mt-0">
            <div class="row justify-content-center">
                <form class="col-sm-4 shadow p-3 mb-5 bg-body rounded" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="col text-center">
                        <div class="mb-3">Log into your account</div>
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailHelp">
                        <span class="error">
                            <?php echo $userEmail_error; ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="userPassword">
                        <span class="error">
                            <?php echo $userPassword_error; ?>
                        </span>
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary justify-content-center">Submit</button>
                    </div>
                    <span class="error">
                        <?php echo $login_error; ?>
                    </span>
                </form>
            </div>
        </div>
        <!-- /.container -->
        <!-- FOOTER -->
        <footer class="container mt-0">
            <p class="float-end"><a href="#">Site designed by Vishwakranti Suryawanshi</a></p>
            <p>&copy; 2022 Carland Motors Inc. </p>
        </footer>
    </main>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>