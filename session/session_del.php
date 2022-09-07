<?php
$title = '세션 삭제';
session_start();

include_once('../1.4/inc/header.php');
?>

<?php
// unset은 선언된 변수들의 해제
// session_unset();
// destroy는 세션이 저장된 경로에 있는 세션 파일을 삭제해줌
session_destroy();


print_r($_SESSION);
?>