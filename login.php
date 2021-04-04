<?php
// Проверка поля логина и пароля на наличие символов
session_start();

if (empty($_POST["login"]) or $_POST["login"] == "" or empty($_POST["password"]) or $_POST["password"] == "") {

    header("Location: index.php");
    die();
}
// Проверка на корректность логина и пароля в базе данных
//print_r($recording);
$recording = json_decode(file_get_contents("registorData.json"), true);
//print_r($recording);

foreach ($recording as $row) {
    //echo ($row['login']." ".$row['password']."<br>");
    if ($row['login'] == $_POST["login"] and $row['password'] == $_POST["password"]) {
          $_SESSION['username'] = $_POST["name"];
        header("Location: correct.php");
         die();
    }
    if ($_POST['login'] == "Admin" and $_POST['password'] == "admin") {

        header("Location: testresult.php");
        die();
    }
}
header("Location: index.php");





