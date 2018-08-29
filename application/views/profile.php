<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Profile | <?php echo $nmr ?></title>
    <center><link rel="icon" type="image/png" href="<?php echo base_url()?>main/images/icon/logo-minii.png"></center>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url()?>main/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url()?>main/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url()?>main/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>main/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url()?>main/images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">                        
                        <img src="<?php echo base_url().'img-profile/'. $gbr ?>" />
                    </div>
                    <h4 class="name" align="center"><?php echo $nama ?></h4>
                    <input type="button" value="Back" onclick="history.back(-1)" />
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Data Pegawai
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="fas fa-chart-bar"></i>e-Learning</a>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <i class="fas fa-shopping-basket"></i>eCommerce</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-trophy"></i>Features
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="table.html">
                                        <i class="fas fa-table"></i>Tables</a>
                                </li>
                                <li>
                                    <a href="form.html">
                                        <i class="far fa-check-square"></i>Forms</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                                </li>
                                <li>
                                    <a href="map.html">
                                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">
                                        <i class="fas fa-sign-in-alt"></i>Login</a>
                                </li>
                                <li>
                                    <a href="register.html">
                                        <i class="fas fa-user"></i>Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">
                                        <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">
                                        <i class="fab fa-flickr"></i>Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">
                                        <i class="fas fa-comment-alt"></i>Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">
                                        <i class="far fa-window-maximize"></i>Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">
                                        <i class="far fa-id-card"></i>Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">
                                        <i class="far fa-bell"></i>Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">
                                        <i class="fas fa-tasks"></i>Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">
                                        <i class="far fa-window-restore"></i>Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">
                                        <i class="fas fa-toggle-on"></i>Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">
                                        <i class="fas fa-th-large"></i>Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">
                                        <i class="fab fa-font-awesome"></i>FontAwesome</a>
                                </li>
                                <li>
                                    <a href="typo.html">
                                        <i class="fas fa-font"></i>Typography</a>
                                </li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            

            <!-- BREADCRUMB-->
            <!-- <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">0</h2>
                                    <span class="desc">Ijin</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">0</h2>
                                    <span class="desc">Lembur</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">0</h2>
                                    <span class="desc">Terlambat</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">0</h2>
                                    <span class="desc">Mangkir</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">                            
                            <div class="col-lg-6">
                                <div class="card">
                                        <div class="card-header">Profil</div>
                                    <div class="card-body">
                                        <div class="default-tab">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                                                     aria-selected="true">Work</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                     aria-selected="false">Personal</a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">Contact</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <h5>Nomor Karyawan: </h5> <?php echo $nmr ?>
                                                    <h5>Unit: </h5> <?php echo $unit ?>
                                                    <h5>Posisi: </h5> <?php echo $posisi ?>
                                                    <h5>Pengalaman: </h5> <?php echo $pnglman ?>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <h5>Nama: </h5> <?php echo $nama ?>
                                                    <h5>TTL: </h5> <?php echo $tmptlhr.", ".$tgllhr ?>
                                                    <h5>Alamat: </h5> <?php echo $alamat ?>
                                                    <h5>Kodepos: </h5> <?php echo $kodepos ?>
                                                    <h5>Jenis Kelamin: </h5> <?php echo $gender ?>
                                                    <h5>Agama: </h5> <?php echo $agama ?>
                                                    <h5>Pendidikan: </h5> <?php echo $pnddkn ?>
                                                    <h5>Hobby: </h5> <?php echo $hobby ?>
                                                    <h5>Status: </h5> <?php echo $status ?>
                                                    <h5>Jumlah Keluarga: </h5> <?php echo $jmlhkeluarga ?>
                                                    <h5>BPJS: </h5> <?php echo $bpjs ?>
                                                    <h5>Rekening: </h5> <?php echo $rekening ?>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <h5>Email: </h5> <?php echo $email ?>
                                                    <h5>Nomor HP: </h5> <?php echo $nohp ?>
                                                    <h5>Nomor Telepon: </h5> <?php echo $notlp ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- =========== COBA EDIT ========== -->

                            <div class="col-lg-6">
                                <div class="card">
                                        <div class="card-header">Edit Profil</div>
                                    <div class="card-body">
                                        <div class="default-tab">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#edit-work" role="tab" aria-controls="nav-home"
                                                     aria-selected="true">Work</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#edit-profile" role="tab" aria-controls="nav-profile"
                                                     aria-selected="false">Personal</a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#edit-contact" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">Contact</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="edit-work" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <form action="<?php echo base_url(). 'admin/upd_work'; ?>" method="post" class="">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Nomer Karyawan</div>
                                                        <input readonly type="text" id="nopeg" name="nmr" value="<?php echo $nmr ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-location-arrow"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Unit</div>
                                                        <input type="text" id="nama_lengkap" name="unit" value="<?php echo $unit?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-group"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Posisi</div>
                                                        <input type="text" id="unit" name="posisi" value="<?php echo $posisi ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Pengalaman</div>
                                                        <input type="text" id="password" name="pnglman" value="<?php echo $pnglman ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-trophy"></i>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>
                                                </form>
                                                </div>
                                                <div class="tab-pane fade" id="edit-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <form action="<?php echo base_url(). 'admin/upd_personal'; ?>" method="post" class="">
                                                <div class="form-group" hidden>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Nomer Karyawan</div>
                                                        <input readonly type="text" id="nopeg" name="nmr" value="<?php echo $nmr ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Nama</div>
                                                        <input type="text" id="nama_lengkap" name="nama" value="<?php echo $nama?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Tempat Lahir</div>
                                                        <input type="text" id="unit" name="tmptlhr" value="<?php echo $tmptlhr ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-building"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Tanggal Lahir</div>
                                                        <input type="text" id="unit" name="tgllhr" value="<?php echo $tgllhr ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Alamat</div>
                                                        <input type="text" id="password" name="alamat" value="<?php echo $alamat ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-home"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Kodepos</div>
                                                        <input type="text" id="unit" name="kodepos" value="<?php echo $kodepos ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-location-arrow"></i>
                                                        </div>
                                                    </div>
                                                </div>                                         
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Jenis Kelamin</div>
                                                        <!-- <input type="text" id="unit" name="gender" value="<?php echo $gender ?>" class="form-control"> -->
                                                        <select name="gender" id="gender" class="form-control">
                                                            <option value="<?php echo $gender ?>"><?php echo $gender ?></option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                        <div class="input-group-addon">
                                                            <i class="<?php
                                                            if($gender == 'Female'){
                                                                echo "fa fa-female";
                                                            } else {
                                                                echo "fa fa-male";
                                                            }
                                                            ?>"></i>
                                                        </div>
                                                    </div>
                                                </div>   
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Agama</div>
                                                        <input type="text" id="unit" name="agama" value="<?php echo $agama ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Pendidikan</div>
                                                        <input type="text" id="unit" name="pnddkn" value="<?php echo $pnddkn ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-certificate"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Hobby</div>
                                                        <input type="text" id="unit" name="hobby" value="<?php echo $hobby ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-music"></i>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Status</div>
                                                        <input type="text" id="unit" name="status" value="<?php echo $status ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-info-circle"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Jumlah Keluarga</div>
                                                        <input type="text" id="unit" name="jmlhkeluarga" value="<?php echo $jmlhkeluarga ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">BPJS</div>
                                                        <input type="text" id="unit" name="bpjs" value="<?php echo $bpjs ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-road"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Rekening</div>
                                                        <input type="text" id="unit" name="rekening" value="<?php echo $rekening ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-credit-card"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Foto Profil</div>
                                                        <input type="file" id="unit" name="gbr" value="<?php echo $gbr ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-image"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>
                                                </form>
                                                </div>
                                                <div class="tab-pane fade" id="edit-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <form action="<?php echo base_url(). 'admin/upd_contact'; ?>" method="post" class="">
                                                <div class="form-group" hidden>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Nomer Karyawan</div>
                                                        <input readonly type="text" id="nopeg" name="nmr" value="<?php echo $nmr ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Email</div>
                                                        <input type="email" id="nama_lengkap" name="email" value="<?php echo $email?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Nomer HP</div>
                                                        <input type="text" id="unit" name="nohp" value="<?php echo $nohp ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-mobile"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Nomer Telepon</div>
                                                        <input type="text" id="password" name="notlp" value="<?php echo $notlp ?>" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>
                                                </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- =========== EDIT ========== -->

                            <!-- <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Edit Data Pegawai</div>
                                    <div class="card-body card-block">                                        
                                        <form action="<?php echo base_url(). 'admin/home/update'; ?>" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Nomer Karyawan</div>
                                                    <input readonly type="text" id="nopeg" name="nopeg" value="<?php echo $nmr ?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Nama</div>
                                                    <input type="text" id="nama_lengkap" name="nama" value="<?php echo $nama?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Unit</div>
                                                    <input type="text" id="nama_panggilan" name="nama_panggilan" value="<?php echo $unit?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Posisi</div>
                                                    <input type="text" id="unit" name="unit" value="<?php echo $posisi ?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Email</div>
                                                    <input type="email" id="password" name="password" value="<?php echo $email ?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div>
                                            <input type="checkbox" onclick="myFunction()"> Show Password
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->

                            <!-- ============ END ========== -->


                            <!-- <div class="col-xl-4"> -->
                                <!-- TASK PROGRESS-->
                                <!-- <div class="task-progress">
                                    <h3 class="title-3">task progress</h3>
                                    <div class="au-skill-container">
                                        <div class="au-progress">
                                            <span class="au-progress__title">Web Design</span>
                                            <div class="au-progress__bar">
                                                <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="90">
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">HTML5/CSS3</span>
                                            <div class="au-progress__bar">
                                                <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="85">
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">WordPress</span>
                                            <div class="au-progress__bar">
                                                <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="95">
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">Support</span>
                                            <div class="au-progress__bar">
                                                <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="95">
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- END TASK PROGRESS-->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- USER DATA-->
                                <!-- <div class="user-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>name</td>
                                                    <td>role</td>
                                                    <td>type</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role admin">admin</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user">user</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option value="">Full Control</option>
                                                                <option value="" selected="selected">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user">user</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option value="">Full Control</option>
                                                                <option value="" selected="selected">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role member">member</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div>
                                </div> -->
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-xl-6">
                                <!-- MAP DATA-->
                                <!-- <div class="map-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-map"></i>map data</h3>
                                    <div class="filters">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Worldwide</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="map-wrap m-t-45 m-b-80">
                                        <div id="vmap" style="height: 284px;"></div>
                                    </div>
                                    <div class="table-wrap">
                                        <div class="table-responsive table-style1">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>United States</td>
                                                        <td>$119,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td>$70,261.65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>United Kingdom</td>
                                                        <td>$46,399.22</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive table-style1">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Germany</td>
                                                        <td>$20,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>France</td>
                                                        <td>$10,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Russian</td>
                                                        <td>$5,366.96</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- END MAP DATA-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            