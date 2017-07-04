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
                            Edit Nilai Purna Jual
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php if($purna_jual){ ?>
                                    <form action="<?php echo base_url(). 'admin/c_purna_jual/update_aksi'; ?>" role="form" method="post">
                                        <div class="form-group">
                                            <label>Purna Jual</label>
                                            <input type="hidden" name="id_purna_jual" value="<?php echo $purna_jual->id ?>">
                                            <input type="number" id="range_harga" name="range_harga" class="form-control" value="<?php echo $purna_jual->harga ?>">
                                            <p class="help-block">Masukkan sub kriteria yang diinginkan.</p>
                                        </div>     
                                        <div class="form-group">
                                            <label>Nilai</label>
                                            <select id="nilai" name="nilai" class="form-control" required="required">
                                                <option value="">Pilih...</option>
                                                <?php
                                                foreach ($sub_purna_jual as $d) {
                                                    if($purna_jual->id_purna_jual == $d->id_purna_jual){
                                                        $sel = "selected";
                                                    } else {
                                                        $sel = "";
                                                    }
                                                    echo '<option value="'.$d->id_purna_jual.'" '.$sel.'>'.$d->nilai.'</option>';
                                                }
                                                ?>
                                            </select>
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
