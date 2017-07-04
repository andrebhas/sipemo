<!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Nilai Keamanan Kelengkapan
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php foreach($keamanan_kelengkapan as $dataa){ ?>
                                    <form action="<?php echo base_url(). 'admin/c_keamanan_kelengkapan/update_aksi'; ?>" role="form" method="post">
                                        <div class="form-group">
                                            <label>Keamanan Kelengkapan</label>
                                            <input type="hidden" name="id_keamanan_kelengkapan" value="<?php echo $dataa->id_keamanan_kelengkapan ?>">
                                            <input id="jmlh_keamanan_kelengkapan" name="jmlh_keamanan_kelengkapan" class="form-control" value="<?php echo $dataa->jmlh_keamanan_kelengkapan ?>">
                                            <p class="help-block">Masukkan sub kriteria yang diinginkan.</p>
                                        </div>     
                                        <div class="form-group">
                                            <label>Nilai</label>
                                            <input type="hidden" name="id_keamanan_kelengkapan" value="<?php echo $dataa->id_keamanan_kelengkapan ?>">
                                            <input id="nilai_keamanan_kelengkapan" name="nilai_keamanan_kelengkapan" class="form-control" value="<?php echo $dataa->nilai_keamanan_kelengkapan ?>">
                                            <p class="help-block">Masukkan nilai yang diinginkan.</p>
                                        </div>                                       
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    <?php } ?>
                                </div>  
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
<!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url() ?>assets/scripts/sipemo.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url() ?>assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
