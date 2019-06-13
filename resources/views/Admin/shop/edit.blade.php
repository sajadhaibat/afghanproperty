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
                Edit_Shops
                <small>Edit Shops from here</small>
            </h1>
        </section>
        <hr>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <form role="form"  action="{{route('shops.update',$edit->id)}}" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title"  placeholder="Title" required value="{{$edit->title}}">
                        </div>
                        
                        
                         <div class="form-group">
                            <label for="title">Area</label>
                            <input type="text" class="form-control" name="area1"  placeholder="area" required value="{{$edit->area1}}">
                        </div>
                        
                        
                        
                        
                        <div class="form-group">
                            <label for="title">City</label>
                            <input type="text" class="form-control" name="location"  placeholder="city" required value="{{$edit->city}}">
                        </div>
                        
                        
                         <div class="form-group">
                            <label for="title">Province</label>
                            <input type="text" class="form-control" name="province"  placeholder="province" required value="{{$edit->province}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="title">Price</label>
                            <input type="text" class="form-control" name="price"  placeholder="price" required value="{{$edit->price}}">
                        </div>
                        
                        
                           <div class="form-group">
                            <label for="title">Status</label>
                            <input type="text" class="form-control" name="status"  placeholder="location" required value="{{$edit->status}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description" id="editor1" class="editor1">{{$edit->description}}</textarea>
                        </div>


   <div class="form-group">
                            <label for="title">Photos</label>
                            <input type="file" class="form-control" name="banner[]"  placeholder="photo" required multiple >
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
