<?php
session_start();
$title = '로그인';
require_once('config.php');
include('../board/include/header.php');
require_once('functions.php');

if (is_user_authenticated()) {
    redirect('admin.php');
    die();
}

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     // echo $_POST['email'];
//     output($_POST);
// }
if (isset($_POST['login'])) {
    // output($_POST);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if ($email == false) {
        $status = '이메일 형식에 맞게 입력해주세요.';
    }
    if (authenticate_user($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('admin.php');
        die();
    } else {
        $status = '비번이 안맞음';
    }
}

?>

<form action="" method="POST">
    <p>
        <label for="email">이메일: </label>
        <input type="text" id="email" name="email">
    </p>
    <p>
        <label for="password">비빔번호: </label>
        <input type="password" id="password" name="password">
    </p>
    <p>
        <input type="submit" name="login" value="Login">
    </p>
</form>
<div class="error">
    <p>
        <?php
        if (isset($status)) {
            echo $status;
        }
        ?>
    </p>
</div>