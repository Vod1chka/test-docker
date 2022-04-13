<?php
require_once 'config.php';

try {
    $conn = new PDO("mysql:host = $servername",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* Создание базы данных */
    $sql = "CREATE DATABASE myDBPDO";
    $conn->exec($sql);
	
    /* Вывод сообщения об успехе */
    echo "database created succesfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
