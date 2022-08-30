@extends('Frontend.frontend_master')
@section('main_content')
    <!--Home -->
    @include('Frontend.Body.Common.home')
    <!--End Home -->

    <section class="book">
        <div class="container flex">
            <div class="input grid">
                <div class="box">
                    <label>Check-in:</label>
                    <input type="date" placeholder="Check-in-Date">
                </div>
                <div class="box">
                    <label>Check-out:</label>
                    <input type="date" placeholder="Check-out-Date">
                </div>
                <div class="box">
                    <label>Adults:</label> <br>
                    <input type="number" placeholder="0">
                </div>
                <div class="box">
                    <label>Children:</label> <br>
                    <input type="number" placeholder="0">
                </div>
            </div>
            <div class="search">
                <input type="search" placeholder="Search">
            </div>
        </div>
    </section>

    <section class="room top" id="room">

        <div class="container">

            <div class="heading_top flex1">
                <div class="heading">
                    <h1 style="color: green">AVAILABLE RESORTS</h1>
                    <h4 style="color: rgb(25, 87, 25)">Resort With Picture</h4>
                </div>
            </div>

            <div class="content grid">
                @foreach ($allresort as $resort)
                    <div class="box">
                        <div class="img">
                            <!-- <img src="image/r1.jpg" alt="">-->
                            <img src="{{ asset($resort->resort_image) }}" alt="">
                        </div>
                        <div class="text">
                            <h3>{{ $resort->resort_name }}</h3>
                            <button class="btn btn-primary">View Details</button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
