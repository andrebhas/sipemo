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
                             Hasil Rekomendasi Mobil
                        </div>    
                    </div>
                </div>
            </div>


 <div class="row">
                <div class="col-lg-15">
                      <div class="panel panel-default">
                        <div class="panel-body">
 Hasil Input User :<br>
            Harga Mobil : <?php echo $nama_harga_mobili ?><br>
            Kategori Kendaraan : <?php echo $nama_kategori_kendaraan->nama_kategori ?><br>
            Kapasitas Penumpang : <?php echo $nama_kapasitas_penumpang->jumlah_kapasitas ?><br>
            Purna Jual : <?php echo $nama_purna_juali ?><br><br>

<table class="table table-bordered">
    <tr>
        <td colspan="4">Normalisasi</td>
        <td rowspan="3">Nilai SMART</td>
    </tr>
    <tr>
        <td>Harga Mobil</td>
        <td>Kategori Kendaraan</td>
        <td>Kapasitas Penumpang</td>
        <td>Purna Jual</td>
    </tr>
    <tr>
        <td><?php echo $nilaiNormalisasi_harga_mobil ?></td>
        <td><?php echo $nilaiNormalisasi_kategori_kendaraan ?></td>
        <td><?php echo $nilaiNormalisasi_kapasitas_penumpang ?></td>
        <td><?php echo $nilaiNormalisasi_purna_jual ?></td>
    </tr>
    <tr>
        <td><?php echo $nama_harga_mobil->nilai ?></td>
        <td><?php echo $nama_kategori_kendaraan->nilai ?></td>
        <td><?php echo $nama_kapasitas_penumpang->nilai ?></td>
        <td><?php echo $nama_purna_jual->nilai ?></td>
        <td><?php echo $nilaiSmart ?></td>
    </tr>
</table>

            Hasil Akhir : <?php echo "(".$nilaiNormalisasi_harga_mobil."*".$nama_harga_mobil->nilai.") + " ?>
            <?php echo "(".$nilaiNormalisasi_kategori_kendaraan."*".$nama_kategori_kendaraan->nilai.") + " ?>
            <?php echo "(".$nilaiNormalisasi_kapasitas_penumpang."*".$nama_kapasitas_penumpang->nilai.") + " ?>
            <?php echo "(".$nilaiNormalisasi_purna_jual."*".$nama_purna_jual->nilai.") = ".$nilaiSmart ?>

                        </div>
                     </div>
                </div>
</div>



            
            <div class="row">
                <div class="col-lg-15">
                      <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                            <button type="button" class="btn btn-sm btn-danger" onclick="printHistori()">Cetak</button>
                            <br>
                                <table class="table table-hover">
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
                                            <th>Nilai SMART</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        foreach($data_mobil as $dataa){
                                        ?>
                                          <td><?php echo $no++; ?></td>
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
                                            echo "Rp. ".min($range_harga_m[$dataa->id_harga_mobil])." - Rp. ".max($range_harga_m[$dataa->id_harga_mobil]);
                                          ?></td>
                                          <td><?php echo $dataa->nama_kategori; ?></td>
                                          <td><?php echo $dataa->jumlah_kapasitas; ?></td>
                                          <td><?php 
                                            $range_purna_jual = $this->m_kriteria->get_range_purna($dataa->id_purna_jual);
                                            foreach ($range_purna_jual as $r) {
                                                $range_harga_p[$dataa->id_purna_jual][] = $r->harga;
                                            }
                                            echo  "Rp. ".min($range_harga_p[$dataa->id_purna_jual])." - Rp. ".max($range_harga_p[$dataa->id_purna_jual]); 
                                          ?></td>
                                          <td><?php echo $dataa->nilai_smart; ?></td>
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
    function printHistori() {
        var alamat = '<?php echo base_url();?>' + 'member/c_data_mobil/cetak/'+'<?php echo $harga_mobil."/".$kategori_kendaraan."/".$kapasitas_penumpang."/".$purna_jual ?>';
        var printHistoriWindow = window.open(alamat, 'Rekap Histori', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes');
        printHistoriWindow.print();   
        return false;
}
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
