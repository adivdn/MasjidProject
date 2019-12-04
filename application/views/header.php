<!DOCTYPE html>
    <head>
        
        <title>Aplikasi Masjid</title>

        
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.3.1-dist/css/bootstrap.min.css'); ?> ">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" 
        crossorigin="anonymous">
        <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap-4.3.1-dist/js/bootstrap.min.js'); ?>"></script>
       
      
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a href="<?php echo base_url(); ?>" class="navbar-brand">
                <img src="assets/images/MSU.png" style="width: 40px;" alt="Logo"> Masjid Syamsul Ulum
            </a>
            <div class="navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="#" class="nav-link"><span class="fas fa-user"></span> User</a></li>
                        <li><a href="#" class = "nav-link" data-toggle = "modal" data-target = "#modalLogin"><span class="fas fa-sign-in-alt"></span> Login</a></li>
                    </ul>
            
            </div>
        </nav>
