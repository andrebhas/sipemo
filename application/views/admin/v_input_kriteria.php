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
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="<?php echo base_url(). 'admin/c_kriteria/tambah_aksi'; ?>" role="form" method="post">
                                        <div class="form-group">
                                            <label>Nama Kriteria</label>
                                            <input id="kriteria" name="kriteria" class="form-control">
                                            <p class="help-block">Masukkan kriteria yang diinginkan.</p>
                                        </div>          
                                        <div class="form-group">
                                            <label>Bobot</label>
                                            <input id="bobot" name="bobot" class="form-control">
                                            <p class="help-block">Masukkan bobot yang diinginkan.</p>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Normalisasi</label>
                                            <input id="normalisasi" name="normalisasi" class="form-control">
                                            <p class="help-block">Hasil Normalisasi.</p>
                                        </div> -->  
                                        <button type="submit" class="btn btn-primary">Submit Button</button>
                                    </form>
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
