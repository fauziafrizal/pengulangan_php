<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Pengulangan dan Tabel Perkalian</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        td, th {
            border: 1px solid black;
            width: 30px;
            height: 30px;
            text-align: center;
        }
        .bilangan{
            background-color: white;
        }
        .header {
            background-color: lime;
        }
        .row-header {
            background-color: lime;
        }
        .cell {
            background-color: aqua;
        }
        .highlight {
            background-color: yellow;
        }
    </style>
</head>
<body>

<h2>Data Bilangan Genap (1-10)</h2>
<?php
for ($angka = 1; $angka <= 10; $angka++) {
    if ($angka % 2 == 0) {
        echo $angka . " ";
    }
}
?>

<h2>Tabel Perkalian Matrik</h2>
<table>
    <tr>
        <th class="bilangan">bilangan</th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th class='header'>$i</th>";
        }
        ?>
    </tr>
    <?php
   
    $highlight_numbers = [1,3, 9, 15, 21, 27, 5, 15, 25, 35, 45, 7, 21, 35, 49, 63, 9, 27, 45, 63, 81];

    for ($baris = 1; $baris <= 10; $baris++) {
        echo "<tr>";
        echo "<th class='row-header'>$baris</th>";
        for ($kolom = 1; $kolom <= 10; $kolom++) {
            $hasil = $baris * $kolom;
            if (in_array($hasil, $highlight_numbers)) {
                echo "<td class='highlight'>$hasil</td>";
            } else {
                echo "<td class='cell'>$hasil</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>