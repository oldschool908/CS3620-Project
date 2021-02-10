<?php

session_start();

require_once('./user/user.php');

$user = new user();
$user->deleteUser($_POST['username']);

?>