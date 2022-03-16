<?php
//load helper functions
require_once './utilities/helperFunctions.php';

//load database connections
require_once "config.php";
$cars ="";
$cars_array[] = new stdClass;

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
	<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
	 crossorigin="anonymous">
	<link rel="icon" href="favicon.ico">
	<meta name="theme-color" content="#7952b3">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	 crossorigin="anonymous"></script>

	<style>
		@media (min-width: 768px) {
			.mt-0 {
				margin-top: 20px !important;
			}
		}

		.wishListDiv span {
			display: none;
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
		}

		.wishListDiv:hover span {
			display: block;
			position: relative;
			right: 5px;
			font-size: 12px;
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
			<div class="row">
				<div class="col-sm-8 col-md-8 col-lg-8"> fdfdfdf</div>
				<div class="col-sm-4 col-md-4 col-lg-4">dfdffdfdf </div>
			</div>
			<div class=" row ">
				<div class="col-sm-8 ">
					<div id="myCarousel " class="carousel slide " data-bs-ride="carousel ">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators ">
							<li data-bs-target="#myCarousel " data-bs-slide-to="0 " class="active "></li>
							<li data-bs-target="#myCarousel " data-bs-slide-to="1 "></li>
							<li data-bs-target="#myCarousel " data-bs-slide-to="2 "></li>
						</ol>

						<!-- Wrapper for carousel items -->
						<div class="carousel-inner ">
							<div class="carousel-item active ">
								<img src="./images/stock_car1.jpg " class="d-block w-100 " alt="Slide 1 ">
							</div>
							<div class="carousel-item ">
								<img src="./images/stock_car2.jpg " class="d-block w-100 " alt="Slide 2 ">
							</div>
							<div class="carousel-item ">
								<img src="./images/stock_car3.jpg " class="d-block w-100 " alt="Slide 3 ">
							</div>
						</div>

						<!-- Carousel controls -->
						<a class="carousel-control-prev " href="#myCarousel " data-bs-slide="prev ">
                            <span class="carousel-control-prev-icon "></span>
                        </a>
						<a class="carousel-control-next " href="#myCarousel " data-bs-slide="next ">
                            <span class="carousel-control-next-icon "></span>
                        </a>
					</div>
				</div>
				<div class="col-sm-4 ">
					<div class="row ">
						<div class="col-sm-6 ">Engine</div>
						<div class="col-sm-6 ">4960cc, Hybrid</div>
					</div>
					<div class="row ">
						<div class="col-sm-6 ">Body</div>
						<div class="col-sm-6 ">5 Door, Sedan</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
		<!-- FOOTER -->
		<footer class="container mt-0 ">
			<p class="float-end "><a href="# ">Site designed by Vishwakranti Suryawanshi</a></p>
			<p>&copy; 2022 Carland Motors Inc. </p>
		</footer>
	</main>
	<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM "
	 crossorigin="anonymous "></script>
	<script type="text/javascript " src="./js/carland.js "></script>
</body>

</html>