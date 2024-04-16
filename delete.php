<?php
/*
File hapusMhs.php memungkinkan aplikasi untuk dapat menghapus data Mahasiswa terpilih dari Database
*/
//Mendapatkan Nilai ID
$id = $_GET['id'];
//Import File Koneksi Database
require_once('koneksi.php');
//Membuat SQL Query
$sql = "DELETE FROM orders WHERE id=$id";
//Menghapus Nilai pada Database
if(mysqli_query($con,$sql)){
echo 'Berhasil Menghapus Mahasiswa';
}else{
echo 'Gagal Menghapus Mahasiswa';
}
mysqli_close($con);
?>