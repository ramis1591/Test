<?php

$text = "Произведение 7:<br> 
1.  500 .<br>
2.  300 .<br>
3.  200 .<br>";
$text =  preg_replace_callback("/(\d+)\s\./", function($matches){
    return $matches[1] * 7;
}, $text);
echo $text;


