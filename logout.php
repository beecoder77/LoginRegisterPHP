<?php
/*
Tungas dari file logout.php adalah menghancurkan atau menghapus session yang sudah dibuat.
Pertama-tama, kita harus memanggil fungsi session_start(), karena kita akan menggunakan session di sini.
*/
session_start();
//Setelah itu, kita hancurkan atau hapus variabel $_SESSION['user'] dengan fungsi session_unset("user").
session_unset("user");
/*
Penghancuran session selesai.
Selanjutnya kita alihkan ke halaman utama
*/
header("Location: index.php");
?>