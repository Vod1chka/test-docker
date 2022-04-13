<?php
try {
    $conn = new PDO(
        sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8', getenv('MYSQL_HOST'), getenv('MYSQL_PORT'), getenv('MYSQL_DATABASE')),
        getenv('MYSQL_USER'),
        getenv('MYSQL_PASSWORD')
    );
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
