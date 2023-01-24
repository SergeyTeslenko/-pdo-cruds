<?php
require 'database/QueryBuilder.php';
$id = $_GET['id'];
$QueryBuilder = new QueryBuilder();

$QueryBuilder->delete($id);



header("location: /");

?>