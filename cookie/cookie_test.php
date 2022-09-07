<?php
$title = '쿠키테스트';
$cookieName = 'city';
$cookieValue = 'Seoul';
// (쿠키이름(키), 내용물(값), 만기날짜, 경로)
setcookie($cookieName, $cookieValue, time() + 60, '/');
include_once('../1.4/inc/header.php');
?>
<h3>쿠키체크하기</h3>
<?php
// 슈퍼 글로벌 변수
// $_GET['이름']
// $_POST['이름']
// $_COOKIE['이름']
// $_SESSION['이름']
if (!isset($_COOKIE[$cookieName])) {
    echo $cookieName . '의 쿠키는 생성되지 않았습니다.';
} else {
    echo $cookieName . '의 쿠키가 생성되었습니다.';
    echo "생성된 값은 {$_COOKIE[$cookieName]}입니다.";
}

?>