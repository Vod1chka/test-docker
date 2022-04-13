<?php
require_once 'config.php';

try {
    $conn = new PDO ("mysql:host = $servername;dbname=$dbname" , $username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* Создание таблицы */
    $sql = "CREATE TABLE mynews (
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ntext text collate utf8_unicode_ci NOT NULL,
	newstext text collate utf8_unicode_ci NOT NULL,
	ntitle varchar(255) collate utf8_unicode_ci NOT NULL,
    ndate timestamp(6) collate utf8_unicode_ci NOT NULL,
    nuser varchar(255) collate utf8_unicode_ci NOT NULL
   	)";
    $conn->exec($sql);

    /* Вывод сообщения об успехе */
    echo "Table mynews created succesfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn= null;
?>
