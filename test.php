<?php
/**
 *  $str  is tring with parenthesis inside
 *  $position is position of parenthesis open (2, 7, 12, 24)
 */
function get($str, $position)
{
    $rt = 0;
    $arr = str_split($str);
    $skip = 0;

    foreach ($arr as $idx => $val) {

        if ($idx >= $position) {

            if ($val == "(") {
                $skip++;
            } elseif ($val == ")") {
                $skip--;
            }

            if ($val == ")" && $skip == 0) {
                $rt = $idx;
                break;
            }
        }
    }

    return $rt;
}

$str = "a (b c (d e (f) g) h) i (j k)";

$arr1 = str_split($str);

echo get($str, 2);