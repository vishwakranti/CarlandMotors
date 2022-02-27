<?php
// Initialize the session
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$logged_in = false;
$role = "normal";

if(isset($_SESSION["userEmail"]) && !empty($_SESSION['userEmail']))
{
	$logged_in = true;	
}

$car_manufacturers ="";

if($_SERVER["REQUEST_METHOD"] == "GET")
{

	//prepare sql statement
	$sql = "SELECT DISTINCT car.manufacturer FROM car order by manufacturer asc";
	$stmt = $mysqli->prepare($sql);

	if($stmt->execute())
	{
		// store result
        $car_manufacturers = $stmt->get_result();
	}

}

?>
<nav class="navbar navbar-expand-md navbar-light bg-dark justify-content-center">
	<div class="d-flex">
		<a class="navbar-brand" href="."><img src="./images/cars_logo.png" alt="" width="200" height="100" alt="Carland Motors"></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
		 aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>

		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="./">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="./aboutUs.php">About Us</a>

				</li>
				<?php
				if(empty($logged_in))
				{
					echo '<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="login.php">Login</a></li>
								<li><a class="dropdown-item" href="register.php">Register</a></li>
							</ul>
						  </li>';
				}
				?>

				<?php 
				if(!empty($car_manufacturers)){
					echo '<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vehicles</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">';
					
					foreach($car_manufacturers as $manufacturer)
					{
						echo "<li><a class=\"dropdown-item\" href=\"search.php?car=" .$manufacturer['manufacturer'] . "\">". $manufacturer['manufacturer'] . "</a></li>";
					}
					echo '	</ul>
						  </li>';
				}
				?>
				<?php
				if(!empty($logged_in))
				{
					echo '<li class="nav-item"> <a class="nav-link" href="wishList.php">Wish list</a></li>';
				}
				?>


				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="./">Contact</a>
				</li>
				<li class="nav-item">
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search Cars" aria-label="Search" id="searchCarsTxtBx">
						<button class="btn btn-outline-success" type="submit" id="searchCars">Search</button>
					</form>
				</li>

				<?php
				if(!empty($logged_in))
				{
					echo '<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a></li>';
				}
				?>
			</ul>
		</div>
	</div>
</nav>