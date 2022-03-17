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
           
            <h1 class="h3 mb-0 text-gray-800">Tabel Data Pertanyaan   </h1>
           
            <ol class="breadcrumb">


          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            
            <div class="col-lg-12">
             
            
              <div class="card mb-4">
                <div class="table-responsive p-3">   

                <form action="<?php echo base_url('user/aksi_user_kuisoner/save_jawaban') ?>" method ="post">          
                  <table class="table align-items-center table-flush table-hover" id="">
                    <thead class="thead-light">
                      <tr>
                        <th>Number</th>   
                        <th>Pertanyaan</th>                   
                        <th>Kategori Pertanyaan</th>     
                        <th> Jawaban </th>                                            

                      
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                        $number = 0;
                        $number_kritik = 0;
                        $cek_pertanyaan = 'Performance';

                        foreach($data as $data_pertanyaan)
                        {
                          $number++;
                          if($cek_pertanyaan == $data_pertanyaan['nama_kategori'])
                          {
                        
                      ?>
                        <tr>
                            <td><?php echo $number ?></td>    
                            <td><?php echo $data_pertanyaan['pertanyaan'] ?></td>
                            <td><?php echo $data_pertanyaan['nama_kategori'] ?></td>                        
                            <td>
                                <select name="jawaban<?php echo $number ?>" class="form-control" required>
                                <option value="">Pilih</option>
                                <option value="5">Sangat Setuju</option>
                                <option value="4">Setuju</option>
                                <option value="3">Ragu-Ragu</option>
                                <option value="2">Tidak Setuju</option>
                                <option value="1">Sangat Tidak Setuju</option>
                            </select>
                            </td>                            
                        
                        </tr>
                      <?php
                          }
                          else
                          {
                            $number_kritik++;
                      ?>
                        <tr>
                            <td></td>  
                            <td>
                            <textarea name="ks<?php echo $number_kritik ?>" id="" cols="2" rows="7" class="form-control" 
                            placeholder="Kritik & Saran <?php echo $cek_pertanyaan ?>" ></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td><?php echo $number ?></td>    
                            <td><?php echo $data_pertanyaan['pertanyaan'] ?></td>
                            <td><?php echo $data_pertanyaan['nama_kategori'] ?></td>                        
                            <td>
                                <select name="jawaban<?php echo $number ?>" class="form-control" required>
                                <option value="">Pilih</option>
                                <option value="5">Sangat Setuju</option>
                                <option value="4">Setuju</option>
                                <option value="3">Ragu-Ragu</option>
                                <option value="2">Tidak Setuju</option>
                                <option value="1">Sangat Tidak Setuju</option>
                            </select>
                            </td>                            
                        
                        </tr>
                        
                      <?php
                           
                          }
                          $cek_pertanyaan = $data_pertanyaan['nama_kategori'];
                          
                        }
                      ?>

                        <tr>
                          <?php $number_kritik++; ?>
                            <td></td>  
                            <td>
                            <textarea name="ks<?php echo $number_kritik ?>" id="" cols="2" rows="7" class="form-control" 
                            placeholder="Kritik & Saran Service" ></textarea>
                            </td>
                        </tr>
                    

                    </tbody>
                   
                  </table>
                  
                  
                            
                  <br>
                  <button class="btn btn-primary btn-sm " type="submit"> SUBMIT</button>
                </form>
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