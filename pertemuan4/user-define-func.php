<?php 
function salam ($waktu, $nama){
    return "selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> latihan function </title>
</head>
<body>
    <h1> <?=salam("siang","administrator"); ?></h1>

</body>
</html>