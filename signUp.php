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
				<section class="vh-100" style="background-color: #eee;">
					<div class="container">
						<div class="row d-flex justify-content-center align-items-center h-100">
							<div class="col-lg-12 col-xl-11">
								<div class="card text-black" style="border-radius: 25px;">
									<div class="card-body p-md-5">
										<div class="row justify-content-center">
											<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

												<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

												<form class="mx-1 mx-md-4">

													<div class="d-flex flex-row align-items-center mb-4">
														<i class="fas fa-user fa-lg me-3 fa-fw"></i>
														<div class="form-outline flex-fill mb-0">
															<input type="text" id="form3Example1c" class="form-control" />
															<label class="form-label" for="form3Example1c">Your Name</label>
														</div>
													</div>

													<div class="d-flex flex-row align-items-center mb-4">
														<i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
														<div class="form-outline flex-fill mb-0">
															<input type="email" id="form3Example3c" class="form-control" />
															<label class="form-label" for="form3Example3c">Your Email</label>
														</div>
													</div>

													<div class="d-flex flex-row align-items-center mb-4">
														<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
														<div class="form-outline flex-fill mb-0">
															<input type="password" id="form3Example4c" class="form-control" />
															<label class="form-label" for="form3Example4c">Password</label>
														</div>
													</div>

													<div class="d-flex flex-row align-items-center mb-4">
														<i class="fas fa-key fa-lg me-3 fa-fw"></i>
														<div class="form-outline flex-fill mb-0">
															<input type="password" id="form3Example4cd" class="form-control" />
															<label class="form-label" for="form3Example4cd">Confirm your password</label>
														</div>
													</div>

													<!--<div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>-->

													<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
														<button type="button" class="btn btn-primary btn-lg">Register</button>
													</div>

												</form>

											</div>
											<!--<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

              </div>-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
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
</body>

</html>