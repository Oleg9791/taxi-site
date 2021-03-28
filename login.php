<?php
// Проверка поля логина и пароля на наличие символов
session_start();

if (empty($_POST["login"] or $_POST["login"] = "")
    or empty($_POST["password"] or $_POST["password"] = "") or empty($_POST["name"] or $_POST["name"] = "")) {
//    echo "<h1 style='font-size: 220%; text-align: center; margin-top: 100px; font-family: monospace; color: #ff0000'>Все поля должны быть заполнены !!!</h1> <br><br><br>";
//    echo "<button style='margin: 100px 0px 0px 680px; height: 40px; background-color: green; text-align: center;' ><a style='text-decoration: none; color: aliceblue'  href='index.php' class='btn btn-success'>Введите верные данные</a></button>";
    header("Location: index.php");

//    die();
}


//$login = $_POST["login"];
//$password = $_POST["password"];

// Проверка на корректность логина и пароля в базе данных
//$recording = json_decode(file_get_contents("registorData.json"), true);
//print_r($recording);
$recording = json_decode(file_get_contents("registorData.json"), true);

//print_r($recording);
//for ($i=0; $i <= count($recording); $i++) {

foreach ($recording as $row) {

    if ($row['name'] == $_POST["name"] and $row['login'] == $_POST["login"] and $row['password'] == $_POST["password"]) {
        $_SESSION['username'] = $_POST["name"];
        header("Location: correct.php");

    }
    if ($_POST['login'] == "Admin" and $_POST['password'] == "admin") {

        header("Location: testresult.php");
    }
//    if ($row['name'] != $_POST["name"] and $row['login'] != $_POST["login"] and $row['password'] != $_POST["password"]) {
//        header("Location: index.php");
//    }

}
//        echo "<h1 style='font-size: 220%; text-align: center; margin-top: 100px; font-family: monospace; color: #ff0000'>Такой пользователь не существует !!!</h1> <br><br><br>";
//        echo "<button style='margin: 100px 0px 0px 680px; height: 40px; background-color: green; text-align: center;' ><a style='text-decoration: none; color: aliceblue'  href='login.html' class='btn btn-success'>Вернуться к регистрации</a></button>";

//exit();
//header("Location: index.php");



