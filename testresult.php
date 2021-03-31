<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">
            <?php

            $q11 = "Как часто Вы пользуетесь услугами такси?";
            $q22 = "По какой причине Вы чаще всего пользуетесь услугами такси?";
            $q33 = "В какое время дня Вы больше всего пользуетесь услугами такси?";
            $q44 = "По каким причинам Вы больше не пользуетесь услугами такси?";
            $q55 = "Каким способом Вы чаще всего заказываете такси?";
            $q66 = "Ваше имя?";
            $data = json_decode(file_get_contents("data.json"), true) ;

//         $data1=   'time' => date("d-M-Y (l) H-i-s");
//            print_r($data);
            echo "<table id='result' class='table table-bordered border-primary'>";
            echo " <th colspan='5' style='border: none; font-family:cursive ; font-size: larger' >Вопросы и ответы </th>";
            foreach ($data as $row) {


                echo "<tr><td><b>$q11</b><br><i style='color: #ec0542'>$row[q1]</i></td><td><b>$q22</b><br><i style='color: #ec0542'>$row[q2]</i>></td><td><b>$q33</b><br><i style='color: #ec0542'>$row[q3]</i></td>
<td><b>$q44</b><br><i style='color: #ec0542'>$row[q4]</i>></td><td><b>$q55</b><br><i style='color: #ec0542'>$row[q5]</i></td><td><b>$q66</b><br><i style='color: #064ef5'>$row[username]</i></td></tr>";


            }
            //echo ($data[0]);
            echo "</table>";
            ?>
            <a id="test" class="btn btn-warning" href="index.php">Вернуться на главную страницу</a>

        </div>
        <div class="col-3">

        </div>
    </div>
</div>
</body>
</html>


