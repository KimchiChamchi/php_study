<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>함수</title>
</head>

<body>
    <h1>function</h1>
    <pre>
        function 함수이름(매개변수1, 2...){
            할일
        }
        함수이름();
        function class_total() {

        }
        함수입력, 할일, 출력
    </pre>
    <?php
    function sum($x, $y)
    {
        return $x + $y;
    }
    echo sum(10, 20);
    ?>

    <h1>배열 출력</h1>
    <?php
    $fruits = ['사과', '망고', '반하나', '올렌지'];
    echo '<pre>';
    print_r($fruits); // 매개변수의 정보를 출력해준다 // Array ([0]=>사과 [1]=>망고 ... )
    echo '</pre>'; // 이 내용을 함수화
    ?>

    <?php
    function output($items)
    {
        echo '<pre>';
        print_r($items);
        echo '</pre>';
    }
    output($fruits);
    ?>

    <?php
    $var = 20;
    function myFunc()
    {
        echo $var; // 전역변수 가져오는 작업이 없으면 못씀..
        global $var;
        echo $var;
    }
    output($fruits); // 전역변수라 다른 php태그에서도 사용 가능
    myFunc();
    ?>

    <h2>정적변수</h2>
    <?php
    function increment()
    {
        static $count = 0;
        echo "{$count}<br/>";
        $count++;
    }
    increment();
    increment();
    increment();
    ?>
</body>

</html>