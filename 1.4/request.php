<?php
$title = 'login';
include_once('inc/header.php');
require_once('inc/functions.php');
?>

<?php
// get방식의 데이터가 담기는 '수퍼 글로벌 배열'
// $name = $_GET["username"];
// $email = $_GET["useremail"];
$name = $_POST["username"];
$email = $_POST["useremail"];
echo $name . '님의 입력한 이메일은' . $email . '입니다.';

?>