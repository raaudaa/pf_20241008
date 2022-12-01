<?php 
// array mu ltidimensi
// array di dalam array

$mahasiswa =[
    ["saidah","20241008","PTI","asaidahraudatul1303@gmail.com"],
    ["sri indriani","20241013","PTI","sriindri123@gmail.com"],
    ["angan","20241016","PTI","febriana123@gmail.com"]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>latihan array multidimensi</title>
</head>
<body>
    <h1>daftar biodata mahasiswa</h1>
    
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li>nama: <?=$mhs[0]; ?></li>
        <li>NIM: <?=$mhs[1]; ?></li>
        <li>jurusan: <?=$mhs[2]; ?></li>
        <li>Email: <?=$mhs[3]; ?></li>
        <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>