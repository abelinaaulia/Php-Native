<?php
// ini adalah array dua dimensi
$matrik = [
    // 0 1 2
/* 0 */[2, 3, 4],
/* 1 */[7, 5, 0],
/* 2 */[4, 3, 8],
];
// index pertama adalah 'baris' index kedua adalah 'kolom'
// cara mengakses isinya
echo $matrik[1][0]; // -> output": 7
echo $matrik[0][2]; // 4
?>