<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <?php
            // Проверка на хотя бы одного невыбранного варианта ответа на вопрос и возможностью вернуться к опросу
            if (empty($_POST["q1"]) or empty($_POST["q2"]) or empty($_POST["q3"]) or empty($_POST["q4"])
                or empty($_POST["q5"])) {
                echo "<h1 style='font-size: 220%; margin-top: 100px; font-family: monospace; color: #ff0000'>Выберите варианты ответа для всех вопросов </h1><br> <a class='btn btn-secondary' href='opros.php'>Вернуться к опросу</a>";
            }
            ?>

        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>

