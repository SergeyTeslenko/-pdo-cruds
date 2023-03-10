<?php
require 'database/QueryBuilder.php';
$QueryBuilder = new QueryBuilder();

$user = $QueryBuilder->edit();


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
        <h3> Edit User Information</h3>
        <p class="text-muted"> Click update after any information </p>
    </div>
</div>
<div class="container d-flex justify-content-center ">
    <form action="update.php?id=<?= $user['id'] ?>" method="post">
        <div class="row">

            <div class="col">
                <label for=""> First Name:</label>
                <input type="text" class="form-control" name="first_name" value="<?= $user['first_name'] ?> ">
            </div>

            <div class="col">
                <label for=""> Last Name:</label>
                <input type="text" class="form-control" name="last_name" value="<?= $user['last_name'] ?> ">
            </div>

            <div class=" mb-4">
                <label for=""> Email:</label>
                <input type="text" name="email" class="form-control" value="<?= $user['email'] ?> ">
            </div>

            <div class="form-group mb-4">
                <label> Gender:</label>

                <input type="radio" class="form-check-input" name="gender" id="male" value="<?php echo $user['gender'] ?>">
                <label for="male" class="form-input-label"> Male</label>

                <input type="radio" name="gender" class="form - check - input" id="female" value="<?php echo $user['gender'] ?>">
                <label for="female" class="form-input-label"> Female</label>

            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">Edit</button>
                <a href="index.php" class="btn btn-danger"> Cancel</a>
            </div>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>