        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Nilai Sub Kriteria Warna
                        </div>    
                    </div>
                    <a class="btn btn-primary" href="<?php echo site_url()?>/admin/c_warna/tambah/">Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                      <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                            
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Warna</th>
                                            <th>Nilai</th>
                                            <th>Action Ubah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        foreach($warna as $dataa){
                                        ?>
                                          <td><?php echo $no++ ?></td>
                                          <td><?php echo $dataa->jenis_warna; ?></td>
                                          <td><?php echo $dataa->nilai_warna; ?></td>
                                          <td><a class="btn btn-warning btn-circle fa fa-link" href="<?php echo site_url('admin/c_warna/update/'.$dataa->id_warna) ?>"></a>
                                          </td>
                                    </tbody>
                                       <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
        jQuery(document).ready(function(){
            //$(function(){
            $('.hapus').click(function(){
                //alert("aaa");
                var data=$(this).attr("id").split(";");
                 $('#id_warna3').val(data[0]);
           });
 
             });
            </script>
 <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

    

</body>

</html>
