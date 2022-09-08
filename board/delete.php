<?php
include('include/sqlConnect.php');
$delnum = $_POST['delnum'];
print($delnum);
$queryStatement = "DELETE FROM msg_board WHERE id = $delnum";
$result = mysqli_query($connect, $queryStatement);
$queryStatement = "SELECT id FROM msg_board WHERE id = $delnum";
$result = mysqli_query($connect, $queryStatement);
mysqli_close($connect);
var_dump($result);
$row = mysqli_fetch_array($result);
$component = "";
var_dump($row);
if ($row) {
    $component = "
        <h3>{$delnum}번 글 삭제에 실패하였습니다</h3>";
} else {
    $component = "
        <h3>{$delnum}번 글을 삭제하였습니다</h3>";
}
$title = "글삭제결과";
$h1 = "삭제결과";
include('include/header.php');
?>
<?php echo $component; ?>
<p><a href='index.php'>메인화면으로 돌아가기</a></p>