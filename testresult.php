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

</body>
</html>
<?php
$q11 = "Как часто Вы пользуетесь услугами такси?";
$q22 = "По какой причине Вы чаще всего пользуетесь услугами такси?";
$q33 = "В какое время дня Вы больше всего пользуетесь услугами такси?";
$q44 = "По каким причинам Вы больше не пользуетесь услугами такси?";
$q55 = "Каким способом Вы чаще всего заказываете такси?";

$data = json_decode(file_get_contents("data.json"), true);
//print_r($data);
echo "<table border='1' class='table table-bordered border-primary'>";
echo " <th colspan='5' style='border: none'>Вопросы и ответы </th>";
foreach ($data as $row) {


    echo "<tr><td><b>$q11</b><br><i>$row[q1]</i></td><td><b>$q22</b><br><i>$row[q2]</i>></td><td><b>$q33</b><br><i>$row[q3]</i></td>
<td><b>$q44</b><br><i>$row[q4]</i>></td><td><b>$q55</b><br><i>$row[q5]</i></td></tr>";


}
//echo ($data[0]);
echo "</table>";
?>
<a class="btn btn-warning" href="index.php">Вернуться на главную страницу</a>
</body>
</html>


