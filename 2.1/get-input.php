<?php
$product_id = filter_input(INPUT_GET, "productid", FILTER_VALIDATE_INT);
$limit = filter_input(INPUT_GET, "limit", FILTER_VALIDATE_INT);
// if ($product_id == false || $limit == false) {
//     die();
// }
if ($product_id == false) {
    $product_id = 10;
}
if ($limit == false) {
    $limit = 10;
}
?>
<h2>get input</h2>
<p>
    Showing category:
    <?= $product_id; ?><br />Limit: <?= $limit; ?>
</p>