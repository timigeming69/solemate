<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Periksa apakah semua field terisi
    if(!empty($_POST['nama_sepatu']) && !empty($_POST['tanggal']) && !empty($_POST['metode']) && !empty($_POST['total'])) {
        $con = mysqli_connect("localhost", "root", "", "solemate");

        // Mendapatkan Nilai Variable
        $nama_sepatu = $_POST['nama_sepatu'];
        $tanggal = $_POST['tanggal'];
        $metode = $_POST['metode'];
        $total = $_POST['total'];

        if($con) {
            $sql = "INSERT INTO orders (nama_sepatu, tanggal, metode, total) VALUES ('$nama_sepatu', '$tanggal', '$metode', '$total')";
            if(mysqli_query($con, $sql)){
                echo "success";
            } else {
                echo "Gagal Menambahkan Orders";
            }
        } else {
            echo "Koneksi database gagal";
        }

        mysqli_close($con);
    } else {
        echo "Semua field diperlukan";
    }
} else {
    echo "Metode request harus POST";
}
?>
