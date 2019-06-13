<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <br>
            </div>
            <div class="pull-left info">
                <p>Admin</p>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{url('admin/home')}}">
                    <i class="fa fa-th"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li>
                <a href="{{url('admin/users')}}">
                    <i class="fa fa-user-circle"></i> <span>Users</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>



            <li>
                <a href="{{url('admin/apartments')}}">
                    <i class="fa  fa-university"></i> <span>Apartments</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>


            <li>
                <a href="{{url('admin/houses')}}">
                    <i class="fa  fa-university"></i> <span>Houses</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li>
                <a href="{{url('admin/offices')}}">
                    <i class="fa fa-object-group"></i> <span>Offices</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/lands')}}">
                    <i class="fa fa-cloud"></i> <span>Lands</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>


            <li>
                <a href="{{url('admin/shops')}}">
                    <i class="fa fa-anchor"></i> <span>Shops</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-globe"></i> <span>Abroad Properties</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{url('admin/abroadapartments')}}"><i class="fa fa-circle-o"></i>Apartments</a></li>
                    <li><a href="{{url('admin/abroadhouses')}}"><i class="fa fa-circle-o"></i>Houses</a></li>
                    <li><a href="{{url('admin/abroadoffices')}}"><i class="fa fa-circle-o"></i>Offices</a></li>
                    <li><a href="{{url('admin/abroadlands')}}"><i class="fa fa-circle-o"></i>Lands</a></li>
     		
                </ul>
            </li>

            <li>
                <a href="{{url('admin/logout')}}">
                    <i class="fa fa-circle-o-notch"></i> <span>Logout</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>