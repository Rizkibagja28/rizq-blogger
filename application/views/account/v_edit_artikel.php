<?php
if(is_array($databaseblog)){
    foreach ($databaseblog as $dar){
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RizQBlogger | Dashboard</title>
    <link href="<?php echo base_url();?>assets/dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashboard/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashboard/css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashboard/css/styles.css" rel="stylesheet">
    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>RizQBlogger |</span> <?php echo ucfirst($this->session->userdata('username')); ?></a>
                
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="<?php echo base_url();?>assets/images/img1.png?>" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><?php echo ucfirst($this->session->userdata('username')); ?></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li><a href="Dashboard"><em class="fa fa-calendar">&nbsp;</em> Dashboard</a></li>
            <li><a href="Tambah_artikel"><em class="fa fa-calendar">&nbsp;</em> Tambah Artikel</a></li>
            <li><a href="Edit_artikel"><em class="fa fa-calendar">&nbsp;</em> Edit Artikel</a></li>
            <li><a href="Profil"><em class="fa fa-calendar">&nbsp;</em> Profil</a></li>
            <li><a href="Beranda"><em class="fa fa-calendar">&nbsp;</em> Lihat Ke Beranda</a></li>
            <li><a href="<?php echo base_url('index.php/login/logout')?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Edit Artikel</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">Edit Artikel</h1>
            </div>
        </div><!--/.row-->
    
          
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default chat">
                    
                    <form class="form-horizontal" action="<?php echo base_url('index.php/edit_artikel/aksi_edit')?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Judul Artikel</label>
                                <div class="col-sm-8">
                                    <input type="text" name="judul" class="form-control1" id="focusedinput" placeholder="Judul Artikel..." 
                                            enable value="<?php echo $dar->judul ?>">
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kategori Artikel</label>
                                <div class="col-sm-8">
                                    <select multiple="" class="form-control1" name="kategori">
                                        <option>  Gaya Hidup  </option>
                                        <option>  Curahan Hati  </option>
                                        <option>  Percintaan  </option>
                                        <option>  Keluh Kesah  </option>
                                        <option>  Informasi  </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea name="isi" class="col-sm-12 ckeditor" placeholder="Inputkan.." id=ckeditor>	</textarea>
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary col-sm-12" style="background-color: #1A2226;">Edit</button>
                            </div>

                    
    
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/chart-data.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/easypiechart.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/easypiechart-data.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/custom.js"></script>
    <script>
        window.onload = function () {
    var chart1 = document.getElementById("line-chart").getContext("2d");
    window.myLine = new Chart(chart1).Line(lineChartData, {
    responsive: true,
    scaleLineColor: "rgba(0,0,0,.2)",
    scaleGridLineColor: "rgba(0,0,0,.05)",
    scaleFontColor: "#c5c7cc"
    });
};
    </script>
    <?php
        
    }
}
?>
        
</body>
</html>