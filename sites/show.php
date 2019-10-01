<?php
	// Query Data from DB
require_once('function.php');
$mysqli = connectdb();

// Define table name for pagination
$table_name = 'regis';

// include pagination
include('pagination.php');

// Get Keyword form url parameter
$keyword = '';
if (!empty($_GET['key'])) {
	$keyword = $_GET['key'];
}

// Query Data from DB to show
if ($keyword == '') {
	$q = "SELECT *
		  FROM  $table_name
		  ORDER BY id ASC
		  LIMIT $offset, $no_of_records_per_page";
}else {
	$q = "SELECT *
  		  FROM  $table_name
  		  WHERE name LIKE '%$keyword%'
		  ORDER BY id ASC
		  LIMIT $offset, $no_of_records_per_page";
}

$result = $mysqli->query($q);
$count = ($page > 1) ? $offset + 1 : 1 ;

?>
<!-- Javascript for search from submit -->
<script language="javascript" type="text/javascript">
	function submitSearch() {
		var url = window.location.href;
		var base = url.split("&key=");
		if($("#firstname").val().length != 0) {
			var keyword = '&key='+$("#firstname").val();
			window.location.replace(base[0]+keyword);
		}else {
			window.location.replace(base[0]);
		}
	}
</script>

<header class="jumbotron my-4">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title">All Register List</h5>
		</div>
		<div class="card-body">
			<form class="form-inline" id="search">
				<div class="form-group mb-2">
					<label for="staticEmail2" class="sr-only">Email</label>
					<input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Search For Register">
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<label for="firstname" class="sr-only">Firstname</label>
					<input type="text" class="form-control" name="keys" id="firstname" placeholder="Firstname" value="<?=$keyword?>">
				</div>

				<button type="button" class="btn btn-primary mb-2" onClick='submitSearch()'>Search</button>

			</form>
			<br />

			<table class="table table-striped">
				<thead class="thead-light">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Prefix</th>
						<th scope="col">First</th>
						<th scope="col">Last</th>
						<th scope="col">Phone</th>
						<th scope="col">Mail</th>
						<th scope="col">Gender</th>
						<th scope="col">Date</th>
						<?php if (isset($_SESSION['user'])): ?>
							<th scope="col">Operation</th>
						<?php endif ?>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = $result->fetch_object()) { ?>
						<?php
						if ($row->gender == '0') {
							$row->gender = 'Male';
						}else {
							$row->gender = 'Female';
						}

						if ($row->prefix == 0) {
							$row->prefix = 'Mr.';
						} elseif ($row->prefix == 1) {
							$row->prefix = 'Miss';
						} else {
							$row->prefix = 'Mrs.';
						}
						?>
						<tr>
							<th scope="row"><?=$count?></th>
							<td><?=$row->prefix?></td>
							<td><?=$row->name?></td>
							<td><?=$row->lname?></td>
							<td><?=$row->phone?></td>
							<td><?=$row->email?></td>
							<td><?=$row->gender?></td>
							<td><?=date("d/m/y", $row->date_regis)?></td>

							<?php if (isset($_SESSION['user'])): ?>
								<td>
									<a href="?q=edit&id=<?=$row->id?>">Edit</a> :
									<a href="./sites/delete.php?id=<?=$row->id?>">Delete</a>
								</td>
							<?php endif ?>

						</tr>
						<?php $count += 1; ?>
					<?php } ?>
				</tbody>
			</table>

			<!-- include pagination -->
			<?php include('pagination_footer.php'); ?>

		</div>
	</div>
</header>
