        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="<?php echo  base_url();?>assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><?php echo $this->session->userdata('username'); ?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
        
                    <li class="">
                        <a href="<?php echo base_url ('member/member') ?>"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url ('member/c_kriteria') ?>"><i class="fa fa-table fa-fw"></i>Kriteria</a>
                    </li> -->
                   <!--  <li>
                        <a href=""><i class="fa fa-table fa-fw"></i>Sub Kriteria</a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('member/c_merek_mobil') ?>">Sub Kriteria Merek Mobil</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('member/c_kategori_kendaraan') ?>">Sub Kriteria Kategori Kendaraan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('member/c_harga_mobil') ?>">Sub Kriteria Harga Mobil</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('member/c_ukuran_cc') ?>">Sub Kriteria Ukuran CC</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('member/c_transmisi') ?>">Sub Kriteria Transmisi</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('member/c_kapasitas_penumpang') ?>">Sub Kriteria Kapasitas Penumpang</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('member/c_desain_interior') ?>">Sub Kriteria Desain Interior</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('member/c_purna_jual') ?>">Sub Kriteria Purna Jual</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('member/c_warna') ?>">Sub Kriteria Warna</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('member/c_keamanan_kelengkapan') ?>">Sub Kriteria Keamanan dan Kelengkapan</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href=""><i class="fa fa-table fa-fw"></i>Data Perangkingan Pemilihan Mobil</a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('member/forms') ?>">Input Data Mobil</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('member/c_data_mobil') ?>">Tabel Data Mobil</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo base_url ('member/forms/perangkingan') ?>">Perangkingan</a>
                            </li> -->
                        </ul>
                    </li>
                    
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side