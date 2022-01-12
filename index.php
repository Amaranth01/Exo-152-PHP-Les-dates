<?php

// Premiere ligne
$premiereDate = date("D M J Y");
echo $premiereDate;

echo "<br><br>";

$past = strtotime("2018.12.10");
echo date('Y.m.d', $past);

echo "<br><br>";

$hour = strtotime("11:35:07");
echo date('H:i:s', $hour);