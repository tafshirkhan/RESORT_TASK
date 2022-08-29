<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">

    <title>Admin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
    <!-- Toastr-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- sweet wlert-->

    <link rel="stylesheet" href="sweetalert2.min.css">
    <!-- Data Tables-->
    <!--<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">-->
    <link href=" https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>



</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">

        <!-- Header-->
        @include('Admin.Body.header')
        <!-- End Header-->

        <!-- Left side column. contains the logo and sidebar -->
        <!-- Sidebar-->
        @include('Admin.Body.sidebar')
        <!-- End Sidebar-->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('admin')
        </div>
        <div class="content-wrapper">
            @yield('script')
        </div>
        <!-- /.content-wrapper -->
        <!-- Footer-->
        @include('Admin.Body.footer')
        <!-- End Footer-->



        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->


    <!-- Vendor JS -->
    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/js/vendors.min.js') }}"></script>
    <script src=" {{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src=" {{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
    <script src=" {{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
    <script src=" {{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>





    <!-- Input Tags for product -->
    <script src="{{ asset('../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>

    <!-- CK editors for product long description -->

    <script src="{{ asset('../assets/vendor_components/ckeditor/ckeditor.js') }}"></script>

    <script src="{{ asset('../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>

    <script src="{{ asset('backend/js/pages/editor.js') }}"></script>

    <!-- Sunny Admin App -->
    <script src="{{ asset('backend/js/template.js') }}"></script>
    <script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>
    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>

    <!-- Data Tables -->
    <!--<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>-->


    {{-- toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>


</body>

</html>
