<?php
	require_once('function.php');
	register();
?>

<header class="jumbotron my-4">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Register Profile</h5>
		</div>
		<div class="card-body">
			<form action="./sites/regis.php" method="post">
				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0">Gender</legend>
						<div class="col-sm-10">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="gender1" value="male" checked>
								<label class="form-check-label" for="gender1">
									Male
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="gender2" value="femal">
								<label class="form-check-label" for="gender2">
									Female
								</label>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0">Name Prefix</legend>
						<div class="col-sm-10">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="prefix" id="prefix1" value="mr" checked>
								<label class="form-check-label" for="prefix1">
									Mr.
								</label>
							</div>

							<div class="form-check">
								<input class="form-check-input" type="radio" name="prefix" id="prefix2" value="miss">
								<label class="form-check-label" for="prefix2">
									Miss
								</label>
							</div>

							<div class="form-check">
								<input class="form-check-input" type="radio" name="prefix" id="prefix3" value="mrs">
								<label class="form-check-label" for="prefix3">
									Mrs
								</label>
							</div>
						</div>
					</div>
				</fieldset>

				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">First Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" id="name" placeholder="First Name" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="lname" class="col-sm-2 col-form-label">Last Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPhone" class="col-sm-2 col-form-label">Phone Number</label>
					<div class="col-sm-10">
						<input type="phone" class="form-control" name="phone" id="inputPhone" placeholder="Phone" required>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</header>
