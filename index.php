<?php
require 'database/QueryBuilder.php';
$QueryBuilder = new QueryBuilder();

$users = $QueryBuilder->all();
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

    <a href="add-new.php" class="btn btn-dark mb-5">Add New</a>

    <table class="table table-hover text-center">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($users as $user): ?>

                <td> <?= $user['id'] ?> </td>
                <td><?= $user['first_name'] ?> </td>
                <td><?= $user['last_name'] ?> </td>
                <td><?= $user['email'] ?> </td>
                <td><?= $user['gender'] ?> </td>

        <td>
            <a href="show.php?id=<?= $user['id']?>" class="btn btn-info mb-5">Show</a>
            <a href="edit.php?id=<?= $user['id']?>" class="btn btn-success mb-5">Edit</a>
            <a href="delete.php?id=<?= $user['id']?>" class="btn btn-danger mb-5">Delete</a>
        </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>