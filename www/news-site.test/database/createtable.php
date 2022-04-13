<?php
require_once 'config.php';

try {
    $conn = new PDO ("mysql:host = $servername;dbname=$dbname" , $username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* Создание таблицы */
    $sql = "CREATE TABLE MyGuests (
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	email varchar(32) collate utf8_unicode_ci NOT NULL,
	username varchar(20) collate utf8_unicode_ci NOT NULL,
	password varchar(32) collate utf8_unicode_ci NOT NULL,
	UNIQUE KEY username (username)
    )";
    $conn->exec($sql);

    /* Вывод сообщения об успехе */
    echo "Table MyGuests created succesfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn= null;
?>
