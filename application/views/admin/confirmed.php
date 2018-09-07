        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <div class="account2">
                <div class="image img-cir img-120">                        
                    <img src="<?php echo base_url().'img-profile/'. $gbr ?>" />
                </div>
                <h4 class="name" align="center"><?php echo $nama ?></h4>
            </div>
            <!-- END BREADCRUMB-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">What's Changed?</div>
                                    <div class="card-body">
                                        <?php 
                                        if($nama != $nama2){
                                            echo "Nama | ";
                                        } 
                                        if($unit != $unit2){
                                            echo "Unit | ";
                                        }
                                        if($posisi != $posisi2){
                                            echo "Posisi | ";
                                        }
                                        if($pnglman != $pnglman2){
                                            echo "Pengalaman | ";
                                        }
                                        if($tmptlhr != $tmptlhr2 || $tgllhr != $tgllhr2){
                                            echo "TTL | ";
                                        }
                                        if($alamat != $alamat2){
                                            echo "Alamat | ";
                                        }
                                        if($kodepos != $kodepos){
                                            echo "Kodepos | ";
                                        }
                                        if($gender != $gender2){
                                            echo "Jenis Kelamin | ";
                                        }
                                        if($agama != $agama2){
                                            echo "Agama | ";
                                        }
                                        if($pnddkn != $pnddkn2){
                                            echo "Pendidikan | ";
                                        }
                                        if($hobby != $hobby2){
                                            echo "Hobby | ";
                                        }
                                        if($status != $status2){
                                            echo "Status | ";
                                        }
                                        if($jmlhkeluarga != $jmlhkeluarga2){
                                            echo "Jumlah Keluarga | ";
                                        }
                                        if($bpjs != $bpjs2){
                                            echo "BPJS | ";
                                        }
                                        if($rekening != $rekening2){
                                            echo "Rekening | ";
                                        }
                                        if($email != $email2){
                                            echo "Email | ";
                                        }
                                        if($nohp != $nohp2){
                                            echo "Nomor HP | ";
                                        }
                                        if($notlp != $notlp2){
                                            echo "Nomor Telepon | ";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <!-- ============= SHOW ORIGINAL DATA ============= -->

                        <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Original Data Profil</div>
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
                            <!-- =============== SHOW UPDATED DATA ============= -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Updated Data Profil</div>
                                    <div class="card-body">
                                        <div class="default-tab">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home-d" role="tab" aria-controls="nav-home"
                                                     aria-selected="true">Work</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile-d" role="tab" aria-controls="nav-profile"
                                                     aria-selected="false">Personal</a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact-d" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">Contact</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home-d" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <h5>Nomor Karyawan: </h5> <?php echo $nmr2 ?>
                                                    <h5>Unit: </h5> <?php echo $unit2 ?>
                                                    <h5>Posisi: </h5> <?php echo $posisi2 ?>
                                                    <h5>Pengalaman: </h5> <?php echo $pnglman2 ?>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile-d" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <h5>Nama: </h5> <?php echo $nama2 ?>
                                                    <h5>TTL: </h5> <?php echo $tmptlhr2.", ".$tgllhr2 ?>
                                                    <h5>Alamat: </h5> <?php echo $alamat2 ?>
                                                    <h5>Kodepos: </h5> <?php echo $kodepos2 ?>
                                                    <h5>Jenis Kelamin: </h5> <?php echo $gender2 ?>
                                                    <h5>Agama: </h5> <?php echo $agama2 ?>
                                                    <h5>Pendidikan: </h5> <?php echo $pnddkn2 ?>
                                                    <h5>Hobby: </h5> <?php echo $hobby2 ?>
                                                    <h5>Status: </h5> <?php echo $status2 ?>
                                                    <h5>Jumlah Keluarga: </h5> <?php echo $jmlhkeluarga2 ?>
                                                    <h5>BPJS: </h5> <?php echo $bpjs2 ?>
                                                    <h5>Rekening: </h5> <?php echo $rekening2 ?>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact-d" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <h5>Email: </h5> <?php echo $email2 ?>
                                                    <h5>Nomor HP: </h5> <?php echo $nohp2 ?>
                                                    <h5>Nomor Telepon: </h5> <?php echo $notlp2 ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->