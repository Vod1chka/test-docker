<?php
try {
    $conn = new PDO(
        sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8', getenv('MYSQL_HOST'), getenv('MYSQL_PORT'), getenv('MYSQL_DATABASE')),
        getenv('MYSQL_USER'),
        getenv('MYSQL_PASSWORD')
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* Создание базы данных */
    $sql = "CREATE DATABASE myDBPDO";
    $conn->exec($sql);
	
    /* Вывод сообщения об успехе */
    echo "database created succesfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
