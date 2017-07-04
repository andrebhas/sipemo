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
                            Edit Nilai Kategori Kendaraan
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php foreach($kategori_kendaraan as $dataa){ ?>
                                    <form action="<?php echo base_url(). 'admin/c_kategori_kendaraan/update_aksi'; ?>" role="form" method="post">
                                        <div class="form-group">
                                            <label>Kategori Kendaraan</label>
                                            <input type="hidden" name="id_kategori_kendaraan" value="<?php echo $dataa->id_kategori_kendaraan?>">
                                            <input id="nama_kategori" name="nama_kategori" class="form-control" value="<?php echo $dataa->nama_kategori ?>" required="required">
                                            <p class="help-block">Masukkan sub kriteria yang diinginkan.</p>
                                        </div>     
                                        <div class="form-group">
                                            <label>Nilai</label>
                                            <input type="hidden" name="id_kategori_kendaraan" value="<?php echo $dataa->id_kategori_kendaraan ?>">
                                            <input id="nilai" name="nilai" class="form-control" value="<?php echo $dataa->nilai ?>" required="required">
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
