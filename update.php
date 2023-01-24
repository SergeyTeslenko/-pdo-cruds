<?php
require 'database/QueryBuilder.php';
$Querybuilder = new QueryBuilder();

$data = [
    "id" => $_GET['id'],
    "first_name" => $_POST['first_name'],
    "last_name" => $_POST['last_name'],
    "email" => $_POST['email'],
    "gender" => $_POST['gender'],
];


$Querybuilder ->update("crud", $data);

header("location: /");

