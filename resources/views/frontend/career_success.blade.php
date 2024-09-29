@extends('frontend.layout.app')

@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/01.jpg">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-title-wrap text-center">
                <h5 class="tp-breadcrumb-title-pre">Success</h5>
                <h2 class="tp-breadcrumb-title">Success</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-breadcrumb-area-end -->


<div class="about-area inner">
    <div class="container" style="padding: 100px 0">
       <div class="row">
        <div class="col-lg-12 m-auto text-center">
            <h4 class="text-success">Success</h4>
            <img width="100px" src="{{asset('frontend/assets/images/home-1/success.png')}}" alt="">
            <p>Thank you for submitting your application at Full Moon. We have successfully received your application.

                Your interest in joining our team is appreciated. Our hiring team will now review your application and qualifications. If your skills and experience align with our needs, we will contact you for the next steps in the hiring process.

                Please note that due to the volume of applications we receive, this process may take some time. We appreciate your patience.

                If you have any questions or need further assistance, feel free to contact our Human Resources department.

                Thank you again for considering your potential employer. We wish you the best of luck in your job search.</p>
                <a href="{{url('/')}}" class="btn btn-banger" style="background: #F94A29; padding: 10px 30px; color: #fff">Home</a>
        </div>

       </div>
    </div>
</div>

<!--==================================================-->
<!-- End career list Area -->
<!--==================================================-->
@endsection

