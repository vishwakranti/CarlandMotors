

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.84.0">
      <title>Carland Motors</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
      <!-- Bootstrap core CSS -->
      <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Favicons -->
      <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
      <link rel="icon" href="http://localhost:81/carlandmotors_Vishwakranti/favicon.ico">
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
      <!-- Custom styles for this template -->
      <!--<link href="https://getbootstrap.com/docs/5.0/examples/carousel/carousel.css" rel="stylesheet">-->
   </head>
   <body>
      <!--<header class="mt-0">
         <nav class="navbar navbar-expand-md navbar-light bg-light ">
             <div class="d-flex me-auto justify-content-center ms-auto">
                 <a class="navbar-brand" href="#"><img src="./images/cars_logo.png" alt="" width="150" height="100"></a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarCollapse">
                     <ul class="navbar-nav ">
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="#">Home</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#">Link</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Another Link</a>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="/login">Login</a></li>
                                 <li><a class="dropdown-item" href="/register">Register</a></li>
                             </ul>
                         </li>
                     </ul>
                     <form class="d-flex justify-content-center me-auto">
                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                         <button class="btn btn-outline-success" type="submit">Search</button>
                     </form>
                 </div>
             </div>
         </nav>
         </header>-->
      <header class="mt-0">
         <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-center">
            <div class="d-flex">
               <a class="navbar-brand" href="#"><img src="./images/cars_logo.png" alt="" width="150" height="100"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="nav nav-pills">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Login</a>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#">User Login</a></li>
                           <li>
                              <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="#">Admin Login</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Wish list</a>
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
         <!-- Marketing messaging and featurettes
            ================================================== -->
         <!-- Wrap the rest of the page in another container to center all the content. -->
         <div class="container marketing mt-0">
            <div class="row">
               <div class="col-sm-4">
                  <div class="card">
                     <img src="./images/stock_car1.jpg" class="card-img-top" alt="..." width="125" height="250">
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card">
                     <img src="./images/stock_car2.jpg" class="card-img-top" alt="..." width="125" height="250">
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card">
                     <img src="./images/stock_car3.jpg" class="card-img-top" alt="..." width="125" height="250">
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-4">
                  <div class="card">
                     <img src="./images/stock_car4.jpg" class="card-img-top" alt="..." width="125" height="250">
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card">
                     <img src="./images/stock_car5.jpg" class="card-img-top" alt="..." width="125" height="250">
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card">
                     <img src="./images/stock_car3.jpg" class="card-img-top" alt="..." width="125" height="250">
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.container -->
         <!-- FOOTER -->
         <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2022 Carland Motors, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
         </footer>
      </main>
      <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   </body>
</html>

