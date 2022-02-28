<?php
//load database connections
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $mailTo = "vishwakrantisuryawanshi@gmail.com";

    $headers = "From: " . $mailTo;
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
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
	<!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
	 crossorigin="anonymous">
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

	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
</head>

<body>
	<header class="mt-0">
		<?php
		include './partials/navbar.php';
		?>
	</header>
	<main>

		<div class="container mt-3">
			<section id="contact">
				<div class="container">
					<div class="well well-sm">
						<h3><strong>Contact Us</strong></h3>
					</div>

					<div class="row">
						<div class="col-md-7">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50468.639794256305!2d175.21123629899225!3d-37.75979811901495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d6d226e2075607d%3A0x99c415b112bbe430!2sHamilton%203200!5e0!3m2!1sen!2snz!4v1646030156191!5m2!1sen!2snz"
							 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>

						<div class="col-md-5">
							<h4><strong>Get in Touch</strong></h4>
							<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
								<div class=" form-group ">
									<label>Name</label>
									<input type="text " class="form-control " name=" Name" value=" " placeholder="Name ">
								</div>
								<div class="form-group ">
									<label>Email</label>
									<input type="email " class="form-control " name="Email" value=" " placeholder="Email ">
								</div>
								<div class="form-group ">
									<label>Phone</label>
									<input type="tel " class="form-control " name="Phone" value=" " placeholder="Phone ">
								</div>
								<div class="form-group ">
									<textarea class="form-control " name="Message" rows="3 " placeholder="Message "></textarea>
								</div>
								<button class="btn btn-default " type="submit " name="Submit">
                                            <i class="fa fa-paper-plane-o " aria-hidden="true "></i> Submit</button>
							</form>
						</div>
					</div>
				</div>
			</section>

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
</body>

</html>