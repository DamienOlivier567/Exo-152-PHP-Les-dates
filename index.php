<?php

// Premiere ligne
$date = date("j/m/Y");
echo $date;
echo "<br>";

$da = mktime(0, 0, 0, 12, 10, 2018);
echo date("Y.m.d", $da);
echo "<br>";

$da = mktime(11,35,7);
echo date("g:i:s", $da);






