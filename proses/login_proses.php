<?php
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql1= "SELECT * FROM `user` WHERE username='$username' and password='$password' and active='1'";
$result=mysqli_query($sql, $sql1);
$count=mysqli_num_rows($result);
 
if(empty($username) && empty($password)){
    header("Location: ../?error=3");
    exit();
} else if(empty($username)){
    header("Location: ../?error=1");
    exit();
} else if(empty($password)){
    header("Location: ../?error=2");
    exit();
}

if($count==1){
    $hashN = md5( rand(0,1000) );

    $query = "UPDATE user SET hash='$hashN' WHERE username='$username'";
    $sql2 = mysqli_query($sql, $query);

    $_SESSION['hash']=$hashN;
    header("location:../");
}else {
    $getit = mysqli_query($sql, "SELECT * FROM user WHERE username='$username'");
    $row = mysqli_fetch_array($getit);
    
    $active = $row['active'];
    
    if($active == 0){
       header("Location: ../?error=5"); 
    }else{
        header("Location: ../?error=4");
    }
}
?>