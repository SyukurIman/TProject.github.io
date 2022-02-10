<?php
    $host='localhost';
    $user='root';
    $pass='';
    $database='tsmdatabase';
    $sql = mysqli_connect($host, $user, "", $database);
 
    //cek koneksi
    if (mysqli_connect_errno()){
        echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
    }
?>