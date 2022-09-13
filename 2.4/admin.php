<?php
session_start();
require_once('config.php');
require_once('functions.php');
include('../board/include/header.php');
ensure_user_is_authenticated();

echo $_SESSION['email'];
?>
<a href="logout.php">로구아웃</a>