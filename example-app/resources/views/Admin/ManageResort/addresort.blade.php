@extends('Admin.admin_master')
@section('admin')
    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-8">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add New Resort</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <form method="post" action="{{ route('resort.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Resort Name<span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="resort_name" class="form-control">
                                                @error('resort_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Class<span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="resort_class" class="form-control">
                                                @error('resort_class')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Location<span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="resort_location" class="form-control">
                                                @error('resort_location')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Fare<span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="resort_fair" class="form-control">
                                                @error('resort_fair')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Discount<span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="resort_discount" class="form-control">


                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Availability<span class="text-danger"></span></h5>
                                            <div class="controls">

                                                <input type="date" name="availability" class="form-control"
                                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                                @error('resort_class')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Image <span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="file" name="resort_image" class="form-control">
                                                @error('resort_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>

                            </form>



                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
@endsection
