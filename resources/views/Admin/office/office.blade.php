<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 09:27:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Offices</title>
    <!-- Tell the browser to be responsive to screen width -->

    <![endif]-->

    @include('adminlinks')

    <!-- Google Font -->
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
                Offices
                <small>Manage all the offices form here</small>
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

                    <a class="btn btn-warning " href="#">Offices</a>
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
                            <th scope="col" style="color: white;">Banner</th>
                            <th scope="col" style="color: white;">Edit</th>
                            <th scope="col" style="color: white;">Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($offices as $office)
                        <tr style="border-bottom: 4px solid #ffffff;">
                            <td>{{$office->title}}</td>
                             <td>{{$office->area1}}</td>
                            <td>{{$office->city}}</td>
                            <td>{{$office->province}}</td>

                            <td>{{$office->price}}$</td>
                            <td>For {{$office->status}}</td>

                            <td>{{$office->user->name}}</td>
                            <td><img src="{{asset('images')}}\{{json_decode($office->banner, true)[0]}}" alt="nothing" height="70px" width="100px" ></td>

                            <td ><a href="{{route('offices.edit',$office->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                            <td ><form action="{{route('property.delete',$office->id)}} " method="get" >
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
