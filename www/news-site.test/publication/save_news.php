<?php
require_once "../header.php";
require_once "../database/db.php";

$ntitle   = addslashes($_POST['ntitle']);
$ntext    = addslashes($_POST['ntext']);
$newstext = addslashes($_POST['newstext']);


$sql   = 'INSERT INTO mynews (ntitle,ntext,newstext,nuser) VALUES (:ntitle,:ntext,:newstext,:nuser)';
$query = $mysql->prepare($sql);
$query -> execute(['ntitle' => $ntitle,'ntext' => $ntext, 'newstext'=> $newstext,'nuser' => $_SESSION['author']]);
$_SESSION['nmsg'] = "Новость успешно добавлена";
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
