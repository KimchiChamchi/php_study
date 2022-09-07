<?php
$title = 'home';
// 중복해서 쓸 수 있고 오류가 나도 다음 코드 계속 실행함
include('inc/header.php');
// include_once('inc/header.php'); 
// _once 두개 이상 써도 한번만 불러옴

// 오류가 있으면 그 이상의 동작 멈춤
require('inc/functions.php');
// require('inc/functions.php');
// require는 두번 오면 에러 발생함
require_once('inc/functions.php');
require_once('inc/functions.php');


?>

<?php
echo sum(10, 20);
?>
<h2>배열 출력</h2>
<?php
$fruits = ['사과', '망고', '반하나', '올렌지'];
output($fruits);
?>

<h2>정적 변수</h2>
<?php
increment();
increment();
increment();
?>