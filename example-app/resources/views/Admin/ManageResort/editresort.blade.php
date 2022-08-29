@extends('Admin.admin_master')
@section('admin')
    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-8">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Update Resort</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <form method="post" action="{{ route('update.resort', $resort->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $resort->id }}">
                                <input type="hidden" name="previous_image" value="{{ $resort->resort_image }}">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Resort Name<span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="resort_name" class="form-control"
                                                    value="{{ $resort->resort_name }}">
                                                @error('resort_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Class<span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="resort_class" class="form-control"
                                                    value="{{ $resort->resort_class }}">
                                                @error('resort_class')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Location<span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="resort_location" class="form-control"
                                                    value="{{ $resort->resort_location }}">
                                                @error('resort_location')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Fare<span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="resort_fair" class="form-control"
                                                    value="{{ $resort->resort_fair }}">
                                                @error('resort_fair')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Discount<span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="resort_discount" class="form-control"
                                                    value="{{ $resort->resort_discount }}">


                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Availability<span class="text-danger"></span></h5>
                                            <div class="controls">

                                                <input type="date" name="availability" class="form-control"
                                                    value="{{ $resort->availability }}">
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
