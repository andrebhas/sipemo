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
                            Input Data Mobil
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="<?php echo base_url(). 'admin/c_data_mobil/update_aksi/'.$id_smart_mobil; ?>" role="form" method="post">
                                        <div class="form-group">
                                            <label>Nama Mobil</label>
                                            <input id="nama_mobil" name="nama_mobil" class="form-control" value="<?php echo $nama_mobil ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Fitur Keamanan</label>
                                            <input id="fitur_keamanan" name="fitur_keamanan" class="form-control" value="<?php echo $fitur_keamanan ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Fitur Kelengkapan</label>
                                            <input id="fitur_kelengkapan" name="fitur_kelengkapan" class="form-control" value="<?php echo $fitur_kelengkapan ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Warna</label>
                                            <input id="warna" name="warna" class="form-control" value="<?php echo $warna ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Ukuran CC</label>
                                            <input id="ukuran_cc" name="ukuran_cc" class="form-control" value="<?php echo $ukuran_cc ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Transmisi</label>
                                            <input id="transmisi" name="transmisi" class="form-control" value="<?php echo $transmisi ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Mobil</label>
                                            <select id="harga_mobil" name="id_harga_mobil" class="form-control">
                                            <?php foreach ($harga_mobil->result_array() as $row) {
                                            for ($i = 0; $i < count($row); $i++)?> 
                                            <option  <?php if($id_harga_mobil==$row['id_harga_mobil']){echo "selected";} ?> value="<?php echo $row['id_harga_mobil'] ?>" ><?php echo $row['harga_mobil']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Kategori Kendaraan</label>
                                            <select id="kategori_kendaraan" name="id_kategori_kendaraan" class="form-control">
                                               <?php foreach ($kategori_kendaraan->result_array() as $row) {
                                            for ($i = 0; $i < count($row); $i++)?> 
                                            <option <?php if($id_kategori_kendaraan==$row['id_kategori_kendaraan']){echo "selected";} ?> value="<?php echo $row['id_kategori_kendaraan'] ?>"><?php echo $row['nama_kategori']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Kapasitas Penumpang</label>
                                            <select id="kapasitas_penumpang" name="id_kapasitas_penumpang" class="form-control">
                                               <?php foreach ($kapasitas_penumpang->result_array() as $row) {
                                            for ($i = 0; $i < count($row); $i++)?> 
                                            <option <?php if($id_kapasitas_penumpang==$row['id_kapasitas_penumpang']){echo "selected";} ?> value="<?php echo $row['id_kapasitas_penumpang'] ?>"><?php echo $row['jumlah_kapasitas']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Purna Jual</label>
                                            <select id="purna_jual" name="id_purna_jual" class="form-control">
                                              <?php foreach ($purna_jual->result_array() as $row) {
                                            for ($i = 0; $i < count($row); $i++)?> 
                                            <option <?php if($id_purna_jual==$row['id_purna_jual']){echo "selected";} ?> value="<?php echo $row['id_purna_jual'] ?>"><?php echo $row['range_harga']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>"/>           
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
