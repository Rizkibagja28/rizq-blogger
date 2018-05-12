<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>Login</title>
    <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 </head>
 <body>
 <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading pane-default ">
      <div class="panel-heading">

                        <h3 class="panel-title" align="center">Silahkan Login Terlebih Dahulu</h3>
                    </div>

      <?php
   // Cetak jika ada notifikasi
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
      </div>
 
      <?php echo form_open('login/aksi_login');?>
      <div class="panel-body">
      <fieldset>
       <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
 
      <p>
           <input type="submit" class="btn btn-success btn-block"name="btnSubmit"  value="Login" />
      </p>
      
      <p align="center"><a href="<?php echo base_url('index.php/beranda/index')?>">
      <button type="button" class="btn  btn-warning">Kembali Ke Beranda</button></a>
      </p>
      
      </div>
 
      <?php echo form_close();?>
       </fieldset>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/dist/js/sb-admin-2.js"></script>
      </body>
 </html>