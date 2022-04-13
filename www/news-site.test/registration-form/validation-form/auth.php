<?php
require_once "../../header.php";
require_once "../../database/db.php";

$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$salt 	  = "54uy217sgh";
$password = md5($password.$salt);

$results = $mysql->query("SELECT * FROM `myguests` WHERE `username` = '$username' AND `password` = '$password'");
$user 	 = $results->fetch(PDO::FETCH_ASSOC);

if(!$_POST['username']) {
    //echo "Неверный логин или пароль";
    $_SESSION['errMsg'] = "Неверное имя пользователя или пароль";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    //echo ("Вы успешно авторизовались");
    $_SESSION['author'] = $_POST['username'];
    if (isset($_SESSION['errMsg'])) {
        unset($_SESSION['errMsg']);
    }
    setcookie('user', 'Да', time()+3600, '/');
    header('Location:/');
}
?>
