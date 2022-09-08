<?php
$title = '검색';
$h1 = '게시판';
include('include/sqlConnect.php');
include('include/header.php');
$searchKeyword = $_POST['skey'];
$queryStatement = "SELECT * FROM msg_board WHERE user_message LIKE '%$searchKeyword%'";
$result = mysqli_query($connect, $queryStatement);
mysqli_close($connect);
print_r($result);
?>
<h2><?php echo "\"$searchKeyword\"에 대한 검색 결과" ?></h2>
<ul>
    <?php
    for ($i = 0; $i < $result->num_rows; $i++) {
        $row = mysqli_fetch_array($result);
        $item = "
            <li>
                {$row['id']}: 
                <a href='view.php?number={$row['id']}'>
                    {$row['user_name']}
                </a>
            </li>";
        echo $item;
    }
    ?>
</ul>
<p><a href='index.php'>메인화면으로 돌아가기</a></p>
</body>

</html>