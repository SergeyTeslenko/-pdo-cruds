<?php
require 'database/QueryBuilder.php';

$QueryBuilder = new  QueryBuilder();

$user = $QueryBuilder->show();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf - 8">
    <meta name="viewport" content="width = device - width, initial - scale = 1">
    <title>PHP Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg justify-content-center bg-light fs-3 mb-5">
    PHP CRUD APPLICATION
</nav>
<div class="container">
    <div class="text-center mb-4">
        <h3> Created User </h3>
        <p class="text-muted"> You will se hear new information about created user </p>
    </div>
</div>
<div class="container d-flex justify-content-center ">
    <div class="row">
        <p>Id number: <?= $user['id'] ?> </p>
        <p>First name: <?= $user['first_name'] ?></p>
        <p> <?= $user['last_name'] ?></p>
        <p><?= $user['email'] ?></p>
        <p><?= $user['gender'] ?></p>

        </p>

    </div>
    <div>
        <a href="/ " class="btn btn-secondary">Go back</a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
