<?php
$id = $_GET['id'];

$pdo = new PDO("mysql:host=localhost; dbname=tutorial", "root", "");

$sql = "DELETE FROM crud WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id",$id);
$statement->execute();


header("location: /");

?>