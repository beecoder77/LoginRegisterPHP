<?php
//File auth.php berfungsi untuk mengecek session, apakah user sudah login atau belum.
session_start();
if(!isset($_SESSION["user"])) header("Location: login.php");
/* 
Saat kita ingin menggunakan variabel $_SESSION, maka kita harus memanggil fungsi session_start() terlebih dahulu.
Setelah itu kita cek dengan:
if(!isset($_SESSION["user"])) header("Location: login.php");
Artinya, jika variabel $_SESSION["user"] tidak memiliki nilai, maka user belum login… paksa dia untuk login .
Tanda seru (!) di depan isset() artinya tidak. Berarti tidak ter-set (variabel belum dibuat).
*/
?>