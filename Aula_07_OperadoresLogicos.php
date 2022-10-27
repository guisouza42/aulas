<?php

$dado1 = true;
$dado2 = false;

$result1 = $dado1 && $dado2;
echo $result1, "<br>";

$dado3 = true;
$dado4 = false;

$result2 = $dado3 || $dado4;
echo $result2, "<br>";

$dado5 = true;
$dado6 = false;

$result3 = !$dado5;
echo $result3;