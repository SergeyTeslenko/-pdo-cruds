<?php

require 'database/QueryBuilder.php';
$QueryBuilder = new QueryBuilder();

$data = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'gender' => $_POST['gender'],
];

$QueryBuilder->store("crud", $data);


header("location: /");exit;

?>