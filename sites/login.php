<?php
require_once('function.php');
login();
?>
<header class="jumbotron my-4">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Log in to Administraion System</h5>
		</div>
		<div class="card-body">
			<form action="./sites/login.php" method="post">
				<div class="form-group">
					<label for="formGroupExampleInput">User name</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Example username" required>
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput2">password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</header>
