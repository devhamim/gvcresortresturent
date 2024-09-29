@extends('frontend.layout.app')
@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/02.jpg">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-title-wrap text-center">
                <h5 class="tp-breadcrumb-title-pre wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">Our Blogs Details</h5>
                <h2 class="tp-breadcrumb-title wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">Explore our Blogs</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-breadcrumb-area-end -->
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing-3 p-relative">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="tp-breadcrumb-title-wrap">
            <h2 class="tp-breadcrumb-title-blog tp-breadcrumb-title-blog-2 mb-15">{{ $blogs->first()->title }}</h2>
            <div class="tp-breadcrumb-blog-meta tp-breadcrumb-blog-meta-2">
                <span>{{$blogs->first()->created_at->format('d M')}}</span>
                <span>{{ $blog_comment_count }} Comments</span>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-breadcrumb-area-end -->

<div class="tp-postbox-big-thumb jarallax fix p-relative">
<img class="w-100 jarallax-img" src="{{ asset('uploads/blog') }}/{{ $blogs->first()->image }}" alt="thumb">
</div>

<!-- tp-postbox-details-area-start -->
<div class="tp-postbox-area pt-80">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="tp-postbox-wrapper p-relative">
            
            <div class="tp-postbox-main">
                <div class="row">
                    <div class="col-lg-8 mb-40">
                        <div class="tp-postbox-main-wrapper">
                        <div class="tp-postbox-details-content-wrapper">
                            <div class="tp-postbox-details-content-para tp-postbox-details-content-para-2 mb-50">
                                {!! $blogs->first()->description !!}
                            </div>
                            <div class="tp-postbox-comment-wrapper mb-75">
                                <div class="tp-postbox-comment">
                                    <h2 class="tp-postbox-comment-title-2 mb-35">{{ $blog_comment_count }} Comments</h2>
                                    <ul>
                                        @foreach ($blog_comment as $comment)
                                            <li>
                                                <div class="tp-postbox-comment-box tp-postbox-comment-box-2">
                                                    <div class="tp-postbox-comment-info mr-20">
                                                        <div class="tp-postbox-comment-avater">
                                                        <img src="{{ asset('frontend') }}/img/comment-1.jpg" alt="user">
                                                        </div>
                                                    </div>
                                                    <div class="tp-postbox-comment-text">
                                                        <div class="tp-postbox-comment-name mb-15">
                                                        <h6 class="tp-postbox-comment-title"><a href="#">{{ $comment->name }}</a></h6>
                                                        <span class="tp-post-meta">{{ $comment->created_at->format('d-M-Y') }}</span>
                                                        </div>
                                                        <p>{{$comment->message}}</p>

                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="tp-postbox-comment-form tp-postbox-comment-form-2">
                                <h3 class="tp-postbox-comment-form-title">Leave a comment</h3>
                                <p class="mb-40">Your email address will not be published. Required fields are marked *</p>
                                <div class="tp-postbox-comment-input tp-postbox-comment-input-2">
                                    <form action="{{ route('blog.comment') }}" method="POST">
                                        @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="tp-postbox-input mb-25">
                                                <label class="tp-label mb-5" for="name">Name *</label>
                                                <input class="tp-input" type="text" id="name" placeholder="Smith" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="tp-postbox-input mb-25">
                                                <label class="tp-label mb-5" for="name">Email *</label>
                                                <input class="tp-input" type="email" id="email" placeholder="housey@mail.com" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="tp-postbox-textarea mb-15">
                                                <label class="tp-label mb-5" for="textarea">Your Comment *</label>
                                                <textarea class="tp-textarea" id="textarea"  placeholder="Leave us a  Comment..." name="message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="tp-postbox-agree mb-30 d-flex align-items-start mb-25">
                                                <input class="tp-checkbox" type="checkbox" id="agree">
                                                <label class="tp-agree" for="agree">I agree that my submitted data is being <a href="#">collected and stored.</a></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="tp-room-review-form-btn">
                                                <button class="tp-btn-4" type="submit">Leave a comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-50">
                        <div class="tp-sidebar-wrapper tp-sticky">

                            <div class="tp-sidebar-widget">
                                <h3 class="tp-sidebar-widget-title mb-30">Recent Posts</h3>
                                @foreach ($latest_blogs->take(6) as $blog)
                                <div class="tp-sidebar-widget-content tp-sidebar-border">
                                    <h4 class="tp-sidebar-post-title"><a href="{{route('our.blog.details',$blog->slug)}}">{{$blog->title}}</a></h4>
                                    <div class="tp-sidebar-post-meta">
                                        <span>{{$blog->created_at->format('d M Y')}}</span>
                                        <span class="dvdr"></span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-postbox-details-area-end -->

@endsection
