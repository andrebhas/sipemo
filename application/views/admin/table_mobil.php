        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!--  page header -->
                <div class="col-md-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Mobil
                        </div>    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                            
                                <table class= "table-bordered" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mobil</th>
                                            <th>Fitur Keamanan</th>
                                            <th>Fitur Kelengkapan</th>
                                            <th>Warna</th>
                                            <th>Ukuran CC</th>
                                            <th>Transmisi</th>
                                            <th>Harga Mobil</th>
                                            <th>Kategori Kendaraan</th>
                                            <th>Kapasitas Penumpang</th>
                                            <th>Purna Jual</th>
                                            <th>Total Nilai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        foreach($data_mobil as $dataa){
                                        ?>
                                        <tr>
                                          <td><?php echo $no++ ?></td>
                                          <td><?php echo $dataa->nama_mobil; ?></td>
                                          <td><?php echo $dataa->fitur_keamanan; ?></td>
                                          <td><?php echo $dataa->fitur_kelengkapan; ?></td>
                                          <td><?php echo $dataa->warna; ?></td>
                                          <td><?php echo $dataa->ukuran_cc; ?></td>
                                          <td><?php echo $dataa->transmisi; ?></td>
                                          <td><?php 
                                            $range_harga_mobil = $this->m_kriteria->get_range_harga($dataa->id_harga_mobil);
                                            foreach ($range_harga_mobil as $r) {
                                                $range_harga_m[$dataa->id_harga_mobil][] = $r->harga;
                                            }
                                            $nama_harga_mobili = "Rp. ".min($range_harga_m[$dataa->id_harga_mobil])." - Rp. ".max($range_harga_m[$dataa->id_harga_mobil]);
                                            echo  $nama_harga_mobili;
                                          ?></td>
                                          <td><?php echo $dataa->nama_kategori; ?></td>
                                          <td><?php echo $dataa->jumlah_kapasitas; ?></td>
                                          <td><?php 
                                            $range_purna_jual = $this->m_kriteria->get_range_purna($dataa->id_purna_jual);
                                            foreach ($range_purna_jual as $r) {
                                                $range_harga_p[$dataa->id_purna_jual][] = $r->harga;
                                            }
                                            $nama_purna_juali = "Rp. ".min($range_harga_p[$dataa->id_purna_jual])." - Rp. ".max($range_harga_p[$dataa->id_purna_jual]);
                                            echo $nama_purna_juali; 
                                          ?></td>
                                          <td><?php echo $dataa->nilai_smart; ?></td>
                                          <td>
                                          <a class="btn btn-warning btn-circle fa fa-link" href="<?php echo site_url('admin/c_data_mobil/update/'.$dataa->id_smart_mobil) ?>"></a>
                                          
                                          
                    <!-- Dialog Modal -->
                                            <div class="modal fade" id="myModalhapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="myModalLabel2">Delete Data Mobil</h4>
                                                        </div>
                                                    <div class="modal-body">
                                                    
                                                <form action="<?php echo  base_url(); ?>admin/c_data_mobil/delete" method="post">
                                                    Apakah Anda yakin akan menghapus data ini?
                                                <div class="modal-footer">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                        <input type="hidden" class="form-control" name="id_smart_mobil" id="id_smart_mobil">
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
                                            <a href="javascript:void(0)" id="<?php echo $dataa->id_smart_mobil; ?>" data-toggle="modal" data-target="#myModalhapus" title="Delete" class="hapus btn btn-danger btn-circle"><i class="fa fa-times"></i></a>
                                            </form>
                                          </td>
                                        </tr>
                                       <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </div>
        

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
                 $('#id_smart_mobil').val(data[0]);
           });
 
             });
            </script>
 <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable({
                responsive: true
            });
        });
    </script>

    

</body>

</html>
