<?php
$mahasiswa = [
    ["Hermawan Yuniarto", "04519820624", "Sistem Informasi", "hermawanyuniarto@gmail.com"],
    ["Abdul Rakhman", "03519820318", "Manajemen Informatika", "abdulrkm@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li><?= $m[0]; ?></li>
            <li><?= $m[1]; ?></li>
            <li><?= $m[2]; ?></li>
            <li><?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>