<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 09:27:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Abroad Houses</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
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
                Abroad Apartments
                <small>Manage all the Abroad Apartments from here</small>
            </h1>
        </section>
        <hr>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                @if(\Illuminate\Support\Facades\Session::has('delete'))
                    <div class="alert alert-info" id="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Successfully</strong> Deleted
                    </div>

                @endif
                <div class="col-md-10 col-md-offset-1">

                    <a class="btn btn-success" href="#">Abroad_Apartments</a>
                    <br><br>

                    <table class="table table-hover">
                        <thead class="black white-text" style="background-color: black;" >
                        <tr>

                            <th scope="col" style="color: white;">Title</th>
                            <th scope="col" style="color: white;">Area</th>
                            <th scope="col" style="color: white;">City</th>
                            <th scope="col" style="color: white;">Province</th>

                            <th scope="col" style="color: white;">Price</th>
                            <th scope="col" style="color: white;">Status</th>
                            <th scope="col" style="color: white;">Owner</th>
                            <th scope="col" style="color: white;">Owner_phone</th>
                            <th scope="col" style="color: white;">Owner_email</th>

                            <th scope="col" style="color: white;">Banner</th>
                            <th scope="col" style="color: white;">Edit</th>
                            <th scope="col" style="color: white;">Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bhouses as $land)
                            <tr style="border-bottom:4px solid #ffffff;">
                                <td>{{$land->title}}</td>
                                 <td>{{$land->area1}}</td>
                                <td>{{$land->city}}</td>
                                <td>{{$land->province}}</td>
                                <td>{{$land->price}}$</td>
                                 <td>{{$land->status}}</td>
                                <td>{{$land->name}}</td>
                                <td>{{$land->mobile}}</td>
                                <td>{{$land->email}}</td>


                                <td><img src="{{asset('/images')}}\{{json_decode($land->banner, true)[0]}}" alt="nothing" height="70px" width="100px" ></td>

                                <td ><a href="{{route('broad.edit',$land->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                                <td ><form action="{{route('broad.destroy',$land->id)}} " method="POST" >
                                        <input type="hidden" name="_method" value="delete">
                                        {!! csrf_field() !!}
                                        <button type="submit" class="close-icon btn btn-danger" ><i class="fa fa-remove"> </i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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

<!-- jQuery 3 -->
@include('adminscripts')
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 09:27:28 GMT -->
</html>
