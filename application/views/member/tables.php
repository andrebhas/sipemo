        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-20">
                    <h1 class="page-header">Tables</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-20">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Mobil
                        </div>    
                    </div>
                </div>
                <a class="btn btn-primary" href="<?php echo site_url()?>/member/c_data_mobil/detail_rangking/">Detail</a>
            </div>
            <div class="row">
                <div class="col-lg-20">
                      <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mobil</th>
                                            <th>Merek Mobil</th>
                                            <th>Kategori Kendaraan</th>
                                            <th>Harga Mobil</th>
                                            <th>Transmisi</th>
                                            <!-- <th>Ukuran CC</th> -->
                                            <!-- <th>Kapasitas Penumpang</th>  -->
                                           <!--  <th>Desain Interior</th> -->
                                            <th>Purna Jual</th>
                                            <th>Warna</th>
                                            <!-- <th>Keamanan Kelengkapan</th> -->
                                            <th>Total Nilai</th>
                                            <th>Action Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        foreach($data_mobil as $dataa){
                                        ?>
                                          <td><?php echo $no++ ?></td>
                                          <td><?php echo $dataa->nama_mobil; ?></td>
                                          <td><?php echo $dataa->nama_merek; ?></td>
                                          <td><?php echo $dataa->nama_kategori; ?></td>
                                          <td><?php echo $dataa->harga_mobil; ?></td>
                                          <td><?php echo $dataa->jenis_transmisi; ?></td>
                                         <!--  <td><?php echo $dataa->ukuran_cc; ?></td> -->
                                          <!-- <td><?php echo $dataa->kapasitas_penumpang; ?></td> -->
                                         <!--  <td><?php echo $dataa->desain_interior; ?></td> -->
                                          <td><?php echo $dataa->purna_jual; ?></td>
                                          <td><?php echo $dataa->jenis_warna; ?></td>
                                         <!--  <td><?php echo $dataa->keamanan_kelengkapan; ?></td> -->
                                          <td><?php echo $dataa->total; ?></td>
                                          <td>
                                          
                    <!-- Dialog Modal -->
                    <div class="modal fade" id="myModalhapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel2">Delete Data Mobil</h4>
                                </div>
                            <div class="modal-body">
                            
                        <form action="<?php echo  base_url(); ?>member/c_data_mobil/delete" method="post">
                            Apakah Anda yakin akan menghapus data ini?
                        <div class="modal-footer">
                            <div class="box-body">
                                <div class="form-group">
                                <input type="hidden" class="form-control" name="no_pemilih3" id="no_pemilih3">
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary btn-sm">YA</button>
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">TIDAK</button>
                        </div> 
                        </form>
                            </div>
                            </div>
                        </div>
                    </div>
                                          <!-- Modal Delete -->
            <a href="javascript:void(0)" id="<?php echo $dataa->no_pemilih; ?>" data-toggle="modal" data-target="#myModalhapus" title="Delete" class="hapus btn btn-danger btn-circle"><i class="fa fa-times"></i></a>
                                          </td>
                                    </tbody>
                                       <?php
                                    }
                                    ?>
                                </table>
                                </form>
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
                 $('#no_pemilih3').val(data[0]);
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
