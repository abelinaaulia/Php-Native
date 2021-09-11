<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Peminjaman Mobil</title>
</head>
<body>
<fieldset>
<legend>Rental Mobil</legend>

<form action="proses5.php" method="post">

    <table>
        <tr>
            <td>Nama </td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Nomor Induk Keluarga </td>
            <td> : </td>
            <td><input type="text" name="nik"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td> : </td>
            <td><input  type="radio"  name="kelamin" value="laki-laki" >
            Laki-laki
            <input type="radio" name="kelamin" value="perempuan"> 
            Perempuan</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td> : </td>
            <td><select  name="agama">
            <option value= "pilih "> pilih </option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select></td>
        </tr>
        <tr>
            <td>Nama Mobil</td>
            <td> : </td>
            <td><input  name="namamobil"></td>
        </tr>
        <tr>
            <td>Jenis Mobil </td>
            <td> : </td>
            <td><select  name="jenismobil">
            <option value= "pilih jenis"> pilih jenis</option>
            <option value= "Dolak" > Dolak</option>
            <option value= "Truk" > Truk</option>
            <option value= "Angkot" > Angkot</option>
            <option value= "Sedan" > Sedan</option>
            </select></td>
        </tr>
        <tr>
            <td>Merek Mobil </td>
            <td> : </td>
            <td><select   name="merek">
            <option value= "pilih merek"> pilih merek</option>
            <option value= "Toyota" > Toyota</option>
            <option value= "Daihatsu" > Daihatsu</option>
            <option value= "Honda" > Honda</option>
            <option value= "Suzuki" > Suzuki</option>
            </select></td>
        </tr>
        <tr>
            <td>NO Plat Mobil</td>
            <td> : </td>
            <td><input type="text" name="nomobil"></td>
        </tr>
        <tr>
            <td>Tanggal Peminjaman</td>
            <td> : </td>
            <td><input  type="date" name="tanggalpeminjaman"></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td> : </td>
            <td><input  type="date" name="tanggalkembali"></td>
        </tr>
        <tr>
            <td>Penjamin </td>
            <td> : </td>
            <td><select  name="penjamin">
            <option value= "pilih penjamin"> pilih penjamin</option>
            <option value= "Foto Copy KTP" > Foto Copy KTP</option>
            <option value=  "Foto Copy SIM" > Foto Copy SIM</option>
            <option value= "Foto Copy KK" > Foto Copy KK</option>
            </select></td>
        </tr>
        <tr>
            <td>Menggunkan Supir </td>
            <td> : </td>
            <td><select type="text" name="supir" >
            <option value= "pilih supir"> pilih supir</option>
            <option value= "Ya" > Ya</option>
            <option value= "Tidak" > Tidak</option>
            </select></td>
        </tr>

<tr></tr>

        <tr>
        <td></td><td></td>
            <td><input type="submit" name="proses"></td>
        </tr>

 </form>
 </fieldset>
 </table>
</body>
</html>