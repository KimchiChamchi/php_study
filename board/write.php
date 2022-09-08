<?php
$title = "글쓰기";
$h1 = "글쓰기";
include('include/header.php');

?>
<form action="insert.php" method="post">
    <p>
        <label>이름:</label>
        <input type="text" id="name" name="name">
    </p>
    <p>
        <label>메시지:</label>
        <textarea name="message" cols="30" rows="10"></textarea>
    </p>
    <input type="submit" value="글쓰기">
</form>