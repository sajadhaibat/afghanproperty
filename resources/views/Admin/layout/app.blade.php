<!doctype html>
<html lang="en">
@include('Admin.layout.head')

<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
    @include('Admin.layout.header')
    @include('Admin.layout.sidebar')
    @section('admin_main_content')
        @show
    @include('Admin.layout.footer')
</div>
</body>
@include('Admin.layout.scripts')
</html>