<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Angka Genap</title>
</head>
<body>
<h1>Tugas No 1</h1>
<h3>Daftar Angka Genap dari 1 sampai 10</h3>

<?php 
$awal = 1;
$akhir = 10;

for($i = $awal; $i <= $akhir; $i++) {
    if($i % 2 == 0){
        echo $i . " ";
    }
}
?>

</body>
</html>
