<?php //Array dibuat sifat asosiatif
$data = [
    ['no' => 1, 'nama' => 'A', 'longitude' => 110.1, 'latitude' => -7.1],
    ['no' => 2, 'nama' => 'B', 'longitude' => 110.2, 'latitude' => -7.2],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data</title>
</head>
<body>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Longitude</th>
        <th>Latitude</th>
    </tr>
    <?php

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>{$row['no']}</td>";
        echo "<td>{$row['nama']}</td>";
        echo "<td>{$row['longitude']}</td>";
        echo "<td>{$row['latitude']}</td>";
        echo "</tr>";
    }
    ?>
</table>

<?php 
//melakukan iterasi dengan memunculkan data selain angka 4 dan 5
$array = [1, 2, 3, 4, 5, 7, 9, 11];

foreach ($array as $nilai) {
    if ($nilai == 4 || $nilai == 5) {
        continue;
    }
    echo $nilai . "<br>";
}
?>


<?php //Mengirimkan data melalui URL
echo "<a href=vars.php?nama=Merapi&alamat=Sleman>Coba Klik Disini!!</a>";
?>


<!-- Membuat form isian dengan mengirimkan data ke file welcome.php -->
<form action="welcome.php" method="post">
Nama: <input type="text" name="nama" />
Umur: <input type="text" name="umur" />
<input type="submit" value="Kirim"/>
</form>


</body>
</html>
