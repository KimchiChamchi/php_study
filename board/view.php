<?php
$title = 'ㅂ브유우ㅜ';
$h1 = '게시판';
include('include/sqlConnect.php');
include('include/header.php');
$view_num = $_GET['number'];
$queryStatement = "SELECT * FROM msg_board WHERE id = $view_num";
$result = mysqli_query($connect, $queryStatement);
mysqli_close($connect);
$row = mysqli_fetch_array($result);
$component = "";
print_r($row);
if ($row) {
    $component = "
        <h3>글번호: {$row['id']} / 글쓴이: {$row['user_name']}</h3>
        <div>{$row['user_message']}</div>";
}

?>
<h2>글 내용</h2>
<?php echo $component; ?>
<p><a href='index.php'>메인화면으로 돌아가기</a></p>
</body>

</html>