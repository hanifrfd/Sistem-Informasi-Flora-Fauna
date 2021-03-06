<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script type="text/javascript" src="<?php echo base_url('toolkit') ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('toolkit') ?>/js/Chart.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('toolkit') ?>/js/Chart.PieceLabel.js"></script>
  <script type="text/javascript" src="<?php echo base_url('toolkit') ?>/js/app.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header"  >
    <!-- Logo -->
    <a href="<?php echo base_url()."/Dashboard";?>" class="logo" style="background-color:#dd4b39;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">BTS</span>
      TNBTS
      <span class="logo-lg"><b>Mie</b>Setan</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #dd4b39;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" >
        <span class="sr-only" >Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span> -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <script type="text/javascript"></script>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color: #f9fafc;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>       -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" >        
        <li class="active treeview">
          <a href="#" style="background-color: #f4f4f5;">
            <i class="fa fa-dashboard" style="color: #333;"></i> <span style="color: #333;">Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="background-color: #f4f4f5;">
            <li class="active" ><a href="<?php base_url(); ?>/TNBTS/Dashboard" style="color: #90949b;"><i class="fa fa-circle-o"></i> Dashboard Utama</a></li>
            <li><a href="<?php base_url(); ?>/TNBTS/Dashboard/dash2" style="color: #90949b;"><i class="fa fa-circle-o"></i> InputData</a></li>
          </ul>
        </li>
        
          
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height:960px ;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <div class="row" style="padding: 20px 20px 20px 20px">
        <div class="col-md-5">
              <div class="box box-warning">
                          <div class="box-header with-border">
                            <h3 class="box-title">Input Data</h3>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <form role="form" method="post" action="<?php base_url()?>/TNBTS/Dashboard/inputSatwa">
                              <!-- text input -->                                                            
                              <div class="form-group">
                                <label>Famili</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="famili">
                              </div>                              
                              <div class="form-group">
                                <label>Nama Ilmiah</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="nilmiah">
                              </div>                              
                              <div class="form-group">
                                <label>Nama Lokal </label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="nlokal">
                              </div>                              
                              <div class="form-group">
                                <label>Deskripsi Singkat</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="deskripsi">
                              </div>                              
                              <div class="form-group">
                                <label>Lokal</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="lokal">
                              </div>                              
                              <div class="form-group">
                                <label>Migran</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="migran">
                              </div>                              
                              <div class="form-group">
                                <label>IUCN</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="IUCN">
                              </div>                              
                              <div class="form-group">
                                <label>Peraturan RI</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="peraturan">
                              </div>                              
                              <div class="form-group">
                                <label>Koordinat Perjumpaan</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="koordinat">
                              </div>                              
                              <div class="form-group">
                                <label for="exampleInputFile">Dokumentasi</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="dokumentasi">
                              </div>                     
                              <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" placeholder="Enter ..." name="keterangan">
                              </div>                                                            
                              <div class="box-footer">
                                <button type="submit" class="btn btn-success">Simpan</button>
                              </div>                           
                            </form>
                          </div>
                          <!-- /.box-body -->
                        </div>
                      </div>
        <!-- /.col -->
        <div class="col-md-6">
              <div class="box box-warning">
                <form action="/file-upload" class="dropzone">
                  <div class="fallback">
                    <input name="file" type="file" multiple />
                  </div>
                
                </form>
                <div class="box-footer">
                      <button type="submit" class="btn btn-success">Simpan</button>
                </div>                           

              </div>
        </div>
        <div class="col-md-6">
              <div class="box box-success">                
                <form role="form" method="post" action="<?php base_url()?>/TNBTS/Dashboard/inputGambar" enctype="multipart/form-data">
                  <div class="fallback">
                    <input name="file" type="file"/>
                  </div>
                
                <div class="box-footer">
                                <button type="submit" class="btn btn-success">Simpan</button>
                              </div>                           
                </form>                
              </div>
          </div>                
    </div>
    <script src="<?php echo base_url('toolkit') ?>/dropzone/dist/min/dropzone.min.js"></script>
    <script src="<?php echo base_url('toolkit') ?>/dropzone/dist/min/dropzone-amd-module.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/dropzone/dist/min/dropzone.min.css">
    <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/dropzone/dist/min/basic.min.css">
    <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/dropzone/dist/dropzone.css">
    <link rel="stylesheet" href="<?php echo base_url('toolkit') ?>/dropzone/dist/basic.css">
    <div class="row" style="padding: 20px 20px 20px 20px">
        
    </div>

      
     
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
       url: "http://localhost/Miesetan_API/API/get_total_penjualan",
       method: 'GET',
         crossDomain: true,
         dataType: 'jsonp',
       success: function(data) {
         
         $(".total").append(data[0].total);
       }

      });
    // "myAwesomeDropzone" is the camelized version of the HTML element's ID
    Dropzone.options.myAwesomeDropzone = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 2, // MB
    accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
};
  });

</script>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('toolkit') ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('toolkit') ?>/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('toolkit') ?>/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('toolkit') ?>/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('toolkit') ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('toolkit') ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('toolkit') ?>/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('toolkit') ?>/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url('toolkit') ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url('toolkit') ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('toolkit') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('toolkit') ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('toolkit') ?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('toolkit') ?>/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('toolkit') ?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('toolkit') ?>/dist/js/demo.js"></script>
</body>
</html>
