<?php
require_once "../../header.php";
require_once "../../database/db.php";
unset($_SESSION['sucesMsg']);


//очистка данных
$email     = trim(htmlspecialchars(stripslashes($_POST['email'])));
$username  = trim(htmlspecialchars(stripslashes($_POST['username'])));
$password  = trim(htmlspecialchars(stripslashes($_POST['password'])));


//проверяем на существование пользователя
$results = $mysql->query("SELECT * FROM `myguests` WHERE `username` = '$username' OR `email` = '$email'");
$myrow   = $results->fetch(PDO::FETCH_ASSOC);
if (!empty($myrow['id'])) {
    if ($myrow['username'] === $username) {
        $_SESSION['err1Msg']  = "Извините, введёный вами логин уже зарегистрирован, введите другой логин.";
        header('Location:' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['err2Msg']  = "Извините, введённая вами электронная почта уже зарегистрирована.";
        header('Location:' . $_SERVER['HTTP_REFERER']);
    }
    exit();
}


if (empty($myrow['id'])) { 

//сохраняем нового пользователя
$salt     = "54uy217sgh";
$password = md5($password.$salt);
$sql      = 'INSERT INTO MyGuests (email,username,password) VALUES (:email,:username,:password)';
$query    = $mysql->prepare($sql);
$query    -> execute(['email' => $email,'username' => $username,'password' => $password]);

    if (isset($_SESSION['err1Msg']) or isset($_SESSION['err2Msg'])) {
        unset($_SESSION['err1Msg']);
        unset($_SESSION['err2Msg']);
    }

$_SESSION['sucesMsg'] ="Регистрация прошла успешно, теперь вы можете авторизоваться";
header('Location:' . $_SERVER['HTTP_REFERER']);
}

?>