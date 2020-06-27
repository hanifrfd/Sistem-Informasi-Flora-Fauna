<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php base_url(); ?>toolkit/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php base_url(); ?>toolkit/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php base_url(); ?>toolkit/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php base_url(); ?>toolkit/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php base_url(); ?>toolkit/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php base_url(); ?>toolkit/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php base_url(); ?>toolkit/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php base_url(); ?>toolkit/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php base_url(); ?>toolkit/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script type="text/javascript" src="<?php echo base_url('toolkit') ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php base_url(); ?>toolkit/js/Chart.min.js"></script>
  <script type="text/javascript" src="<?php base_url(); ?>toolkit/js/Chart.PieceLabel.js"></script>
  <script type="text/javascript" src="<?php base_url(); ?>toolkit/js/app.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()."/Dashboard";?>" class="logo" style="background-color:#dd4b39;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>ST</span>
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
            <li class="active" ><a href="<?php base_url(); ?>/CI/Dashboard" style="color: #90949b;"><i class="fa fa-circle-o"></i> Dashboard Utama</a></li>
            <li><a href="<?php base_url(); ?>/CI/Dashboard/dash2" style="color: #90949b;"><i class="fa fa-circle-o"></i> Produk</a></li>
          </ul>
          <a href="<?php base_url(); ?>/TNBTS/Welcome/logout" style="background-color: #f4f4f5;">
            <i class="fa fa-sign-out" style="color: #333;"></i> <span style="color: #333;">Logout</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
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
<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Text</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Text Disabled</label>
                  <input type="text" class="form-control" placeholder="Enter ..." disabled>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label>Textarea Disabled</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                </div>

                <!-- input states -->
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                  <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group has-warning">
                  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                    warning</label>
                  <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                  <span class="help-block">Help block with warning</span>
                </div>
                <div class="form-group has-error">
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                  <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                  <span class="help-block">Help block with error</span>
                </div>

                <!-- checkbox -->
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Checkbox 1
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Checkbox 2
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled>
                      Checkbox disabled
                    </label>
                  </div>
                </div>

                <!-- radio -->
                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Option one is this and that&mdash;be sure to include why it's great
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                      Option three is disabled
                    </label>
                  </div>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Disabled</label>
                  <select class="form-control" disabled>
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

                <!-- Select multiple-->
                <div class="form-group">
                  <label>Select Multiple</label>
                  <select multiple class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Multiple Disabled</label>
                  <select multiple class="form-control" disabled>
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
    
        <!-- /.col -->
        
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>


        <!-- /.col -->
        
        <!-- /.col -->
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
    $.ajax({
       url: "http://localhost/Miesetan_API/API/get_pengguna",
       method: 'GET',
         crossDomain: true,
         dataType: 'jsonp',
       success: function(data) {
         
         $(".twitter").append(data[0].twitter);
       }

      });
    $.ajax({
       url: "http://localhost/Miesetan_API/API/get_pengunjung",
       method: 'GET',
         crossDomain: true,
         dataType: 'jsonp',
       success: function(data) {
         
         $(".pengunjung").append(data[0].total);
       }
    });
    $.ajax({
       url: "http://localhost/Miesetan_API/API/get_pengunjung",
       method: 'GET',
         crossDomain: true,
         dataType: 'jsonp',
       success: function(data) {
         
         $(".makanan").append(data[0].total);
       }
    });
    $.ajax({
       url: "http://localhost/Miesetan_API/API/get_total_makanan",
       method: 'GET',
         crossDomain: true,
         dataType: 'jsonp',
       success: function(data) {
         
         $(".tmakanan").append(data[0].total);
       }
    });
    $.ajax({
       url: "http://localhost/Miesetan_API/API/get_total_minuman",
       method: 'GET',
         crossDomain: true,
         dataType: 'jsonp',
       success: function(data) {
         
         $(".tminuman").append(data[0].total);
       }
    });
  });

</script>

<!-- jQuery 2.2.3 -->
<script src="<?php base_url(); ?>toolkit/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php base_url(); ?>toolkit/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php base_url(); ?>toolkit/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php base_url(); ?>toolkit/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php base_url(); ?>toolkit/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php base_url(); ?>toolkit/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php base_url(); ?>toolkit/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php base_url(); ?>toolkit/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php base_url(); ?>toolkit/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php base_url(); ?>toolkit/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php base_url(); ?>toolkit/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php base_url(); ?>toolkit/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php base_url(); ?>toolkit/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php base_url(); ?>toolkit/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php base_url(); ?>toolkit/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php base_url(); ?>toolkit/dist/js/demo.js"></script>
</body>
</html>
