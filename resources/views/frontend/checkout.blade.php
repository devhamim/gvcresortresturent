@extends('frontend.layout.app')
@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/04.jpg">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-title-wrap text-center">
                <h5 class="tp-breadcrumb-title-pre">Checkout</h5>
                <h2 class="tp-breadcrumb-title">Checkout</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-breadcrumb-area-end -->

<!-- coupon-area start -->
<section class="coupon-area pb-30">
    <div class="container" style="padding: 50px 0">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="text-center d-block mb-5">
                    <h2>Guest Information</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-between" style="display: inline-grid;">
            <div class="col-12 col-lg-7 col-md-12 m-auto" style="margin: 0 auto">
                <form method="POST" action="{{route('checkout.booking')}}">
                    @csrf
                    <input type="hidden" name="gest_id" value="{{$gestroomdatas->id}}">
                    <input type="hidden" name="room_id" value="{{$gestroomdatas->room_id}}">
                    <div class="row mb-2">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">First Name *</label>
                                <input type="text" class="form-control" name="fast_name" placeholder="First Name" />
                            </div>
                            @error('fast_name')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Last Name *</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name" />
                            </div>
                            @error('last_name')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Email *</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" />
                            </div>
                            @error('email')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address 1" />
                            </div>
                            @error('address')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Country</label>
                                <input type="text" class="form-control" name="country" placeholder="Country" />
                            </div>
                            @error('country')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">City / Town *</label>
                                <input type="text" class="form-control" name="city" placeholder="City / Town" />
                            </div>
                            @error('city')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">ZIP / Postcode *</label>
                                <input type="text" class="form-control" name="zip" placeholder="Zip / Postcode" />
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Mobile Number *</label>
                                <input type="text" class="form-control" name="number" placeholder="Mobile Number" />
                            </div>
                            @error('number')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-dark">Additional Information</label>
                                <textarea class="form-control ht-50" name="note"></textarea>
                            </div>
                        </div>

                    </div>
                      <div class="form-group mb-5">
                        <input type="hidden" name="debit" value="Debit">
                        <button type="submit" class="btn btn-dark py-2 px-5 mt-3 full-width" style="width: 100%; padding: 10px 0">BOOK NOW</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- coupon-area end -->

@endsection
