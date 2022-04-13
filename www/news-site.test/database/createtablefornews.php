<?php
try {
    $conn = new PDO(
        sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8', getenv('MYSQL_HOST'), getenv('MYSQL_PORT'), getenv('MYSQL_DATABASE')),
        getenv('MYSQL_USER'),
        getenv('MYSQL_PASSWORD')
    );
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
