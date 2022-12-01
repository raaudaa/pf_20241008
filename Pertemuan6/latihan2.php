<?php 
// $mahasiswa =[
//     ["saidah","20241008","PTI","asaidahraudatul1303@gmail.com"],
//     ["sri indriani","20241013","PTI","sriindri123@gmail.com"],
//     ["angan","20241016","PTI","febriana123@gmail.com"]
// ]

// array asosiatif
// definisinya sma dengan array numerik,kecuali key-nya adalah string,yang kita buat sendiri

$mahasiswa =[
[   "nama"=>"saidah",
    "nim"=>"20241008",
    "email"=>"saidahraudatul1303@gmail.com",
    "jurusan"=>"PTI"
],
[
    "nama"=>"raudatul",
    "nim"=>"20241009",
    "email"=>"raudatul1303@gmail.com",
    "jurusan"=>"PTI"
],
[
    "nama"=>"jannah",
    "nim"=>"20241006",
    "email"=>"jannah1303@gmail.com",
    "jurusan"=>"PTI"
],
[
    "nama"=>"raudaa",
    "nim"=>"20241005",
    "email"=>"raudaa1303@gmail.com",
    "jurusan"=>"PTI"
]

];
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>array asosiatif</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>nama: <?= $mhs["nama"]?></li>
        <li>nim: <?= $mhs["nim"]?></li>
        <li>jurusan: <?= $mhs["jurusan"]?></li>
        <li>Email: <?= $mhs["email"]?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>