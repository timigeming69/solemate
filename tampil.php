<?php

require_once('koneksi.php');

// Memeriksa apakah parameter id telah disertakan dalam URL
if(isset($_GET['id'])) {
    // Mengambil nilai id dari parameter URL
    $id = $_GET['id'];
    
    // Membuat SQL Query dengan filter berdasarkan id
    $sql = "SELECT * FROM orders WHERE id = $id";
} else {
    // Jika parameter id tidak disertakan, maka ambil semua data
    $sql = "SELECT * FROM orders";
}

// Mendapatkan Hasil
$r = mysqli_query($con,$sql);

// Membuat Array Kosong
$result = array();

while($row = mysqli_fetch_array($r)){
    // Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
    array_push($result,array(
        "id"=>$row['id'],
        "nama_sepatu"=>$row['nama_sepatu'],
        "tanggal"=>$row['tanggal'],
        "metode"=>$row['metode'],
        "total"=>$row['total']
    ));
}

// Menampilkan Array dalam Format JSON
echo json_encode(array('result'=>$result));

mysqli_close($con);

?>
