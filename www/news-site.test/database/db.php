<?php
$mysql = new PDO(
    sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8', getenv('MYSQL_HOST'), getenv('MYSQL_PORT'), getenv('MYSQL_DATABASE')),
    getenv('MYSQL_USER'),
    getenv('MYSQL_PASSWORD')
);
?>