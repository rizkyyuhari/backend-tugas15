<?php

$user_name = $_POST["username"];
$user_password = $_POST["password"];

require 'connection.php';

if($conn){
    $sql = "SELECT * FROM user where username='$user_name' and password ='$user_password' ";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $status = "ok";
        $result_code = 1;
        $uname = $row['username'];
        echo json_encode(array('status'=>$status, 'result_code'=>$result_code,'uname'=>$uname));
    }
    else{
        $status = "Username atau password tak ada";
        $result_code = 0;
        echo json_encode(array('status'=>$status,'result_code'=>$result_code));
    }
}

else{
    $status ="failed";
    echo json_encode(array('status'=>$status),JSON_FORCE_OBJECT);
}

mysqli_close($conn);
