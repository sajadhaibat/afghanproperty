<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 09:27:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Apartments</title>
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
                Apartments
                <small>Manage all the Apartments from here</small>
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

                    <a class="btn btn-info" href="#">Apartments</a>
                    <br><br>

                    <table class="table table-hover" >
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
                        @foreach($apartments as $apa)
                            <tr style="border-bottom: 4px solid #ffffff;">
                                <td>{{$apa->title}}</td>
                                <td>{{$apa->area1}}</td>
                                <td>{{$apa->city}}</td>
                                <td>{{$apa->province}}</td>
                                <td>{{$apa->price}}$</td>
                                <td> For {{$apa->status}}</td>
                                <td>{{$apa->user->name}}</td>
                                <td><img src="{{asset('images')}}\{{json_decode($apa->banner, true)[0]}}" alt="nothing" height="70px" width="100px" ></td>

                                <td ><a  href="{{route('editapartment',$apa->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
                                <td ><form action="{{route('property.delete',$apa->id)}}" method="get" >
                                        <input type="hidden" name="_method" value="delete">
                                        {!! csrf_field() !!}
                                        <button type="submit" class="close-icon btn btn-danger " onclick="return confirm('Are you sure?')"><i class="fa fa-remove"> </i></button>
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

@include('adminscripts')



</body>

</html>
