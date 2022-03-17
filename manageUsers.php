<?php
//load database connections
require_once "./config.php";
//load helper functions
require_once "./utilities/helperFunctions.php";

$users ="";

if(!isAdmin()){
	header("location: index.php");
	exit;
}



if(isset($_GET['user_id']) && isset($_GET['enable']))
{
	$user_id = $_GET["user_id"];
	$enable = $_GET['enable'];

	if(!($user_id == getUserId() && isAdmin()))
	{
		//prepare sql statement
		$sql = "UPDATE users set enabled = ? where id = ?";
		
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("ss", $enable, $user_id);

		if($stmt->execute()) //execute prepared sql
		{
			$users = $stmt->get_result(); // store result
		}
	}

	header("location: manageUsers.php");
	exit;

}


//prepare sql statement
$sql = "SELECT users.id, users.email, users.enabled FROM users ORDER BY users.id";

$stmt = $mysqli->prepare($sql);

if($stmt->execute()) //execute prepared sql
{
	$users = $stmt->get_result(); // store result
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
			<div class="row">
				<div class="col-sm-6">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">User</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
								if(empty($users) || $users->num_rows == 0)
								{
									echo "<tr><th scope=\"row\"> 1</th><td>No users found!</td><td></td></tr>";
								}
								else{
									$i=1;
									foreach($users as $user ) //iterate through the dataset we got from the database
									{
										$enable = $user['enabled'] == 1 ? "Disable" : "Enable";
										$queryString = "user_id=". $user['id'] . "&enable=" . (($user['enabled'] == 0) ? "1" : "0"); 
										echo "<tr><th scope=\"row\">" .$i ."</th><td>" . $user['email'] ."</td><td><button type=\"button\" class=\"btn btn-outline-primary\"><a href=\"manageUsers.php?" . $queryString . "\">" . $enable . "</a></button></td></tr>";
										$i++;
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>

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