<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url();?>assets/admin/img/logo/logosisi.png" rel="icon">
  <title>Administrator</title>
  <link href="<?php echo base_url();?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/admin/css/ruang-admin.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- chart -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Selamat Datang , Admin</h1>
            
          </div>
            
          <div class="row">
                    <div class="col-xl-4 col-lg-2 col-md-4 col-sm-3 col-6">      
                    <a class="nav-link" href="<?php echo base_url('super_admin/aksi_super_admin/tampil_data_login') ?>">                 
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">User</h5>
                                        <h2 class="mb-1"><?php echo $login ?> Orang</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>      
                    </a>                   
                    </div>   
                                  
                    <div class="col-xl-4 col-lg-2 col-md-4 col-sm-3 col-6">   
                    <a class="nav-link" href="<?php echo base_url('super_admin/aksi_super_admin_jawaban/sudah_isi_jawaban') ?>">                    
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Sudah Mengisi Quisoner</h5>
                                        <h2 class="mb-1"><?php echo $sudah_isi_jawaban ?> Orang</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div> 
                    </a>                      
                    </div>

                    <div class="col-xl-4 col-lg-2 col-md-4 col-sm-3 col-6">   
                    <a class="nav-link" href="<?php echo base_url('super_admin/aksi_super_admin_jawaban/belum_isi_jawaban') ?>">                    
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Belum Mengisi Quisoner</h5>
                                        <h2 class="mb-1"><?php echo $belum_isi_jawaban ?> Orang</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div> 
                    </a>                      
                    </div>

                    <div class="col-xl-4 col-lg-2 col-md-4 col-sm-3 col-6">  
                    <a class="nav-link" href="<?php echo base_url('super_admin/aksi_super_admin_pertanyaan') ?>">                        
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Total Pertanyaan</h5>
                                        <h2 class="mb-1"><?php echo $pertanyaan ?> Pertanyaan</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>  
                    </a>                     
                    </div>
            </div>
          
          </div>


            


  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
   

      <!-- modal edit -->
      <!-- modal delete -->
    </body>

  <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  

  <!-- Page level custom scripts -->
  <!-- <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script> -->

</body>

</html>