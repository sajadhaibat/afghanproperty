@extends('Admin.layout.app')

@section('admin_main_content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Newsletters
                <small>List of emails for newsletters</small>
            </h1>
        </section>
        <hr>
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">



                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#NO</th>
                            <th>Email</th>
                            <th>Received Time</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $new)
                            <tr>
                                <td>{{$new->id}}</td>
                                <td>{{$new->email}}</td>
                                <td>{{$new->created_at->diffForHumans()}}</td>

                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@stop

