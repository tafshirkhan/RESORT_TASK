@extends('Frontend.frontend_master')
@section('main_content')
    <br><br>
    <div class="detail-block">

        <div class="row  wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 5742px; left: 0px; display: block;">

                                <div class="owl-item" style="width: 400px; position:absolute; left:250px; top:5px;">
                                    <div class="single-product-gallery-item" id="slide1">

                                        <img src="{{ asset($resort_details->resort_image) }}" alt="">
                                    </div>
                                    <div class="controls" style="width: 60%; border-width: medium;">

                                        <input style="color: green" type="date" id="check_date" class="form-control"
                                            min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                        <button type="submit" class="btn btn-primary" onclick="checkDate()">Check
                                            Date</button>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-md-7 product-info-block">
                <div class="product-info">
                    <h1 class="name">{{ $resort_details->resort_name }}</h1>


                    <div class="stock-container info-container m-t-10">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="stock-box">
                                    <strong class="label">Class: <p class="btn btn-success btn-sm">
                                            {{ $resort_details->resort_class }}
                                        </p></strong>
                                    <strong class="label">Location: <p style="color: green">
                                            {{ $resort_details->resort_location }}</p></strong>
                                    @php
                                        $amount = $resort_details->resort_fair - $resort_details->resort_discount;
                                        $discount = ($amount / $resort_details->resort_fair) * 100;
                                    @endphp
                                    <strong class="label">Fare :</strong>
                                    <div class="price-box">
                                        @if ($resort_details->resort_discount == null)
                                            <span class="price">
                                                <p style="color: green">{{ $resort_details->resort_fair }}</p>
                                            </span>
                                        @else
                                            <span class="price">
                                                <p style="color: red">{{ round($amount) }}</p>
                                            </span>
                                        @endif
                                    </div>

                                    <strong class="label">Availability :
                                        <div class="price-box">
                                            @if ($resort_details->status == 1)
                                                <span class="badge badge-success">Open</span>
                                            @else
                                                <span class="badge badge-danger">Closed now</span>
                                            @endif
                                        </div>
                                    </strong>
                                    <strong class="label">Description: </strong>
                                </div>
                            </div>

                        </div><!-- /.row -->
                    </div><!-- /.stock-container -->

                    <div class="description-container m-t-20">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.
                    </div><!-- /.description-container -->

                    <br><br>
                    <div class="quantity-container info-container">
                        <div class="row">
                            <div class="col-sm-7">
                                <a href="{{ route('booking_process', $resort_details->id) }}" class="btn btn-primary"><i
                                        class="fa fa-shopping-cart inner-right-vs"></i>
                                    Click here for booking procedure</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- /.col-sm-7 -->

        </div><!-- /.row -->

    </div>
    <script type="text/javascript">
        function checkDate() {
            //alert("HELLO");
            var check_date = $('#check_date').val(); //from 
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: "{{ url('/checkdate') }}",
                success: function(data) {
                    //Sweet Alert message 
                    const sweetAlert = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 2000
                    })
                    if ($.isEmptyObject(data.error)) {
                        sweetAlert.fire({
                            type: 'success',
                            icon: 'success',
                            title: data
                                .success //success message  json return
                        })
                    } else {
                        sweetAlert.fire({
                            type: 'error',
                            icon: 'error',
                            title: data
                                .error
                        });
                    }
                    //End sweetalert message.

                }

            })
        }
    </script>
@endsection
