@extends('frontend.layout.app')

@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/01.jpg">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-title-wrap text-center">
                <h5 class="tp-breadcrumb-title-pre">Careers</h5>
                <h2 class="tp-breadcrumb-title">Careers</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-breadcrumb-area-end -->

<!--==================================================-->
<!-- start career list Area -->
<!--==================================================-->
<div class="about-area inner">
	<div class="careerlist" style="padding: 70px 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Careers List</h2>
                    <p>Full Moon Hotel and Restaurant takes real pride in welcoming fresh and new talent to our increasing dynamic workforce. In addition to Canada nationals, our team comprises of expatriates from various other nationalities. Your career can be pursued in the following departments.</p>

                    <p>Our passionate workforce offers our customers with quality service that is trusted, treasured and experienced repeatedly. For any inquiries related to job vacancies.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Careers List
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No.</th>
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Vacancy</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($careerlists as $sl=>$careerlist)
                                    <tr>
                                        <td>{{$sl+1}}</td>
                                        <td>{{ $careerlist->department }}</td>
                                        <td>{{ $careerlist->post }}</td>
                                        <td>{{ $careerlist->vacancy }}</td>
                                        <td>
                                            <a href="{{route('careers.applay',$careerlist->id)}}" class="btn btn-primary">Apply Now</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End career list Area -->
<!--==================================================-->



@endsection
