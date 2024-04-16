<?php
if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $con = mysqli_connect("localhost", "root", "", "solemate");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = array();

    if($con) {
        $sql = "SELECT * FROM users WHERE email = '".$email."'";
        $res = mysqli_query($con, $sql); 
        if(mysqli_num_rows($res) != 0){
            $row = mysqli_fetch_assoc($res);
            if($email == $row['email'] && password_verify($password, $row['password'])){
                try {
                    $apiKey = bin2hex(random_bytes(23));
                } catch (Exception $e) {
                    $apiKey = bin2hex(uniqid($email, true));
                }
                $sqlUpdate = "UPDATE users SET apiKey = '".$apiKey."' WHERE email = '".$email."'";
                if(mysqli_query($con, $sqlUpdate)){
                    $result = array("status" => "success","message"=> "Login successful",
                        "nama" => $row['nama'], "email" => $row['email'],  "alamat" => $row['alamat'],  "nomor_telepon" => $row['nomor_telepon'], "apiKey" =>  $apiKey
                    );
                } else  $result = array("status" => "failed", "message"=> "Login Failed try again");
            } else  $result = array("status" => "failed", "message"=> "Retry with correct email or password");
        } else  $result = array("status" => "failed", "message"=> "User not found");
    } else $result = array("status" => "failed", "message"=> "Database connection failed");
} else $result = array("status" => "failed", "message"=> "Email and password are required fields");
echo json_encode($result, JSON_PRETTY_PRINT);
?>
