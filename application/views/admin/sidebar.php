<!-- navbar side -->
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
                        <a href="<?php echo base_url ('admin/admin') ?>"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/c_table_user') ?>"><i class="fa fa-table fa-fw"></i>Data User</a>
                    </li>    
                    <li>
                        <a href="<?php echo base_url ('admin/c_kriteria') ?>"><i class="fa fa-table fa-fw"></i>Kriteria</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-table fa-fw"></i>Sub Kriteria</a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url ('admin/c_harga_mobil') ?>">Sub Kriteria Harga Mobil</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('admin/c_kategori_kendaraan') ?>">Sub Kriteria Kategori Kendaraan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('admin/c_kapasitas_penumpang') ?>">Sub Kriteria Kapasitas Penumpang</a>
                            </li>
                            
                            <li>
                                <a href="<?php echo base_url ('admin/c_purna_jual') ?>">Sub Kriteria Purna Jual</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href=""><i class="fa fa-table fa-fw"></i>Data Mobil</a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url ('admin/Forms') ?>">Input Data Mobil</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url ('admin/c_data_mobil') ?>">Tabel Data Mobil</a>
                            </li>
                        </ul>
                    </li>                
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->