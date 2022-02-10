<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><?php echo $judul;?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo $link1;?>><?php echo $opsi1;?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo $link2;?>><?php echo $opsi2;?></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-nav-right">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle ' href='#' id='navbarScrollingDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false' >
                            <img class='img_profile' src=<?php echo $gambar; ?>>
                            <?php echo $nama; ?>
                        </a>
                        <ul class='dropdown-menu' aria-labelledby='navbarScrollingDropdown'>
                            <li><a class='dropdown-item' href='#'>My Provile</a></li>
                            <li><a class='dropdown-item' href=<?php echo $logoutLink; ?> >Logut</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>