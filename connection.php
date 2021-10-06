<?php

$conn = mysqli_connect("localhost", "root", "","recipeapp_android");
if(!$conn){
    die("Gagal Terhubung dengan database: " .mysqli_connect_error());
}


