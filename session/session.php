<?php
$title = '세션';
session_start();
// 세션이 저장되는 경로 .../php/tmp/
// php 설치할때 같이 설치한 apache 서버가 있어서 거기 저장되는것
$_SESSION['city'] = 'Seoul';
$_SESSION['gu'] = 'Gangnam';

include_once('../1.4/inc/header.php');
?>

<?php

echo '세션이 등록되었습니다' . '<br/>';
if (!isset($_SESSION['city'])) {
    echo '세션이 등록되어 있지 않습니다.';
} else {
    echo $_SESSION['city'] . '세션이 등록되어있음' . "<br/>";
    print_r($_SESSION); // 모든 세션의 정보를 연관배열 형태로 출력
}


?>