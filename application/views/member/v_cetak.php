<!DOCTYPE html>
<html>
<head>
	<title>Hasil Rekomendasi Mobil</title>
	<link href="<?php echo base_url() ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
</head>
<body>
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
                                          <td><?php echo $dataa->harga_mobil; ?></td>
                                          <td><?php echo $dataa->nama_kategori; ?></td>
                                          <td><?php echo $dataa->jumlah_kapasitas; ?></td>
                                          <td><?php echo $dataa->range_harga; ?></td>
                                    </tbody>
                                       <?php
                                    }
                                    ?>
                                </table>
</body>
</html>