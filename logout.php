<?php
include('Auth.php');
$auth = new Auth();

$auth->logout();

header('Location: login.php');
exit();
?>
