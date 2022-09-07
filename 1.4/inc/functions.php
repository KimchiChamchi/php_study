<?php
function sum($x, $y)
{
    return $x + $y;
}


function output($items)
{
    echo '<pre>';
    print_r($items);
    echo '</pre>';
}


function increment()
{
    static $count = 0;
    echo "{$count}<br/>";
    $count++;
}
?>
</body>

</html>