<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열</title>
</head>

<body>
    <?php
    // $배열이름 = array();
    // $fruits = array();
    // $fruits[0] = '사과';
    // $fruits[1] = '버너너';
    // $fruits[2] = '오란지';
    $fruits = array('사과', '버내너', '오렌지');


    // isset 변수에 값이 있으면 true를 반환
    if (isset($fruits[3])) {
        echo $fruits[2];
        echo $fruits[3];
    } else {
        echo "과일배열에 3번인덱스 요소 없음";
    }
    ?>
    <hr />
    <h2>for 반복문</h2>
    <?php
    // count는 length와 같은 역할 배열의 길이(요소의 개수)반환
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i] . '<br/>';
    }
    ?>
    <hr />
    <h2>foreach 반복문</h2>
    <?php
    // foreach 배열요소 순환, fruits배열의 각 요소를 item이라 칭해서 사용
    foreach ($fruits as $item) {
        echo $item . '<br/>';
    }
    ?>

    <h2>연관 배열 Associative Array</h2>
    <?php
    // $prices = array();
    // // 배열요소의 인덱스 대신 키값을 지정해서 값을 넣을수도 있음
    // // 솔리디티의 매핑과 비슷
    // $prices['애플'] = 1000;
    // $prices['버내너'] = 2000;
    // $prices['오렌지'] = 3000;

    $prices = array('애플' => 1000, '버내너' => 2000, '오렌지' => 3000);

    // echo $prices[0]; // 위에서 배열에 값을 넣긴 했지만 [0]에 넣은게 아니기 때문에 
    // 해당 요소에 접근하면 undefined

    // 화살표 함수 형태로 사용하면 앞의 값은 배열요소의 키를 의미하여 사용 가능
    foreach ($prices as $key => $price) {
        echo $key . " : " . $price . '<br/>';
    }
    ?>


</body>

</html>