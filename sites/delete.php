<?php
require_once('function.php');

auth();

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    delete_regis($id);
}
?>
