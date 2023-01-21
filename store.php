<?php
$pdo = new PDO("mysql:host=localhost; dbname=tutorial", "root", "");

$sql =" INSERT INTO crud( first_name, last_name, email, gender) VALUES (:first_name,:last_name,:email,:gender)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":first_name", $_POST['first_name']);
$statement->bindParam(":last_name", $_POST['last_name']);
$statement->bindParam(":email", $_POST['email']);
$statement->bindParam(":gender", $_POST['gender']);
$statement = $statement->execute();


header("location: /");exit;

?>