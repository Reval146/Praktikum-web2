<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Nilai Ujian</title>
</head>
<body>

<h1>Form Nilai Ujian</h1>

<form action="class_nilaimahasiswa.php" method="post">

    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim" value="0211">

    <br>

    <label for="namaMK">Pilih MK:</label>
    <select id="namaMK" name="namaMK">
        <option value="Data Warehouse">Data Warehouse</option>
        <option value="Pemrograman Web">Pemrograman Web</option>
        <option value="Jaringan Komputer">Jaringan Komputer</option>
    </select>

    <br>

    <label for="nilai">Nilai:</label>
    <input type="number" id="nilai" name="nilai" value="90">

    <br><br>

    <input type="submit" value="Simpan">

</form>

</body>
</html>
