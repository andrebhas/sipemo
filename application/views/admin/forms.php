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
                                    <form action="<?php echo base_url(). 'admin/c_data_mobil/tambah_aksi'; ?>" role="form" method="post">
                                        <div class="form-group">
                                            <label>Nama Mobil</label>
                                            <input id="nama_mobil" name="nama_mobil" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Fitur Keamanan</label>
                                            <input id="fitur_keamanan" name="fitur_keamanan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fitur Kelengkapan</label>
                                            <input id="fitur_kelengkapan" name="fitur_kelengkapan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Warna</label>
                                            <input id="warna" name="warna" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Ukuran CC</label>
                                            <input id="ukuran_cc" name="ukuran_cc" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Transmisi</label>
                                            <input id="transmisi" name="transmisi" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Mobil</label>
                                            <select id="harga_mobil" name="id_harga_mobil" class="form-control" required="required">
                                            <option value="">Pilih....</option>
                                            <?php 
                                            foreach ($harga_mobil->result_array() as $row) {
                                                $range = $this->m_kriteria->get_range_harga($row['id_harga_mobil']);
                                            ?>
                                                <option value="<?php echo $row['id_harga_mobil'] ?>"
                                            <?php
                                                foreach ($range as $r) {
                                                    $ar_range[$row['id_harga_mobil']][] = $r->harga;
                                                }
                                                echo " harga_min='".min($ar_range[$row['id_harga_mobil']])."' >";
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
                                            <?php 
                                               foreach ($kategori_kendaraan->result_array() as $row) {
                                            ?> 
                                            <option value="<?php echo $row['id_kategori_kendaraan'] ?>"><?php echo $row['nama_kategori']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Kapasitas Penumpang</label>
                                            <select id="kapasitas_penumpang" name="id_kapasitas_penumpang" class="form-control" required="required">
                                            <option value="">Pilih....</option>
                                               <?php 
                                               foreach ($kapasitas_penumpang->result_array() as $row) {
                                                ?> 
                                            <option value="<?php echo $row['id_kapasitas_penumpang'] ?>"><?php echo $row['jumlah_kapasitas']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Purna Jual</label>
                                            <select id="purna_jual" name="id_purna_jual" class="form-control" required="required">
                                            <option value="">Pilih....</option>
                                             
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
        var harga_mobil = $('#harga_mobil option:selected', this).attr('harga_min');
    $('#harga_mobil').on('change', function() {
        $("#purna_jual option").remove();
        var element = $("option:selected", this);
        var myTag = element.attr("harga_min");
        var link = '<?php echo base_url() ?>'+'member/member/json_purna_jual/'+myTag;
        $.getJSON( link, function( data ) {
            $.each( data, function( key, val ) {
                $('#purna_jual').append('<option value="'+val.id_purna_jual+'">Rp. '+val.min_purna+' - Rp.'+val.max_purna+'</option>');
            });
        });
    });

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
