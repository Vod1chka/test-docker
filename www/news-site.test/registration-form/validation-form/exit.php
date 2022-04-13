<?php
 require_once "../../header.php";
 setcookie('user', 'Да', time()-3600, '/');
 session_unset();
 header (header: 'Location: /');
?>