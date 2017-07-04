<!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">User Profile Forms</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Your Profile
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="<?php echo base_url(). 'admin/c_data_user/tambah_aksi'; ?>" role="form" method="post">                                              
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input id="username" name="username" class="form-control" required="required"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input id="password" name="password" class="form-control" required="required"> 
                                        </div>                                         
                                        <div class="form-group">
                                            <label>Level</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="level" id="level" value="Admin" required="required">Admin
                                                </label>
                                            </div>
                                            <!-- <div class="radio">
                                                <label>
                                                    <input type="radio" name="level" id="level" value="member" required="required">Member
                                                </label>
                                            </div> -->  
                                        </div>          
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
