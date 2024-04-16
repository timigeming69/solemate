<?php
if (!empty($_POST['email']) && !empty($_POST['apiKey'])){
    $email = $_POST['email'];
    $apiKey = $_POST['apiKey'];
    $con = mysqli_connect("localhost", "root", "", "solemate");
    if($con){
        $sql = "SELECT * FROM users WHERE email = '".$email."' AND apiKey = '".$apiKey."'";
        $res = mysqli_query($con, $sql);
        if(mysqli_num_rows($res) != 0){
           $row = mysqli_fetch_assoc($res);
           $sqlUpdate = "update users set apiKey = '' where email  = '".$email."'";
           if(mysqli_query($con, $sqlUpdate)){
            echo "success";
           } else echo "Logout failed";
        } else  echo "Unanthorised access";
    } else echo "Database connection failed";
} else echo "All Field Reqired";    