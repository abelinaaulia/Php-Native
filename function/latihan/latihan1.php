<?php

function tentang_saya($a, $b)
{
    $nama = $a;
    $umur = $b;
    return "Hi, saya $nama dan umur saya $umur";
}
echo "Tentang Saya : ".tentang_saya ("abelina", "17");
?>