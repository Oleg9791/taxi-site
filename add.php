<?php
// Проверка на заполненность всех полей данными
if (empty($_POST["name"] or $_POST["name"] = "") or empty($_POST["login"] or $_POST["login"] = "")
    or empty($_POST["password"] or $_POST["password"] = "")) {
    echo "<h1 style='font-size: 220%; text-align: center; margin-top: 100px; font-family: monospace; color: #ff0000'>Все поля должны быть заполнены !!!</h1> <br><br><br>";
    echo "<button style='margin: 100px 0px 0px 680px; height: 40px; background-color: green; text-align: center;' ><a style='text-decoration: none; color: aliceblue'  href='index.html' class='btn btn-success'>Пройти регистрацию заново</a></button>";
    die();
}
$name = $_POST["name"];
$login = $_POST["login"];
$password = $_POST["password"];
$recording = json_decode(file_get_contents("registorData.json"));
$recording[] = ['login' => $_POST["login"], 'password' => $_POST["password"], 'name' => $_POST["name"]];
file_put_contents("registorData.json", json_encode($recording));
//print_r($recording);
header("Location: thanks1.php");
