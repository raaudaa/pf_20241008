<?php 
// date
// menampilkan tanggal dengan  format tertentu
// echo date ("l, d-m-y");

// time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l d M y", time()-60*60*24*100);

// mktime
// membuat sendiri detik dari 1 januari 1970 sampai waktu yang diinginkan
//mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(0,0,0,3,13,2002);
//echo date ("l d M Y", mktime(0,0,0,3,13,2002));

// strtotime
$date = strtotime ("13 maret 2002")
echo date("l d M Y", strtotime(13 maret 2002));?>