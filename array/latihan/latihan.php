<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Lala",
            "MataKuliah" => [["MataKuliah" => "Matematika"],["MataKuliah" => "IPA"],["MataKuliah" => "IPS"]],
            "Hobi" => [["Hobi" => "Renang"],["Hobi" => "Nari"]]],

            [ "nama" => "Ria",
            "MataKuliah" => [["MataKuliah" => "PPKN"],["MataKuliah" => "Sejarah"],["MataKuliah" => "KWU"]],
            "Hobi" => [["Hobi" => "Traveling"],["Hobi" => "Kuliner"]]],

            [ "nama" => "Lili",
            "MataKuliah" => [["MataKuliah" => "RPL"],["MataKuliah" => "Manajemen"],["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "Nyanyi"],["Hobi" => "Dance"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Roni",
            "MataKuliah" => [["MataKuliah" => "Matematika"],["MataKuliah" => "IPA"],["MataKuliah" => "IPS"]],
            "Hobi" => [["Hobi" => "mancing"],["Hobi" => "Koleksi anime"]]],

            [ "nama" => "Rini",
            "MataKuliah" => [["MataKuliah" => "PPKN"],["MataKuliah" => "Sejarah"],["MataKuliah" => "KWU"]],
            "Hobi" => [["Hobi" => "masak"],["Hobi" => "Kuliner"]]],

            [ "nama" => "Farhan",
            "MataKuliah" => [["MataKuliah" => "RPL"],["MataKuliah" => "Manajemen"],["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "Nyanyi"],["Hobi" => "Main motor"]]],
        ]
        ],
    ];
    $no = 1;
    foreach($data as $key => $val) {
        echo "Nama Wali Dosen : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['MataKuliah'] as $sub) {
                echo "<li>". $sub['MataKuliah']. "</li>";
          
            }
            echo "</ol>";

            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($menu['Hobi'] as $hobi) {
            echo "<li>". $hobi['Hobi']. "</li>";
        }
        echo "</ol>";
    } echo "</ul>";
}
?>