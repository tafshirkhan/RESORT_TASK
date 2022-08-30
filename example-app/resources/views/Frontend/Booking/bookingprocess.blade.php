@extends('Frontend.frontend_master')
@section('main_content')
    <br><br>
    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="col-6" style=" left:400px;">


                <div class="card">
                    <strong class="card-header" style="color: green">Booking Process</strong>
                    <div class="card-body">

                        <form method="post" action="{{ route('add_booking', $resort->id) }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $resort->id }}">
                            <div class="form-group">
                                <strong>Name<span></span></strong>
                                <div class="controls">
                                    <input type="text" name="user_name" class="form-control">
                                    @error('user_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <strong>Email<span></span></strong>
                                <div class="controls">
                                    <input type="email" name="user_email" class="form-control">
                                    @error('user_email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <strong>Phone<span></span></strong>
                                <div class="controls">
                                    <input type="text" name="user_phone" class="form-control">
                                    @error('user_phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <strong>Total Guest<span></span></strong>
                                <div class="controls">
                                    <input type="number" name="guest" class="form-control">
                                    @error('guest')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <strong>Number of Room<span></span></strong>
                                <div class="controls">
                                    <input type="number" name="room" class="form-control">
                                    @error('room')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror


                                </div>
                            </div>

                            <div class="form-group">
                                <strong>Reservation Date<span></span></strong>
                                <div class="controls">

                                    <input type="date" name="reservation" class="form-control"
                                        min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                    @error('reservation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>

                        </form>



                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
@endsection
