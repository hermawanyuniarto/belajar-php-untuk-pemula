<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// standart output
// echo
// print
// print_r
// var_dum

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <!-- 1. PHP di dalam HTML -->
    <h1>Halo, Selamat Datang <?php echo "Hermawan Yuniarto"; ?></h1>
    <P><?php echo "ini adalah paragraf"; ?></P>

    <!-- 2. HTML di dalam PHP -->
    <?php
        echo "<h1>Halo, Selamat Datang Hermawan Yuniarto</h1>"
    ?>
    
</body>
</html>