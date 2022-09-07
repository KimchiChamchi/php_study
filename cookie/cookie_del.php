<?php
$title = '쿠키삭제';
$cookieName = 'city';
$cookieValue = 'Seoul';
// (쿠키이름(키), 내용물(값), 만기날짜, 경로)
setcookie($cookieName, $cookieValue, time() - 60, '/');
include_once('../1.4/inc/header.php');
?>
<h3>쿠키체크하기</h3>
<?php


echo $cookieName . '의 쿠키가 삭제되었습니다.';
echo "생성된 값은 {$_COOKIE[$cookieName]}입니다.";


?>