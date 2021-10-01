<?php

$warung = [
    [
        "minuman" => "Kopi Arabika",
        "jenis" => "Arjuno",
        "metode" => "V60",
        "harga" => "Rp. 11.000",
        "gambar" => "arabika.jpg"
    ],
    [
        "minuman" => "Kopi Robusta",
        "jenis" => "Dampit",
        "metode" => "Tubruk",
        "harga" => "Rp. 7.000",
        "gambar" => "robusta.jpg"

    ],
    [
        "minuman" => "Es Jeruk",
        "jenis" => "Nipis",
        "metode" => "Saring",
        "harga" => "Rp. 9.000",
        "gambar" => "es jeruk.jpg"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Teman Senja</title>
</head>

<body>

    <h1>Kopi Teman Senja</h1>

    <?php foreach ($warung as $w) : ?>
        <ul>
            <li>Minuman : <?= $w["minuman"]; ?></li>
            <li>Jenis : <?= $w["jenis"]; ?></li>
            <li>Metode : <?= $w["metode"]; ?></li>
            <li>Harga : <?= $w["harga"]; ?></li>
            <li>
                <img src="img/<?= $w["gambar"]; ?>" alt="">
            </li>
        </ul>
    <?php endforeach; ?>

</body>

</html>