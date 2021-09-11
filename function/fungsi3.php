<?php
//function parameter
//nilai yang bisa dimasukan kedalam fungsi / sebuah nilai
//yang bisa ditentukan

function luasSegitiga($a, $b)
{
    $alas = $a;
    $tinggi = $b;
    $luas = ($alas * $tinggi)/2;
    return $luas;
}
echo "Luas Segitiga : ". luasSegitiga(10,8);
?>