

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Carland Motors - Find the best car for you!">
      <meta name="author" content="Vishwakranti Suryawanshi">
      <title>Carland Motors</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
      <!-- Bootstrap core CSS -->
      <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="icon" href="favicon.ico">
      <meta name="theme-color" content="#7952b3">
      <style>
         .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
         }
         @media (min-width: 768px) {
         .bd-placeholder-img-lg {
         font-size: 3.5rem;
         }
         .mt-0 {
         margin-top: 20px !important;
         }
         }
      </style>
   </head>
   <body>
      <header class="mt-0">
         <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-center">
            <div class="d-flex">
               <a class="navbar-brand" href="."><img src="./images/cars_logo.png" alt="" width="200" height="100" alt="Carland Motors"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="nav nav-pills">
                     <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./">Home</a>
                     </li>
                     <!--<li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                     </li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="signup.php">Register</a></li>
                        </ul>
                    </li>
                     
                     <li class="nav-item">
                        <a class="nav-link" href="wishList.php">Wish list</a>
                     </li>
                     <li class="nav-item">
                        <form class="d-flex">
                           <input class="form-control me-2" type="search" placeholder="Search Cars" aria-label="Search">
                           <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <main>
         <div class="container mt-0">
         <div class="row justify-content-center">
            <form class="col-sm-4 shadow p-3 mb-5 bg-body rounded">
            <div class="col text-center">
            <div class="mb-3">Log into your account</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <!--<div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>-->
            <!--<div class="mb-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>-->
            <div class="col text-center">
            <button type="submit" class="btn btn-primary justify-content-center">Submit</button>
            </div>
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

