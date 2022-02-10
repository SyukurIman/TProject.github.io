<?php
include "koneksi.php";

if (isset($_GET['error']) && !empty($_GET['error'])) {
	switch($_GET['error']){
		case 1:
			echo "<script>alert('Username telah terdaftar!'); window.location = 'daftar'</script>";
			break;
        case 2:
            echo "<script>alert('Email telah telah terdaftar!'); window.location = 'daftar'</script>";
			break;
        case 3:
            echo "<script>alert('No Telp telah terdaftar!'); window.location = 'daftar'</script>";
            break;
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
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
    </head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index">TSM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index#layanan-kami">Pelayanan Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index#kata-mereka">Kata Mereka</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-nav-right">
                    <ul class="navbar-nav me-auto">
                        <div class="row">
                            <li class='nav-item col-4'>
                                <a class='me-2 btn btn-primary' data-bs-toggle='modal' href='#exampleModalToggle'>Login</a>
                            </li>
                            <li class="nav-item col-4">
                                <a class="me-2 btn btn-secondary" href="#">Daftar</a>
                            </li>
                        </div>
                        
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <body>
        <div class="container con-daftar">
            <div class="row">
                <div class="col-6 left">
                    <div class="row">
                        <div class="col-6">
                            <img src="image/logo2.png" alt="" class="img_thumnail"/>
                        </div>
                        <div class="col-6 col-thumnailLr">
                            <div class="thumnail_title">Belum punya akun ?</div>
                            <div>Daftar Sekarang Untuk Mendapatkan Pelayanan Yang Terbaik!!</div> 
                        </div>
                    </div>
                </div>
                <div class="col-6 right">
                    <div class="card daftar">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Form Pendaftaran</h5>
                            <form class="row g-3" action="proses/daftar_proses" method="post">
                                <div class="col-12">
                                    <label for="validationDefault01" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="UserName" name="username" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Nama Lengkap" name="fullname" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="Email" placeholder="Email" name="email">
                                </div>
                                <div class="col-12">
                                    <label for="showPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="showPassword" placeholder="Password" name="password" required>
                                    <label><input id="checkbox" type="checkbox" class="form-checkbox"> Tampilkan password</label>
                                </div>
                                <div class="col-12">
                                    <label for="Alamat" class="form-label">Alamat Lengkap</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Alamat" name="alamat" required>
                                </div>
                                <div class="col-12">
                                    <label for="noTelp" class="form-label">No. Telpon</label>
                                    <input type="text" class="form-control" id="noTelp" placeholder="No. Telp" name="telp" required>
                                </div>
                                <div class="col-12">
                                    <label for="syarat" class="form-label">Dengan mendaftar, saya menyetujui Syarat dan Ketentuan serta Kebijakan Privasi</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Saya Setuju
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" id="btn_submit" disabled value="submit">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="proses/login_proses.php" method="post">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required/>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" id="showPassword" placeholder="Password" required/>
                                    <label><input id="checkbox" type="checkbox" class="form-checkbox"> Tampilkan password</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){   
                $('.form-checkbox').click(function(){
                    if($(this).is(':checked')){
                        $('#showPassword').attr('type','text');
                    }else{
                        $('#showPassword').attr('type','password');
                    }
                });
            });

            $(document).ready(function(){   
                $('.form-check-input').click(function(){
                    if($(this).is(':checked')){
                        $('#btn_submit').prop('disabled', false);
                    }else{
                        $('#btn_submit').prop('disabled', true);
                    }
                });
            });
        </script>
        
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>

    <footer>
        <div class="container">
           <a>Copyright Tiga Sinar Matahari</a> 
        </div>
        
    </footer>
</html>