<?php
include "../koneksi.php";
session_start();

if(empty($_SESSION['hash'])){
    session_destroy();
    echo "<script>alert('Anda Telah LogOut!'); window.location = '../'</script>";
}else{
    $hash = $_SESSION['hash'];
    $sql2= "SELECT * FROM `user` WHERE hash='$hash'";
    $result=mysqli_query($sql, $sql2);
    $count=mysqli_num_rows($result);
    if($count==1){
        $data_user = mysqli_fetch_array($result);
        $nama = $data_user['fullname'];
        $gambar = "../" . $data_user['gambar'];

        $judul = "TSM-JETLAU";
        $opsi1 = "Home";
        $link1 = "../jet-lau";
        $opsi2 = "History";
        $link2 = "history";
        $logoutLink = "../proses/logout";

        include "../user-login/nav.php";
        
        $timeout = 60;
        $timeout = $timeout * 60; // Ubah menit ke detik
        $timeout = $timeout * 24;
        $timeout = $timeout * 30;
        if (isset($_SESSION['start_time'])) {
            $elapsed_time = time() - $_SESSION['start_time'];
            if ($elapsed_time >= $timeout) {
                session_destroy();
                echo "<script>alert('Silakan Login lagi!'); window.location = '../'</script>";
            }
        }
        $_SESSION['start_time'] = time();
    }else{
        session_destroy();
        echo "<script>alert('Anda Telah LogOut!'); window.location = '../'</script>";
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tiga Sinar Matahari</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="all"/>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>

    <footer style="margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-6" style="width: 60%;">
                    <a class="copyright-right">Copyright Tiga Sinar Matahari</a>
                </div>
                <div class="col-6 navbar-nav-right" style="width: 40%;">
                    <a class="copyright-right" style="float:right;">Versi 0.1-Beta</a>
                </div>
            </div>
            
        </div>
    </footer>
</html>