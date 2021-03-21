<?php
// Проверка поля логина и пароля на наличие символов

if (empty($_POST["login"] or $_POST["login"] = "")
    and empty($_POST["password"] or $_POST["password"] = "")) {
    echo "<h1 style='font-size: 220%; text-align: center; margin-top: 100px; font-family: monospace; color: #ff0000'>Все поля должны быть заполнены !!!</h1> <br><br><br>";
    echo "<button style='margin: 100px 0px 0px 680px; height: 40px; background-color: green; text-align: center;' ><a style='text-decoration: none; color: aliceblue'  href='login.html' class='btn btn-success'>Введите верные данные</a></button>";
    die();
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

        if ($row['login'] == $_POST["login"] and $row['password'] == $_POST["password"]) {
            header("Location: correct.php");

        }
//    }
}
echo "<h1 style='font-size: 220%; text-align: center; margin-top: 100px; font-family: monospace; color: #ff0000'>Такой пользователь не существует !!!</h1> <br><br><br>";
echo "<button style='margin: 100px 0px 0px 680px; height: 40px; background-color: green; text-align: center;' ><a style='text-decoration: none; color: aliceblue'  href='login.html' class='btn btn-success'>Вернуться к регистрации</a></button>";
exit();

//}

