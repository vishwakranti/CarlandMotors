<?php
//load helper functions
require_once './utilities/helperFunctions.php';

//load database connections
require_once "config.php";
$cars ="";

if(isRequestMethodGet())
{
	//prepare sql statement
	$sql = "";
	if(isLoggedIn())
	{
		$sql = "SELECT car.car_id, car.price,car.year, car.manufacturer, 
				   car.model, car.colour, car_images.file_name, 
				   car_images.id AS image_id, wishlist.id AS wishlist_id, 
				   wishlist.user_id 
				FROM `car_images` 
				INNER JOIN car ON car.car_id = car_images.car_id
				LEFT OUTER JOIN (select wishlist.id, wishlist.car_id, wishlist.user_id from wishlist where wishlist.user_id = " . getUserId() .") as wishlist ON wishlist.car_id = car.car_id
				ORDER BY car.car_id";
	}
	else
	{
		$sql = "SELECT car.car_id, car.price,car.year, car.manufacturer, 
						car.model, car.colour, car_images.file_name, 
						car_images.id AS image_id
				FROM `car_images` 
				INNER JOIN car ON car.car_id = car_images.car_id ";
	}
	
	$stmt = $mysqli->prepare($sql);

	if($stmt->execute()) //execute prepared sql
	{
        $cars = $stmt->get_result(); // store result
	}

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

			<?php //php block of code to show the cars in the database

			if(empty($cars) || $cars->num_rows == 0)
			{
				echo "<div class=\"row justify-content-center\"> <div class=\"col-4\"> <h1 class=\"display-4\">No cars found!</h1></div></div>";
			}
			else if ($cars->num_rows > 0)
			{
				$i=0; //initialize the counter
				
				foreach($cars as $car ) //iterate through the dataset we got from the database
				{
					if($i == 0) //open a row 
						echo '<div class="row">';

					//add car details
					echo "<div class=\"col-sm-4\">
							<div class=\"card\">
								<div class=\"wishListDiv\">";
					if(isLoggedIn()){

						if(is_null($car['wishlist_id']))
						{
							echo "<a href=\"addWishlist.php?car_id=" . $car['car_id'] . "&action=" . "add". "\" class=\"wishListAnchor\">
										<img src=\"./images/notInWishlist.png\" class=\"float-end\" alt=\"add to wishlist\" width=\"25px\" height=\"25px\" data-image-id=\"" .$car['car_id']. "\">
										<span class=\"float-end\">Add To Wishlist</span>
									</a>";
						}
						else
						{
							echo "<a href=\"addWishlist.php?car_id=" . $car['car_id'] . "&action=" . "remove". "\" class=\"wishListAnchor\">
										<img src=\"./images/addedToWishlist.png\" class=\"float-end\" alt=\"remove from wishlist\" width=\"25px\" height=\"25px\" data-image-id=\"" .$car['car_id']. "\">
										<span class=\"float-end\">Remove From Wishlist</span>
									</a>";

						}
					}
					else{
						echo "<a href=\"login.php\" class=\"wishListAnchor\">
										<img src=\"./images/notInWishlist.png\" class=\"float-end\" alt=\"add to wishlist\" width=\"25px\" height=\"25px\" data-image-id=\"" .$car['car_id']. "\">
										<span class=\"float-end\">Add To Wishlist</span>
									</a>";
					}
									
					echo	  "</div>
					   	 		<img src=\"./images/" . $car['file_name'] . "\" class=\"card-img-top\" alt=\"...\" width=\"125\" height=\"250\">
					 	 		<div class=\"card-body\">
						 			<h5 class=\"card-title\">" . $car['year'] . " " . $car['manufacturer'] . " " . $car['model'] . " " .  $car['colour'] . "</h5>
						 			<p><strong>$" . $car['price'] . "</strong></p>
						 			<a href=\"#\" class=\"btn btn-primary\">More Info</a>
								</div>
							</div>
						 </div>";

					if($i == 2)
						echo '</div>';

					
					$i++; //increment the counter

					
					if($i > 2) //reset the counter
						$i=0;

				}

				//close the row if it hasn't been closed
				if($cars->num_rows % 3 <> 0){
					echo '</div>';
				}
			}
		 ?>
		</div>
		<!-- /.container -->
		<!-- FOOTER -->
		<footer class="container mt-0">
			<p class="float-end"><a href="#">Site designed by Vishwakranti Suryawanshi</a></p>
			<p>&copy; 2022 Carland Motors Inc. </p>
		</footer>
	</main>
	<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
	 crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/carland.js"></script>
</body>

</html>