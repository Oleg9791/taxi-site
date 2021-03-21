<?php
// Проверка на выбор вариантов ответа для всех вопросов,при соблюдении условия происходит запись ответов
// пользователя в соответствующую таблицу базы данных
if (!empty($_POST["q1"]) and !empty($_POST["q2"]) and !empty($_POST["q3"]) and !empty($_POST["q4"])
    and !empty($_POST["q5"])) {
    $recording = json_decode(file_get_contents("data.json"), true);
    $recording[] = ['q1' => $_POST["q1"], 'q2' => $_POST["q2"], 'q3' => $_POST["q3"],
        'q4' => $_POST["q4"], 'q5' => $_POST["q5"]];
    file_put_contents("data.json", json_encode($recording));
//    print_r($recording);
    // Перенаправление на завершение опроса с благодарностью и перенаправлением на главную страницу
    header("Location: thanks.html");

} else {
    // Перенаправление в случае хотя бы одного неотвеченного вопроса
    header('Location: condition.php');
}


