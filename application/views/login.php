<html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Halaman Login</title>
 
     <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
     <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

   </head>
   <body background="assets/gambar/grey.png">
     <div class="col-md-4 col-md-offset-4 form-login">
    
     <?php
     /* handle error */
     if (isset($_GET['error'])) : ?>
         <div class="alert alert-warning alert-dismissible" role="alert">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
           <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
         </div>
     <?php endif;?>
 
         <div class="outter-form-login">
         <div class="logo-login">
             <em class="glyphicon glyphicon-user"></em>
         </div>

             <?php echo form_open('login/login'); ?>

             <h3 class="text-center title-login">Login Admin</h3>
                 <div class="form-group">
                     <input type="text" class="form-control" name="username" placeholder="Username" required>
                 </div>
 
                 <div class="form-group">
                     <input type="password" class="form-control" name="password" placeholder="Password" required>
                 </div>
              
                 <input type="submit" class="btn btn-block btn-custom-green" name = "Masuk" value="Masuk" />
                
             <?php echo form_close(); ?>   
             
         </div>
     </div>
 
     <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" > </script>
     <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" > </script>
     
   </body>
 </html>