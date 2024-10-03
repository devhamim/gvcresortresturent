@extends('frontend.layout.app')
@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/17.jpg">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-title-wrap text-center">
                <h5 class="tp-breadcrumb-title-pre wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">Our Blogs</h5>
                <h2 class="tp-breadcrumb-title wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">Explore our Blogs</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-breadcrumb-area-end -->
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing-2 p-relative">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="tp-breadcrumb-title-wrap text-center">
            <h2 class="tp-breadcrumb-title-blog">News & Insights</h2>
            <p class="tp-breadcrumb-para-blog">We update our blog every week to stay up to date with all short-term rental owners, management and guest trends. Here we share newsworthy articles about Airbnb in Australia along with tips and tricks to help you set up your Airbnb for success.</p>
            <div class="tp-breadcrumb-shape">
                <img src="{{ asset('frontend') }}/img/breadcrumb/shape.png" alt="shape">
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-breadcrumb-area-end -->

<!-- blog-grid-area-start -->
<div class="tp-blog-grid-area pb-105">
<div class="container">
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-xl-4 col-lg-6 col-md-6 mb-25">
                <div class="tp-blog-wrapper tp-blog-grid-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                <div class="tp-blog-thumb mb-25">
                    <img class="w-100" src="{{asset('uploads/blog')}}/{{$blog->image}}" alt="blog">
                </div>
                <div class="tp-blog-content pb-30 mb-10">
                    <span class="tp-blog-date mb-10">{{$blog->created_at->format('d M')}}</span>
                    <h3 class="tp-blog-title mb-15"><a href="{{route('our.blog.details',$blog->slug)}}">{{$blog->title}}</a></h3>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
<!-- blog-grid-area-end -->
@endsection
