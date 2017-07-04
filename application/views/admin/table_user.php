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
                             <i class="fa fa-bar-chart-o fa-fw"></i>Data User
                        </div>    
                    </div>
                </div> 
            </div>
            <a class="btn btn-primary" href="<?php echo site_url()?>/admin/c_data_user/tambah/">Tambah Data</a>
            <div class="row">
                <div class="col-lg-12">
                      <div class="panel panel-body">
                        <div class="panel-body">
                            <div class="table-responsive">
                            
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        foreach($data_user as $dataa){
                                        ?>
                                          <td><?php echo $no++ ?></td>
                                          <td><?php echo $dataa->username; ?></td>
                                          <td><?php echo $dataa->password; ?></td>
                                          <td><?php echo $dataa->level; ?></td>
                                          <td><a class="btn btn-warning btn-circle fa fa-link" href="<?php echo site_url('admin/c_data_user/update/'.$dataa->id_user) ?>"></a>

                                             <!-- Dialog Modal -->
                    <div class="modal fade" id="myModalhapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel2">Delete Data User</h4>
                                </div>
                            <div class="modal-body">
                            
                        <form action="<?php echo  base_url(); ?>admin/c_data_user/delete" method="post">
                            Apakah Anda yakin akan menghapus data ini?
                        <div class="modal-footer">
                            <div class="box-body">
                                <div class="form-group">
                                <input type="hidden" class="form-control" name="id_user3" id="id_user3">
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
            <a href="javascript:void(0)" id="<?php echo $dataa->id_user; ?>" data-toggle="modal" data-target="#myModalhapus" title="Delete" class="hapus btn btn-danger btn-circle"><i class="fa fa-times"></i></a>
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
                 $('#id_user3').val(data[0]);
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
