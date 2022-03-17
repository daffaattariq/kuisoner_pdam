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
            <h1 class="h3 mb-0 text-gray-800">Note Skor</h1>
          
          </div>
            
          <div class="row">
                    <div class="col-xl-0 col-lg-20 col-md-12 col-sm-120 col-120">
                       
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">                                  
                                        <h5 class="mb-1">
                                      1  – 1.79 = Sangat Tidak Puas
                                      <br>
                                      1.8 – 2.59 = Tidak Puas
                                      <br>
                                      2.6 – 3.39 = Ragu-Ragu
                                      <br>
                                      3.4 – 4.19 = Puas
                                      <br>
                                      4.2 – 5 = Sangat Puas
                                        </h5>
                                    </div>
                                   
                                </div>
                            </div>
                      
                    </div>
          </div>
          <br>
          <div class="form-group">
              <?php
            //   var_dump($kesimpulan);die();
                if($kesimpulan == 1)
                {
              ?>
            <div class="alert alert-danger" role="alert">
                    <?php echo 'Dari Hasil Kuisoner Aplikasi Belum Sesuai , karena masih ada kategori yang mendapatkan dibawah puas'?>
            </div>
            <?php
                }
                else
                {
            ?>
            <div class="alert alert-success" role="alert">
                    <?php echo 'Aplikasi Sudah Sesuai , karena tiap kategori sudah mendapatkan nilai minimal puas'?>
            </div>
            <?php
                }
            ?>
            </div>
          <br>
          <div class="row">
                    <div class="col-xl-4 col-lg-2 col-md-6 col-sm-12 col-12">
                        
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Performance</h5>
                                        <h2 class="mb-1"><?php echo $total_performance?> Skor : <?php echo $hasil_performance?></h2>
                                        <h10 class="mb-1"><?php echo $narasi_performance?></h10>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
                                    </div>
                                    
                                </div>
                            </div>
                        
                    </div>

                    <div class="col-xl-4 col-lg-2 col-md-6 col-sm-12 col-12">
                        
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Information</h5>
                                        <h2 class="mb-1"><?php echo $total_information?> Skor : <?php echo $hasil_information?></h2>
                                        <h10 class="mb-1"><?php echo $narasi_information?></h10>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>
                        
                    </div>

                    <div class="col-xl-4 col-lg-2 col-md-6 col-sm-12 col-12">
                        
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Economics</h5>
                                        <h2 class="mb-1"><?php echo $total_economics?> Skor : <?php echo $hasil_economics?></h2>
                                        <h10 class="mb-1"><?php echo $narasi_economics?></h10>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
          </div>
  <br>
          <div class="row">
                    <div class="col-xl-4 col-lg-2 col-md-6 col-sm-12 col-12">
                        
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Control</h5>
                                        <h2 class="mb-1"><?php echo $total_control?> Skor : <?php echo $hasil_control?></h2>
                                        <h10 class="mb-1"><?php echo $narasi_control?></h10>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>
                        
                    </div>

                    <div class="col-xl-4 col-lg-2 col-md-6 col-sm-12 col-12">
                        
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Efficiency</h5>
                                        <h2 class="mb-1"><?php echo $total_efficiency?> Skor : <?php echo $hasil_efficiency?></h2>
                                        <h10 class="mb-1"><?php echo $narasi_efficiency?></h10>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>
                        
                    </div>

                    <div class="col-xl-4 col-lg-2 col-md-6 col-sm-12 col-12">
                        
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Service</h5>
                                        <h2 class="mb-1"><?php echo $total_service?> Skor : <?php echo $hasil_service?></h2>
                                        <h10 class="mb-1"><?php echo $narasi_service?></h10>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
        </div>

         <!-- CHART -->
        <div class="container">

                        
                         <br>
                        <br>
                        <div id="myfirstchart" style="height: 250px;" class="ml-100"></div>
                        <script>
                        new Morris.Bar({
                        
                        element: 'myfirstchart',
                        data: [
                            { nama: 'performance', value: <?php echo $total_performance?>  },
                            { nama: 'information', value: <?php echo $total_information?>  },
                            { nama: 'economics', value: <?php echo $total_economics?>  },
                            { nama: 'control', value: <?php echo $total_control?>  },
                            { nama: 'efficiency', value: <?php echo $total_efficiency?>  },
                            { nama: 'service', value: <?php echo $total_service?>  }
                        ],
                        xkey: 'nama',
                        ykeys: ['value'],
                        labels: ['Value'],

                        parseTime : false             
                        });
                        </script>
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