<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Registration System - Prototype of Web Application using PHP 7</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>
	<?php
	$path = '';
	if (!empty($_GET["q"])) {
		$path = $_GET["q"];
	}
	?>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="./">Registration System</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="./">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?q=regis">Registration</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?q=show">All Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
					<li class="nav-item">
						<?php if (isset($_SESSION["user"])): ?>
							<a class="nav-link" href="./sites/logout.php">Logout</a>
							<?php else: ?>
								<a class="nav-link" href="?q=login">Login</a>
							<?php endif ?>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Page Content -->
		<div class="container">
			<?php
				if ($path == "") {
					include("./sites/front.php");
				}
				else if ($path == "login") {
					include("./sites/login.php");
				}
				else if ($path == "regis") {
					include("./sites/regis.php");
				}
				else if ($path == "edit") {
					if (!empty($_GET["id"])) {
						$id = $_GET["id"];
						include("./sites/regis_edit.php");
					}else {
						include("./sites/regis.php");
					}
				}
				else if ($path == "show") {
					include("./sites/show.php");
				}
			?>
		</div>
		<!-- /.container -->

		<!-- Footer -->
		<footer class="py-5 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
			</div>
			<!-- /.container -->
		</footer>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	</body>

	</html>
