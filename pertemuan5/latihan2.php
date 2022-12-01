<?php 
// menampilkan isi array dengan for | foreach

$angka=[2,3,4,5,9,8,7,12,13,15,20];
$numbers=[2,3,45,23,5,1,5,6,77,8,12];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Latihan array</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: aqua;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }

    </style>
</head>
<body>
<?php for($i = 0; $i < count ($angka); $i++): ?>
  <div class="kotak"><?=$angka[$i]?></div>  
  <?php endfor; ?>

<div class="clear"></div>

<?php foreach( $numbers as $number): ?>
    <div class="kotak"><?=$number; ?></div>
    <?php endforeach; ?>

</body>
</html>