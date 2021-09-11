<?php
$transport = array('foot', 'bike', 'car', 'plane');
echo "<pre>";
print_r ($transport);
echo "</pre>";

$mode = current($transpport);
echo $mode."<br>"; // $mode = 'foot;
$mode = next($transpport);
echo $mode."<br>"; // $mode = 'bike;
$mode = current($transpport);
echo $mode."<br>"; // $mode = 'bike;
$mode = prev($transpport);
echo $mode."<br>"; // $mode = 'foot;
$mode = end($transpport);
echo $mode."<br>"; // $mode = 'plane;
$mode = current($transpport);
echo $mode."<br>"; // $mode = 'plane;
?>