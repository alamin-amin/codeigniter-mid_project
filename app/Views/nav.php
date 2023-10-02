<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <title>project</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info">
  <div class="row container-fluid">
    <div class="col-2">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class=" col-8 navbar-nav">
        <a class="nav-link " aria-current="page" href="<?= base_url() ?>/public">Home</a>
        <a class="nav-link" href="">Product</a>
        <a class="nav-link" href="">About</a>
        <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->

        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Other
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">About</a></li>
                  <li><a class="dropdown-item" href="#">Store</a></li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Trash</a>
                  </li>
                </ul>
              </li>
            </ul>
      </div>
        <div class='col-2 ms-5 fs-5'>
            <!-- <i style="color: white; font-size: 20px;" class="fa-solid fa-droplet" onclick="toggleTheme()"></i> -->

            <ul class="nav_profile">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Admin
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">My Profile</a></li>
                  <li><a class="dropdown-item" href="#">Manage Account</a></li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?= base_url() ?>public/login">Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- <div class="user_part">
              <img style="width: 40px;" class="" src="uploads/images/avatar.png" alt="avatar" />
            </div> -->
      </div>
    </div>
  
</div>
</nav>


<?= $this->renderSection('content') ?>

</body>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
</html>