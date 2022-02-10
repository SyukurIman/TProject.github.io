<?php
include('../koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['fullname'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$hash = md5( rand(0,1000) );

$sql2= "SELECT * FROM `user` WHERE username='$username'";
$result=mysqli_query($sql, $sql2);
$count=mysqli_num_rows($result);

$path="../image/default_user.png";

if($count==1){
    header("location: ../daftar?error=1");
}else{
    $sql2= "SELECT * FROM `user` WHERE email='$email'";
    $result=mysqli_query($sql, $sql2);
    $count=mysqli_num_rows($result);
    
    if($count==1){
        header("location: ../daftar?error=2");
    }else{
        $sql2= "SELECT * FROM `user` WHERE telp='$telp'";
        $result=mysqli_query($sql, $sql2);
        $count=mysqli_num_rows($result);

        if($count==1){
            header("location: ../daftar?error=3");
        }else{
            $query = "INSERT INTO user (id_user, email, username, password, fullname, telp, alamat, hash, gambar) VALUES (0, '$email', '$username', '$password', '$nama', '$telp', '$alamat', '$hash', '$path')";
            if($sql -> query($query)) {
                $to = $email;
                $subject = 'Verivication Email';
                $message = '
                Terima Kasih Telah Bergabung dengan TAKE-SAM!
                Akun Kamu Telah Terdaftar Mohon Untuk Verivikasi Melalui Link Dibawah!!
                
                ------------------------
                Username: '.$username.'
                Password: '.$password.'
                ------------------------
                
                Mohon untuk klik link tersebut untuk mengaktifkan AkunMu:
                https://www.takesam.site/verivikasi.php?email='.$email.'&hash='.$hash.'
                
                ';
                $headers = 'From: takesam30@gmail.com';
                $sentmail = mail($to, $subject, $message, $headers);

                /*
                if($sentmail){
                    header("location: index?register=1");
                }else{
                    echo "Gagal Mengirim Email";
                }*/
            }else {
                echo "Data Gagal Disimpan!";
        
            }
        }
    }
}

?>