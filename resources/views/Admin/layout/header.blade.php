
<header class="main-header">
    <!-- Logo -->
    <a href="{{url('admin/home')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>W</b>S</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>User </b> Dashboard</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="#" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<script src="{{asset('admin-assets/bower_components/jquery/dist/jquery.min.js')}} "></script>
<script src="{{asset('admin-assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>