<!DOCTYPE html>
<html>

  <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>

  <![endif]-->

  <!-- Google Font -->

  @include('adminlinks')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 @include('adminheader')
  <!-- Left side column. contains the logo and sidebar -->
  @include('adminaside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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


    <br>
    <br>


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color: #222d32;">
            <div class="inner">
              <h3 style="color: white;">Users</h3>

              <p style="color: white;">manage users from here</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{url('admin/users')}}" class="small-box-footer" style="color: white;">More info <i class="ion ion-person-add"></i></a>
          </div>
        </div>




        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color: #00acd6;">
            <div class="inner">
              <h3 style="color: white;">Apartments</h3>

              <p style="color: white;">manage Apartments from here</p>
            </div>
            <div class="icon">
              <i class="ion ion-filing"></i>
            </div>
            <a href="{{url('admin/apartments')}}" class="small-box-footer" style="color: white;">More info <i class="ion ion-filing"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Houses</h3>

              <p>Manage houses from here</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{url('admin/houses')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Offices</h3>

              <p>manage offices from here</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-stopwatch"></i>
            </div>
            <a href="{{url('admin/offices')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Lands</h3>

              <p>manage lands from here</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{url('admin/lands')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>Shops</h3>

              <p>manage shops from here</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{url('admin/shops')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->


      <div class="row">
        <!-- Left col -->

        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->

        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('adminfooter')
  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('adminscripts')
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 09:27:28 GMT -->
</html>
