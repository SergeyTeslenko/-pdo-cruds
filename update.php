<?php

$data = [
    "id" => $_GET['id'],
    "first_name" => $_POST['first_name'],
    "last_name" => $_POST['last_name'],
    "email" => $_POST['email'],
    "gender" => $_POST['gender'],
];

$pdo = new PDO("mysql:host=localhost; dbname=tutorial", "root", "");

$sql = "UPDATE crud SET first_name=:first_name, last_name=:last_name, email=:email, gender=:gender WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->execute($data);


header("location: /");

