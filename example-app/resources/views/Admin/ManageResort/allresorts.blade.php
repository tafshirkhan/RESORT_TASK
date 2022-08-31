@extends('Admin.admin_master')
@section('admin')
    <!-- Data Tables-->
    <!--<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">-->

    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <!--  <section class="content"> -->
        <div class="row">



            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">All Resorts</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <form action="{{ route('search') }}" method="get">
                                <div class="form-group">

                                    <div class="controls">
                                        <input type="search" name="search" class="form-control"
                                            placeholder="Search by name">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-sm">Search</button>
                            </form>
                            <br><br>
                            <table id="table1" class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Location</th>
                                        <th>Fare</th>
                                        <th>Discount</th>
                                        <th>Availability</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allresort as $resort)
                                        <tr>
                                            <td>{{ $resort->resort_name }}</td>
                                            <td>{{ $resort->resort_class }}</td>
                                            <td>{{ $resort->resort_location }}</td>
                                            <td>{{ $resort->resort_fair }}</td>
                                            <td>{{ $resort->resort_discount }}</td>
                                            <td>
                                                @if ($resort->status == 1)
                                                    {{ $resort->availability }}
                                                @else
                                                    <span class="badge badge-danger">Not available</span>
                                                @endif
                                            </td>
                                            <td>
                                                <img src="{{ asset($resort->resort_image) }}"
                                                    style="width: 60px; height:60px;">
                                            </td>
                                            <td>
                                                @if ($resort->status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-warning">Inactive</span>
                                                @endif
                                            </td>
                                            <td width="25%">
                                                <a href="{{ route('edit.resort', $resort->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('delete.resort', $resort->id) }}" class="btn btn-danger"
                                                    id="delete">Delete</a>

                                                @if ($resort->status == 1)
                                                    <a href="{{ route('resort.inactive', $resort->id) }}"
                                                        class="btn btn-danger" title="Inactive"><i
                                                            class="fa fa-arrow-down"></i></a>
                                                @else
                                                    <a href="{{ route('resort.active', $resort->id) }}"
                                                        class="btn btn-info" title="Active"><i
                                                            class="fa fa-arrow-up"></i></a>
                                                @endif


                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>

                            </table>
                            {{ $allresort->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!--   </section> -->
        <!-- /.content -->

    </div>

    <!-- Data Tables -->
    <!--<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

                                                                                                                                                                                                <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>-->
    <script>
        $(document).ready(function() {
            $('#table1').DataTable();
        });
    </script>
@endsection
