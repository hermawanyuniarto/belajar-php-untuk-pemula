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
// Variabel
// tidak boleh diawali angka, tapi boleh mengandung angka

// $nama = "Hermawan Yuniarto";
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Hermawan";
// $nama_belakang = "Yuniarto";
// echo $nama_depan . "" . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Hermawan";
// $nama .= " ";
// $nama .= "Yuniarto";
// echo $nama;

// perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 && $x % 2 == 0);
$x = 30;
var_dump($x < 20 || $x % 2 == 0);