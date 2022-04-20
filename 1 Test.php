<?php function longestLength($string)
{
    $subStrLast = "";
    $subStr = "";
    for ($i = 0; "" !== $char = @$string[$i]; $i++) {
        if (false === $pos = strpos($subStr, $char)) {
            $subStr .= $char;
        } else {
            if (strlen($subStr) > strlen($subStrLast)) {
                $subStrLast = $subStr;
            }
            $subStr = substr($subStr, $pos + 1) . $char;
        }
    }
    if (strlen($subStr) < strlen($subStrLast)) {
        $subStr = $subStrLast;
    }
    return (object)['substr' => $subStr, 'length' => strlen($subStr)];
}

$info = longestLength('abcabcbb');
echo "Пример 1:<br>"."Вход: {$info->length},<br> Выход: {$info->substr}\n"."<br>";

$info = longestLength('bbbbb');
echo "Пример 2:<br>"."Вход: {$info->length},<br> Выход: {$info->substr}\n"."<br>";

$info = longestLength('pwwkew');
echo "Пример 3:<br>"."Вход: {$info->length},<br> Выход: {$info->substr}\n"."<br>";
