<?php 
require_once 'config.php';

$dsn   = "mysql:host = $servername;dbname=$dbname";
$mysql =  new PDO($dsn,$username,$password);
?>