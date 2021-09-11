<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Lala",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika "],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Renang"],
            ["Hobi" => "Nari"]]],

            [ "nama" => "Ria",
            "MataKuliah" => [
            ["MataKuliah" => "Ipa"],
            ["MataKuliah" => "Ips"],
            ["MataKuliah" => "RPL"]],
            
            "Hobi" => [
            ["Hobi" => "Traveling"],
            ["Hobi" => "Kuliner"]]],

            [ "nama" => "Lili",
            "MataKuliah" => [
            ["MataKuliah" => "PPKN "],
            ["MataKuliah" => "BK "],
            ["MataKuliah" => "KWU "]],

            "Hobi" => [
            ["Hobi" => "Nyanyi "],
            ["Hobi" => "Dance "]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Roni",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Futsal"],
            ["Hobi" => "Main game"]]],

            [ "nama" =>
             "Rini",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "B indonesia"],
            ["MataKuliah" => "Administarsi "]],
            
            "Hobi" => [
            ["Hobi" => "Masak"],
            ["Hobi" => "Kuliner"]]],

            [ "nama" => "Farhan ",
            "MataKuliah" => [
            ["MataKuliah" => "PAI"],
            ["MataKuliah" => "Manajemen"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Koleksi anime "],
            ["Hobi" => "Bermain Billiar"]]],
        ]
        ],
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1" width="100%">
        <tr>  
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']. "</li>";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>