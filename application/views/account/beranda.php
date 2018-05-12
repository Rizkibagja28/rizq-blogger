<!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js is-ie"><![endif]-->
<!--[if gt IE 8]><!--><html class=no-js><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="description" content="BlackTie Free Bootstrap Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  

  <title>RizQBLOGGER</title>
  <link rel=stylesheet href="<?php echo base_url();?>assets/beranda/css/main.css">
  <!--[if lte IE 8]>
  <link rel=stylesheet href="css/ie.css">
  <![endif]-->
    <script src="<?php echo base_url();?>assets/beranda/js/vendor/modernizr.js"></script>

    <script src="<?php echo base_url();?>assets/beranda/js/vendor/respond.min.js"></script>

</head>

<body>
  <div class="level level-hero hero-home has-hint">
    

    <div class="hero-overlay visible-lg"></div>

    <video loop id=bg-video class=fullscreen-video>
      <source src="http://alvarez.is/bt/appi.webm" type="video/webm">
      <source src="http://alvarez.is/bt/appi.mp4" type="video/mp4">

    </video>

    <div class="container full-height">
      <div class=v-align-parent>
        <div class=v-center>
          <div class="row">
            <div class="col-xs-10 col-sm-6">
              <h1 class="mb-10 heading">WELCOME  <span>TO RizQBLOOGER.</span></h1>
              <div class="subheading mb-20">Apabila anda sudah memiliki akun silahkan login dahulu 
                          <br class=hidden-xs>tapi jika anda tidak memiliki akun silahkan registrasi. </div>
            </div>
          </div>
          <div>
          <?php 
              if($this->session->userdata('status')!="logged"){
                ?>
                    <a class="btn btn-prepend btn-launch-video" href="<?php echo base_url('index.php/login')?>">
                      <i class="prepended icon-append-play"></i>Login
                    </a>
                <?php
              }else{
                ?>
                <a class="btn btn-prepend btn-launch-video" href="<?php echo base_url('index.php/login/logout')?>">
                      <i class="prepended icon-append-play"></i>Logout
                    </a>
                    <?php
              }
           ?>
            <a class="btn btn-prepend" href="<?php echo base_url('index.php/register')?>">
              <i class="prepended icon-append-iphone"></i>Registrasi
            </a>
            <a class="btn btn-prepend " href="<?php echo base_url('index.php/image')?>">
              <i class="prepended icon-append-play"></i>Galeri Image
            </a>
            <a class="btn btn-prepend " href="<?php echo base_url('index.php/audio')?>">
              <i class="prepended icon-append-play"></i>Galeri Audio
            </a>
            <a class="btn btn-prepend " href="<?php echo base_url('index.php/video')?>">
              <i class="prepended icon-append-play"></i>Galeri Video
            </a>
          </div>
        </div>
        </div>
      </div>

      <div class=hint-arrow></div>
    </div>
  </div>
  <div class=level>

    <div class="container mb-100 xs-mb-40">
      <div class=row>
        <div class="col-sm-5 col-md-4 col-md-offset-2 col-sm-offset-1">
          <h1 class="mb-10 xs-mb-10 heading color-dark heading-bordered">Buatlah<br class=hidden-xs> Artikel Mu </h1>
        </div>
        
        <div class="col-sm-5 col-sm-offset-1">
          <h2 class="w-300 color-dark mb-10 xs-mb-10">Silahkan buat sebuah artikel yang kamu mau</h2>
          <p class="xs-mw">Kamu bisa masukan artikel sesuka hati kamu
        </div>
      </div>
    </div>

    <div class=container>
      <div class="row mb-90 xs-mb-0">
      <?php
      if(is_array($daftar_artikel)){
        foreach ($daftar_artikel as $da) {
          ?>
        
        <div class="col-sm-1 col-sm-offset-2">
        </div>
        <div class="col-sm-3">
          <h3 class="mb-15">Judul : <?php echo $da->judul?></h3>
          <?php 
              if(is_array($users)){
                  foreach ($users as $us) {
                      if($da->id_user == $us->id_user){
                            ?>
                      <h3 class="mb-15">Pengupload : <?php echo $us->nama?></h3>
                      <?php
                      }
                    }
                }
      
          ?>

          <h3 class="mb-15">Kategori : <?php echo $da->kategori?></h3>
          
          <p class="smaller xs-mb-40 xs-mw"><?php echo substr($da->isi,0,200)?>
          <p class="more">
                    <a href="<?php echo base_url()?>index.php/tambah_artikel/baca_artikel/<?php echo $da->id_artikel ?>">Read more...</a>
                </p>
                </br>
        </div>
            
        <?php
        }
      }
      ?>
       
  </div>
    <h3 align="center">Teknik Informatika || RizQBLOGGER 2018</h3>  

  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

  <script src="<?php echo base_url();?>assets/beranda/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/beranda/js/dropdown.js"></script>
  <script src="<?php echo base_url();?>assets/beranda/js/modal.js"></script>
  <script src="<?php echo base_url();?>assets/beranda/js/main.js"></script>
  <!-- //-end- concat_js -->


  

</body>
</html>
