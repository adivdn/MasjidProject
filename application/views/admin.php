<!DOCTYPE html>
<head>
        
    <title>Aplikasi Masjid</title>

    
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.3.1-dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url().'assets/css/sidebar-style.css'?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" 
    crossorigin="anonymous">
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap-4.3.1-dist/js/bootstrap.min.js'); ?>"></script>
   
  
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a href="#" class="navbar-brand">
            <img src="<?php echo base_url().'assets/images/MSU.png'?>" style="width: 40px;" alt="Logo"> Masjid Syamsul Ulum
        </a>
        <div class="navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li><a href="#" class="nav-link"><span class="fas fa-user"></span> Admin</a></li>
                    <li><a href="<?php echo site_url().'User/logout'?>" class = "nav-link"><span class="fas fa-power-off"></span> Logout</a></li>
                </ul>
                
        </div>
       
    </nav>
    
    <div class="sidebar">
        <a href="#" class="active"><span class="fas fa-home"></span> Dashboard</a>
        <a href="<?php echo site_url().'Jadwal/get_data'?>"><span class="fas fa-gavel"></span> Khotib dan Bilal</a>
        <a href="#"><span class="fas fa-clock"></span> Jam Sholat</a>
        <a href="#"><span class="fas fa-volume-off"></span> Sound Harian</a>
        <a href="#"><span class="fas fa-envelope-square"></span> Pesan Pendek</a>
        <a href="#"><span class="fas fa-forward"></span> Running Teks</a>
        <a href="#"><span class="fas fa-key"></span> Ganti Password</a>
 
    </div>
    

    
      
</body>

</html>