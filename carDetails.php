<?php
//load helper functions
require_once './utilities/helperFunctions.php';

//load database connections
require_once "config.php";
$car ="";


if(isRequestMethodGet() && isset($_GET['car_id'])){

    $car_id = $_GET['car_id'];

    if(isLoggedIn())
	{
		$sql = "SELECT car.car_id, car.price,car.year, car.manufacturer, 
				   car.model, car.colour, car.mileage, car.fuel_type,car.transmission_type, car.description,
                   car_images.file_name, 
				   car_images.id AS image_id, wishlist.id AS wishlist_id, 
				   wishlist.user_id 
				FROM `car` 
				LEFT OUTER JOIN car_images ON car_images.car_id = car.car_id
				LEFT OUTER JOIN (select wishlist.id, wishlist.car_id, wishlist.user_id from wishlist where wishlist.user_id = " . getUserId() .") as wishlist ON wishlist.car_id = car.car_id
                WHERE car.car_id = $car_id
				ORDER BY car.car_id";
	}
	else
	{
		$sql = "SELECT car.car_id, car.price,car.year, car.manufacturer, 
						car.model, car.colour, car.mileage, car.fuel_type,car.transmission_type,car.description
                        car_images.file_name, 
						car_images.id AS image_id
				FROM `car` 
				LEFT OUTER JOIN car_images ON car_images.car_id = car.car_id 
                WHERE car.car_id = $car_id";
	}

    $stmt = $mysqli->prepare($sql);

	if($stmt->execute()) //execute prepared sql
	{
        $cars = $stmt->get_result(); // store result
        $carDetails = $cars->fetch_assoc();
	}
}
else{
    header("location: index.php");
    exit;
}
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
	<!--<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
	 crossorigin="anonymous">-->

	<link rel="icon" href="favicon.ico">
	<meta name="theme-color" content="#7952b3">


	<!--Carousel css and js-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


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
				<div class="col-sm-8 col-md-8 col-lg-8 display-6">
					<?php echo $carDetails['year'] . " " . $carDetails['manufacturer'] . " " . $carDetails['model'] . " " . $carDetails['colour']; ?>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 align-self-end display-6">
					<?php echo "$" .$carDetails['price']; ?>
				</div>
			</div>
			<div class="row border-top pt-4">
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-12">
							<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
								<!-- Carousel indicators -->
								<ol class="carousel-indicators ">
									<?php 
										$i=0;
										$active = " active";
										foreach($cars as $car)
										{
											if($i <> 0)
												$active ="";
											echo "<li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"" . $i . "\" class=\"" . $active . "\"></li>";
											$i++;
										}
									?>
								</ol>

								<!-- Wrapper for carousel items -->
								<div class="carousel-inner ">
									<?php 
										$i = 0;
										$active = " active";
										foreach($cars as $car)
										{
											if($i <> 0)
												$active ="";
											  
											echo "<div class=\"carousel-item" . $active ."\">
													<img src=\"" . IMAGE_UPLOAD_PATH . $car['file_name'] . "\" class=\"d-block w-100\" alt=\"Slide " . $i ."\">
													</div>";

											$i++;
										}
									
									?>
								</div>

								<!-- Carousel controls -->
								<a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                            	<span class="carousel-control-prev-icon"></span>
                        		</a>
								<a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                            	<span class="carousel-control-next-icon"></span>
                        		</a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<?php 
								echo $carDetails['description'];
							?>
							010 Mitsubishi RVR in Grey colour with black interior. 4WD rear camera Japanese import, economical 1800cc engine, 5 door
							SUV, dual airbags, ABS brakes, power steering, automatic. Economical and reliable, running very smoothly. Shinny exterior
							body, tidy interior. CHAIN DRIVEN ENGINE,NOT CAM BELT.

							<p>Professionally groomed. The mileage has been verified by Odometer </p>
							<p>Inspection Services. Vehicle has VTNZ compliance inspection and one year WoF. 1,2 and 3 years mechanical warranties
								available for extra cost.</p>

							<p>Finance available with no deposit. </p>
							<p>TRADE-INS Always Welcome. </p>
							<p>Independent vehicle INSPECTIONS welcome.</p>
							<p> EXTRAS - Available for additional costs:
								<ul>
									<li>Tow bar</li>
									<li>Window tints </li>
									<li>Stereo </li>
									<li>Parking sensors</li>
									<li> Bluetooth</li>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 border-white">
					<div class="row border-top ">
						<div class="col-sm-6 border-end">Engine</div>
						<div class="col-sm-6 ">4960cc, Hybrid</div>
					</div>
					<div class="row border-top">
						<div class="col-sm-6 border-end">Body</div>
						<div class="col-sm-6 ">5 Door, Sedan</div>
					</div>
					<div class="row border-top">
						<div class="col-sm-6 border-end">Odometer</div>
						<div class="col-sm-6 ">
							<?php echo $car['mileage']?>km
						</div>
					</div>
					<div class="row border-top">
						<div class="col-sm-6 border-end">Ext Colour</div>
						<div class="col-sm-6 ">
							<?php echo $car['colour']?>
						</div>

					</div>
					<div class="row border-top">
						<div class="col-sm-6 border-end">Interior</div>
						<div class="col-sm-6 ">Black, 5 Seats (Fabric)</div>
					</div>
					<div class="row border-top">
						<div class="col-sm-6 border-end">Transmission</div>
						<div class="col-sm-6 ">
							<?php echo $car['transmission_type']?>
						</div>
					</div>
					<div class="row border-top"></div>
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	 crossorigin="anonymous"></script>
	<script type="text/javascript " src="./js/carland.js "></script>
</body>

</html>