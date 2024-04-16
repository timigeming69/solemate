<?php
if(!empty($_POST['nama']) && !empty($_POST['email']) && !empty($_POST['nomor_telepon']) && !empty($_POST['alamat']) && !empty($_POST['password'])) {
    $con = mysqli_connect("localhost", "root", "", "solemate");

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nomor_telepon = $_POST["nomor_telepon"];
    $alamat = $_POST["alamat"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    if($con) {
        $sql = "INSERT INTO users (nama, email, nomor_telepon, alamat, password) VALUES ('$nama', '$email', '$nomor_telepon', '$alamat', '$password')";
        if(mysqli_query($con, $sql)){
            echo "success";
        } else {
            echo "Registration Failed";
        }
    } else {
        echo "Database connection failed";
    }

} else {
    echo "All Fields are required";
}
?>
