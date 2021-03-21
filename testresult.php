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


    echo "<tr><td>$q11<br> $row[q1]</td><td> $q22<br>$row[q2]</td><td>$q33<br>$row[q3]</td>
<td>$q44<br>$row[q4]</td><td>$q55<br>$row[q5]</td></tr>";


}
//echo ($data[0]);
echo "</table>";



