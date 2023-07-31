<?php
$Host       ="localhost";
$user       ="root";
$pass       ="";
$db         ="companyprofile";

$koneksi    = mysqli_connect($Host,$user,$pass,$db);
if(!$koneksi){
      die("Gagal terkoneksi");
}
?>