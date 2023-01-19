<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
</head>
<body>
    <table border = "0">
    <h1>Input Data Siswa</h1>
    <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama"/>
</p>
<p>
    <label for="kelas">Kelas :</label>
    <input type="text" name="kelas"/>
</p>
<p>
<label for="nama_jurusan">Nama Jurusan :</label>
<select name="jurusan">
    <option value="rpl">RPL</option>
    <option value="tb">TB</option>
    <option value="tbg">TBG</option>
    <option value="tbsm">TBSM</option>
    <option value="tl">TL</option>
</select>
</p>
<p>
    <label for="angkatan">Angkatan :</label>
    <input type="number" name="angkatan"/>
</p>
<p>
    <label for="nominal">Nominal :</label>
    <input type="number" name="nominal"/>
</p>
<p>
    <input type="submit" value="tambah siswa" name="tambah_siswa"/>
</p>
</fieldset>
</form>
</body>
</html>