<?php
require_once ('db.php');

$login = $_POST['login'];
$password = $_POST['password'];
$passrepeat = $_POST['passrepeat'];
$email = $_POST['email'];

if(empty($login) || empty($password) || empty($password) || empty($email)){
    echo "Заполните все поля";
} else {
    if ($password !== $passrepeat) {
        echo "Пароли не совпадают";
    } else {
        $sql = $sql = "INSERT INTO `UsersDB` (login, password, email) VALUES ('$login', '$password', '$email')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Запись успешно добавлена в базу данных.";
        } else {
            echo "Ошибка при добавлении записи в базу данных: " . mysqli_error($conn);
        }
    }
}
?>





