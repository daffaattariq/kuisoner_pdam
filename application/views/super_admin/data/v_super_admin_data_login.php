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
</head>

<body id="page-top">
  <div id="wrapper">
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
            <h1 class="h3 mb-0 text-gray-800">Tabel Data Login   </h1>
           
            <ol class="breadcrumb">

             <button  class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#tambahmembers" id="#modalCenter" >
                    <span class="icon text-white-50">
                          <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Added Login </span>
                </button>

          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            
            <div class="col-lg-12">
             
            
              <div class="card mb-4">
                <div class="table-responsive p-3">   

               
                           
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Number</th>   
                        <th>Nama</th>                   
                        <th>Jabatan</th>                                                 
                        <th>Username</th>                     
                                                                                         
                        <th>Action</th>                        
                        
                      </tr>
                    </thead>
                   <!--  <tfoot>
                    <tr>
                        <th>Id Employee</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Division</th>
                        <th>Password</th>
                        <th>Action</th>
                      </tr>
                    </tfoot> -->
                    <tbody>
                      <?php
                        $number = 0;

                        foreach($data as $data_login)
                        {
                          $number++;
                        
                      ?>
                        <tr>
                            <td><?php echo $number ?></td>    
                            <td><?php echo $data_login['nama'] ?></td>
                            <td><?php echo $data_login['jabatan'] ?></td>                        
                            <td><?php echo $data_login['username'] ?></td> 
                           
                            <td>
                                <a href="<?php echo base_url('super_admin/aksi_super_admin/tampil_edit_login')?>?id_login=<?php echo $data_login['id_login']?>" 
                                class="btn btn-dark"  ><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('super_admin/aksi_super_admin/hapus_login')?>?id_login=<?php echo $data_login['id_login'] ?>"
                                onclick="return confirm('Yakin Hapus User <?php echo $data_login['username'] ?>?')" 
                                class="btn btn-danger" ><i class="fas fa-trash"></i></a>
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
          <!--Row-->

        </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
    <!-- modal tambah members -->
        <div class="modal fade" id="tambahmembers" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Add Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                
                
                <form action="<?php echo base_url('super_admin/aksi_super_admin/tambah_login') ?>" method="post">
                    
                    <div class="form-group">
                      <input type="text" class="form-control" id="username"
                        placeholder="username"required="" name="username" >                        
                    </div>
                   
                    <div class="form-group">
                      <input type="password" class="form-control" id="password"
                        placeholder="password"required="" name="password" >
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" id="nama"
                        placeholder="Nama"required="" name="nama" >                        
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" id="jabatan"
                        placeholder="Jabatan"required="" name="jabatan" >                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
              </div>
            </div>
        </div>
    </body>

  <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>