
<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connect = new mysqli("localhost:3307", "root", "1q2w3e4r", "php_study");

if (!$connect) {
    echo 'db에 연결하지 못했습니다.' . mysqli_connect_error();
} else {
    echo 'db에 접속했습니다';
}
$user_name = $_POST['name'];
$user_msg = $_POST['message'];
$sql = "INSERT INTO msg_board (user_name, user_message) VALUES ('$user_name','$user_msg')";
$result = mysqli_query($connect, $sql);
if ($result === false) {
    echo '저장하지 못했습니다.';
    error_log(mysqli_error($connect));
} else {
    echo '저장 성공';
}

mysqli_close($connect);
print "<hr/><a href='index.php'>메인화면으로 이동하기</a>";
