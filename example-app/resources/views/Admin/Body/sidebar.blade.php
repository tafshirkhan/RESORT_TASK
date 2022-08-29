@php
// dd($prefix);
//dd($route);
@endphp





<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="" alt="">
                        <h3><b>ADMIN</b></h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="treeview">
                <a href="#">
                    <i data-feather="grid"></i>
                    <span>Add New Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{ route('all.admins') }}"><i class="ti-more"></i>All Admins</a></li>
                    <li><a href="{{ route('add.admin') }}"><i class="ti-more"></i>Add Admins</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="grid"></i>
                    <span>Resorts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{ route('all.resorts') }}"><i class="ti-more"></i>All Resorts</a></li>
                    <li><a href="{{ route('add.resort') }}"><i class="ti-more"></i>Add Resorts</a></li>

                </ul>
            </li>


        </ul>
    </section>

</aside>
