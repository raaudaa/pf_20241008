<!DOCTYPE html>
<html lang="en">
<head>
    

    <title>latihan1A</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
       <?php 
       for($i =1; $i <=3; $i++){
           echo "<tr>";
           for ( $j = 1; $j <=3; $j++){
               echo "<td>$i,$j</td>";
           }
           echo "</tr>";
       }
       ?>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i=1; $i <=3; $i++) : ?>
        <tr>
            <?php for($j =1; $j <=5; $j++) : ?>
                <td><?= "$i,$j"; ?></td>
                <?php endfor;
                 ?>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>