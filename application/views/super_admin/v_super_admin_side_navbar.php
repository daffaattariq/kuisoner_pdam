<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url();?>assets/images/pdam_png.png" rel="icon">
  <title>Halaman - Dashboard</title>
  <link href="<?php echo base_url();?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/admin/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('super_admin/aksi_super_admin')?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url();?>assets/images/pdam_png.png">
        </div>
        <div class="sidebar-brand-text mx-3">PDAM Kota Malang</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('super_admin/aksi_super_admin')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>

     
            <li class="nav-item active">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Data Pertanyaan</span>
              </a>
              <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  
                <a class="collapse-item" href="<?php echo base_url('super_admin/aksi_super_admin_pertanyaan') ?>" >Data pertanyaan </a>              

                </div>
              </div>
            </li>     

            <li class="nav-item active">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Data Jawaban</span>
              </a>
              <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                                 
                <a class="collapse-item" href="<?php echo base_url('super_admin/aksi_super_admin_jawaban') ?>" >Data Jawaban</a>                

                </div>
              </div>
            </li> 

            <li class="nav-item active">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Data Hasil</span>
              </a>
              <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                                 
                <a class="collapse-item" href="<?php echo base_url('super_admin/aksi_super_admin_hasil') ?>" >Data Hasil Kuisoner</a>                

                </div>
              </div>
            </li> 

            <li class="nav-item active">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap5"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Data Kritik & Saran</span>
              </a>
              <div id="collapseBootstrap5" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                                 
                <a class="collapse-item" href="<?php echo base_url('super_admin/aksi_super_admin_kritik_saran') ?>" >Data Kritik & Saran</a>                

                </div>
              </div>
            </li> 
      
            <li class="nav-item active">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap4"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Data User</span>
              </a>
              <div id="collapseBootstrap4" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                                 
                <a class="collapse-item" href="<?php echo base_url('super_admin/aksi_super_admin/tampil_data_login') ?>" >Data Login</a>                

                </div>
              </div>
            </li> 
            
     
      
 
     </ul>
    <!-- Sidebar -->

    <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/ruang-admin.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/demo/chart-area-demo.js"></script>  
</body>