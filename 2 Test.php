<?php

$arr = array(1, 5, 2, 7, 2);
$result= [];
foreach ($arr as $key=>$value) {
    $arr2= $arr;
    unset($arr2[$key]);
    $result[]=array_product($arr2);
}
    echo implode(",", $result);

