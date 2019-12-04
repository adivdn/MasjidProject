<!DOCTYPE html>
<html lang="en">
<head>
        
        <title>Aplikasi Masjid</title>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.3.1-dist/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" 
        crossorigin="anonymous">
        <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap-4.3.1-dist/js/bootstrap.min.js'); ?>"></script>
       
      
</head>
<body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a href="<?php echo site_url(); ?>" class="navbar-brand">
                <img src="<?php echo base_url().'assets/images/MSU.png' ?>" style="width: 40px;" alt="Logo"> Masjid Syamsul Ulum
            </a>
            <div class="navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="#" class="nav-link"><span class="fas fa-user"></span> User</a></li>
                        <li><a href="#" class = "nav-link" data-toggle = "modal" data-target = "#modalLogin"><span class="fas fa-sign-in-alt"></span> Login</a></li>
                    </ul>
            
            </div>
        </nav>

        <div id="modalLogin" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered "  role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url().'/User/prosesLogin'?>" method="post">
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" name="username" placeholder="Username" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                        <div class="text-right">
                          <button class="btn btn-outline-success" type="submit">Login</button>
                        </div>
                      </form>
                    </div>
                    </div>
                </div>
            </div>
        
        
</body>

</html>