<?php

$timeStart = microtime(true);
$c = "10 bezdzioniu \n suvalge 20 bananu.";
for ($i = 0; $i <1000000; $i++){
    $c;
}
$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;

echo '<br>'."dvigubu kabuciu laikas: $time".'<br>';



$timeStart = microtime(true);
$c = '10 bezdzioniu \n suvalge 20 bananu.';
for ($i = 0; $i <1000000; $i++){
    $c;
}
$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;

echo '<br>'."viengubu kabuciu laikas: $time".'<br>';

    echo "<br>";

