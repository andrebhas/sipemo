<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPEMO | ADMIN</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo  base_url();?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <link href="<<?php echo base_url();?>assets/plugins/timeline/timeline.css" rel="stylesheet" />
   </head>
<body>


        <div id="page-wrapper">
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-15">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                 <!-- end  page header -->
            </div>
                <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class=""></i>Sistem Pemilihan Mobil
                        </div>

                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Deskripsi Sistem</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>SIPEMO (Sistem Pemilihan Mobil) merupakan sebuah sistem yang dibangun untuk mendukung mengambil keputusan calon pembeli mobil yang kesulitan menentukan mobil yang diinginkannya.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">2 Hak Akses</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Admin</p>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Fitur Sistem</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Mengelola Kriteria (Admin)</p>
                                            <p>Melakukan Perangkingan (Member)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success">
                                        <i class="fa fa-thumbs-up"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Output Sistem</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Sistem akan menghasilkan output perangkingan mobil atau hasil rekomendasi mobil yang member harapkan.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

            </div>
        <!-- end page-wrapper -->
    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url() ?>assets/scripts/sipemo.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url() ?>assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    

</body>

</html>
