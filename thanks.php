<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body id="thanks">
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <h1 id="than"> <?= $_SESSION['username']." Благодарим Вас за участие в опросе!!!" ?> </h1>
            <a class="btn btn-warning" href="index.php">Вернуться на главную страницу</a> <br><br>

        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>