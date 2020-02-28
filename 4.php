<?php

$arr = range(1, 100);
//$arr = array(1, 1, 2, 3, -51, 12, 12, 12, -51);
shuffle($arr);
$k = 0;
for ($i = 0; $i < count($arr) - 1; $i++) {
    if ($arr[$i] == $arr[$i + 1])
    {
        $k++;
    }
}
print_r($arr);

echo $k;
