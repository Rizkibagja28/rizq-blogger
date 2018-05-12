<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Registrasi Akun
   </title>
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
                    <div class="panel-heading">
                    <h3 class="panel-title" align="center">Silahkan Isi Sesuai Ketentuan</h3>
                    </div>

     <?php echo form_open('register');?>
     </br>
     <p align="center"><a href="<?php echo base_url('index.php/beranda')?>">
     <button type="button" class="btn  btn-warning">Kembali Ke Beranda</button></a>
     </p>

     <p>
     <input class="form-control" placeholder="Nama" type="text" name="name" value="<?php echo set_value('name'); ?>"/ >
     </p>
     <p> <?php echo form_error('name'); ?> </p>
 
     <p>
     <input class="form-control" placeholder="Jenis Kelamin" type="text" name="jenis_kelamin" value="<?php echo set_value('jenis_kelamin'); ?>"/>
     </p>
     <p> <?php echo form_error('jenis_kelamin'); ?> </p>

     <p>
     <input class="form-control" placeholder="Username" type="text" name="username" value="<?php echo set_value('username'); ?>"/> 
     </p>
     <p> <?php echo form_error('username'); ?> </p>
 
     <p>
     <input class="form-control" placeholder="Email" type="text" name="email" value="<?php echo set_value('email'); ?>"/>
     </p>
     <p> <?php echo form_error('email'); ?> </p>
 
     <p>
     <input class="form-control" placeholder="Password" type="password" name="password" value="<?php echo set_value('password'); ?>"/>
     </p>
     <p> <?php echo form_error('password'); ?> </p>
 
     <p>
     <input class="form-control" placeholder="Confirmasi Password" type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
     </p>
     <p> <?php echo form_error('password_conf'); ?> </p>
 
     <p>
     <input class="form-control" placeholder="Alamat" type="text" name="alamat" value="<?php echo set_value('alamat'); ?>"/>
     </p>
     <p> <?php echo form_error('alamat'); ?> </p>
 
     <p>
     <input class="form-control" placeholder="Umur" type="text" name="umur" value="<?php echo set_value('umur'); ?>"/>
     </p>
     <p> <?php echo form_error('umur'); ?> </p>

     <p>
     <input class="form-control" placeholder="Hobby" type="text" name="hobby" value="<?php echo set_value('hobby'); ?>"/>
     </p>
     <p> <?php echo form_error('hobby'); ?> </p>
 
     <p>
     <input class="form-control" placeholder="Cita-cita" type="text" name="cita_cita" value="<?php echo set_value('cita_cita'); ?>"/>
     </p>
     <p> <?php echo form_error('cita_cita'); ?> </p>

     <p>
     <input type="submit" class="btn btn-success btn-block" name="btnSubmit" value="Daftar" />
     </p>

    <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/dist/js/sb-admin-2.js"></script>
   </body>

     
 </html>