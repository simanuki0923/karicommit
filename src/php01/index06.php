<?php
function text($a, $b) {
    return 0.5 * $a * $b;
}

function text1($c, $d) {
    return $c * $d;
}

function text2($e, $f, $g) {
    return 0.5 * ($e + $f) * $g;
}

$a = 5;
$b = 6;
echo "三角形の面積" . text($a, $b) . "<br />";

$c = 5;
$d = 6;
echo "四角形の面積" . text1($c, $d) . "<br />";

$e = 5;
$f = 6;
$g = 5;
echo "台形の面積" . text2($e, $f, $g) . "<br />";