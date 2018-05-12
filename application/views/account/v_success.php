<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Notifikasi
   </title>
 </head>
  <link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css'/>
 <body>
   <h3><?php echo $message; ?></h3>
    <p><?php echo anchor('beranda','Kembali ke beranda'); ?></p>
 </body>
 </html>