
<?php
$connect = new mysqli("localhost:3307", "root", "1q2w3e4r", "php_study");

if (!$connect) echo 'db에 연결하지 못했습니다.' . mysqli_connect_error();
else echo 'db에 접속했습니다';

?>