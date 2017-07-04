        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-15">
                    <h1 class="page-header">Tables</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-15">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Perangkingan Mobil
                        </div>    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-15">
                      <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                            
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mobil</th>
                                            <th>Merek Mobil</th>
                                            <th>Kategori Kendaraan</th>
                                            <th>Harga Mobil</th>
                                            <th>Transmisi</th>
                                            <th>Ukuran CC</th>
                                            <th>Kapasitas Penumpang</th>
                                            <th>Desain Interior</th>
                                            <th>Purna Jual</th>
                                            <th>Warna</th>
                                            <th>Keamanan Kelengkapan</th>
                                            <th>Total Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        foreach($pemilih as $dataa){
                                        ?>
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $dataa->nama_mobil; ?></td>
                                          <td><?php echo $dataa->nama_merek; ?></td>
                                          <td><?php echo $dataa->nama_kategori; ?></td>
                                          <td><?php echo $dataa->harga_mobil; ?></td>
                                          <td><?php echo $dataa->jenis_transmisi; ?></td>
                                          <td><?php echo $dataa->ukuran_cc; ?></td>
                                          <td><?php echo $dataa->kapasitas_penumpang; ?></td>
                                          <td><?php echo $dataa->desain_interior; ?></td>
                                          <td><?php echo $dataa->purna_jual; ?></td>
                                          <td><?php echo $dataa->jenis_warna; ?></td>
                                          <td><?php echo $dataa->keamanan_kelengkapan; ?></td>
                                          <td><?php echo $dataa->total; ?></td>
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
    <script>
        jQuery(document).ready(function(){
            //$(function(){
            $('.hapus').click(function(){
                //alert("aaa");
                var data=$(this).attr("id").split(";");
                 $('#id_mobil3').val(data[0]);
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
