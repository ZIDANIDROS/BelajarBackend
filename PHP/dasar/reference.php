<?php

$husein = "gils";
$yoi = &$husein; //diberi reference
$yoi = "nzxz";

echo $husein . PHP_EOL;

function increment(int $value)
{
    $value++;
}
$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

function increment2(int &$value2)
{
    $value2++;
}
$counter2 = 1;
increment2($counter2);
echo $counter2 . PHP_EOL;
