<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

//menambahkan isi pada indeks ke-3
$hobi[1] .= "Coding";

//menghapus isi array
unset($hobi[1]);
//menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

//cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku. "<br>";
}
?>