        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
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
            <!--tabel perhitungan -->
                    <form action="<?php echo base_url(). 'member/c_data_mobil/rangking'; ?>" role="form" method="post">
                                        <div class="form-group">
                                            <label>Harga Mobil</label>
                                            <select id="harga_mobil" name="id_harga_mobil" class="form-control" required="required">
                                            <option value="">Pilih....</option>
                                            <?php 
                                            foreach ($harga_mobil->result_array() as $row) {
                                                $range = $this->m_kriteria->get_range_harga($row['id_harga_mobil']);
                                            ?>
                                                <option value="<?php echo $row['id_harga_mobil'] ?>">
                                            <?php
                                                $c_range = count($range);
                                                $i = 0;
                                                $first = true;
                                                foreach ($range as $r) {
                                                    $ar_range[$row['id_harga_mobil']][] = $r->harga;
                                                }
                                                echo "Rp. ".min($ar_range[$row['id_harga_mobil']])." - Rp. ".max($ar_range[$row['id_harga_mobil']]);
                                            ?> 
                                                </option>
                                            <?php } ?>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Kategori Kendaraan</label>
                                            <select id="kategori_kendaraan" name="id_kategori_kendaraan" class="form-control" required="required">
                                            <option value="">Pilih....</option>
                                               <?php foreach ($kategori_kendaraan->result_array() as $row) {
                                            for ($i = 0; $i < count($row); $i++)?> 
                                            <option value="<?php echo $row['id_kategori_kendaraan'] ?>"><?php echo $row['nama_kategori']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Kapasitas Penumpang</label>
                                            <select id="kapasitas_penumpang" name="id_kapasitas_penumpang" class="form-control" required="required">
                                            <option value="">Pilih....</option>
                                               <?php foreach ($kapasitas_penumpang->result_array() as $row) {
                                            for ($i = 0; $i < count($row); $i++)?> 
                                            <option value="<?php echo $row['id_kapasitas_penumpang'] ?>"><?php echo $row['jumlah_kapasitas']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Purna Jual</label>
                                            <select id="purna_jual" name="id_purna_jual" class="form-control" required="required">
                                            <option value="">Pilih....</option>
                                              <?php foreach ($purna_jual->result_array() as $row) { ?> 
                                            <option value="<?php echo $row['id_purna_jual'] ?>"><?php echo $row['harga']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>"/>           
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
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
<script type="text/javascript">
    $('#kategori_kendaraan').on('change', function() {
      var isi = this.value;
      if (isi == 'SK203') {
        $("#kapasitas_penumpang option[value='SK301']").hide();
        $("#kapasitas_penumpang option[value='SK302']").hide();
        $("#kapasitas_penumpang option[value='SK303']").hide();
        $("#kapasitas_penumpang option[value='SK304']").show();
        $("#kapasitas_penumpang option[value='SK305']").show();
      } else if (isi == 'SK201'){
        $("#kapasitas_penumpang option[value='SK301']").hide();
        $("#kapasitas_penumpang option[value='SK302']").hide();
        $("#kapasitas_penumpang option[value='SK303']").hide();
        $("#kapasitas_penumpang option[value='SK304']").show();
        $("#kapasitas_penumpang option[value='SK305']").show();
      } else if (isi == 'SK202'){
        $("#kapasitas_penumpang option[value='SK301']").show();
        $("#kapasitas_penumpang option[value='SK302']").show();
        $("#kapasitas_penumpang option[value='SK303']").show();
        $("#kapasitas_penumpang option[value='SK304']").hide();
        $("#kapasitas_penumpang option[value='SK305']").hide();
      } else {
        $("#kapasitas_penumpang option[value='SK301']").show();
        $("#kapasitas_penumpang option[value='SK302']").show();
        $("#kapasitas_penumpang option[value='SK303']").show();
        $("#kapasitas_penumpang option[value='SK304']").hide();
        $("#kapasitas_penumpang option[value='SK305']").hide();
      }
    })
</script>    

</body> 
</html>
