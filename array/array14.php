<?php
//membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk pemula",
        "penuilis" => "petanikode"
    ],

    [
        "judul" => "Tutorial PHP dari nol hingga mahir",
        "penulis" => "petanikode"
    ],

    [
        "judul" => "Membuat aplikasi web dengan PHP",
        "penulis" => "petanikode"
    ]
    ];

    //menampilkan array
    foreach($artikel as $post){
        echo "<h2>".$post["judul"]."</h2>";
        echo "<p>".$post["penulis"]."<p>";
        echo "<hr>";
    }