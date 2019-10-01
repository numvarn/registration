<?php
// Pagination
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}else {
    $page = 1;
}

$no_of_records_per_page = 5;
$offset = ($page-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT * FROM  $table_name";
$result = $mysqli->query($total_pages_sql);

$total_rows = mysqli_num_rows($result);
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM table LIMIT $offset, $no_of_records_per_page";

?>
