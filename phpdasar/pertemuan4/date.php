<?php
    // date
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    echo date("l", time()+60*60*24*100);
?>