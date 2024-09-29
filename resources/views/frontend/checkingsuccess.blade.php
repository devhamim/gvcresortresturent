@extends('frontend.layout.app')

@section('content')


<!--==================================================-->
<!-- start career list Area -->
<!--==================================================-->
<section class="inner-banner">
    <div class="thm-container">
        <h2>Error</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Error</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->

<div class="container">
    <div class="row" style="padding: 100px 0">
     <div class="col-lg-12 m-auto text-center" style="margin: 0 auto">
         <h4 class="text-danger">Payment Failed</h4>
         <img width="80px" src="{{asset('frontend/assets/images/home-1/error.png')}}" alt="">
         <p class="pt-3">payment transaction was not successful for some reason. The reasons for payment failures can vary, including insufficient funds, technical issues, incorrect payment information, or security measures.</p>
         <a href="{{url('/')}}" class="btn btn-banger" style="background: #F94A29; padding: 10px 30px; color: #fff">Home</a>
     </div>

    </div>
 </div>
<!--==================================================-->
<!-- End career list Area -->
<!--==================================================-->
@endsection

