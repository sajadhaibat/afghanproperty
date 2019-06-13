<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 09:27:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit | Houses</title>
    <!-- Tell the browser to be responsive to screen width -->
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
                Edit_Users
                <small>Edit  Users from here</small>
            </h1>
        </section>
        <hr>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <form role="form"  action="{{route('users.update',$edit->id)}}" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="name" required value="{{$edit->name}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Number</label>
                            <input type="text" class="form-control" name="number"  placeholder="Email" required value="{{$edit->number}}">
                        </div>

                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="text" class="form-control" name="email"  placeholder="Email" required value="{{$edit->email}}">
                        </div>


                        <div class="form-group">
                            <label for="title">Type</label>
                            <input type="text" class="form-control" name="accounttype"  placeholder="Account Type" required value="{{$edit->accounttype}}">
                        </div>



                        <div class="clearfix"></div>

                        <button type="submit" class="btn btn-primary" style=""><i class="fa fa-sign-in" ></i> Save </button>

                    </form>


                </div>

            </div>






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

</html>
