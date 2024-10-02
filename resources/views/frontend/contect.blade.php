@extends('frontend.layout.app')
@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/02.jpg">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-title-wrap text-center">
                <h5 class="tp-breadcrumb-title-pre wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">Contect us</h5>
                <h2 class="tp-breadcrumb-title wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">Explore our Contect</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-breadcrumb-area-end -->
<!-- contact-area-start -->
<div class="tp-contact-area p-relative pt-120 mb-120">
<div class="tp-contact-shape-box">
    <div class="tp-contact-shape d-none d-lg-block"  data-parallax='{"y": 70, "smoothness": 100}'>
        <img src="{{ asset('frontend') }}/img/contact/shape-1.png" alt="shape">
    </div>
    <div class="tp-contact-shape-2 d-none d-lg-block"  data-parallax='{"y": 70, "smoothness": 100}'>
        <img src="{{ asset('frontend') }}/img/contact/shape-2.png" alt="shape2">
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-10">
            <div class="tp-contact-form-wrap">
            <div class="tp-contact-content mb-35 text-center">
                <span class="tp-contact-subtitle mb-20">Contact Us</span>
                <h2 class="tp-contact-title">Contact Our Team</h2>
                <div class="tp-contact-list">
                    <ul>
                        <li>
                        <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17C13.4183 17 17 13.4183 17 9Z" fill="#323232" stroke="#323232" />
                                <path d="M5.79688 9.60054C5.79688 9.60054 7.07687 10.3306 7.71687 11.4005C7.71687 11.4005 9.63687 7.20054 12.1969 5.80054" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <p>Need help with a booking?</p>
                        </li>
                        <li>
                        <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17C13.4183 17 17 13.4183 17 9Z" fill="#323232" stroke="#323232" />
                                <path d="M5.79688 9.60054C5.79688 9.60054 7.07687 10.3306 7.71687 11.4005C7.71687 11.4005 9.63687 7.20054 12.1969 5.80054" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <p>Do you have a question?</p>
                        </li>
                        <li>
                        <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17C13.4183 17 17 13.4183 17 9Z" fill="#323232" stroke="#323232" />
                                <path d="M5.79688 9.60054C5.79688 9.60054 7.07687 10.3306 7.71687 11.4005C7.71687 11.4005 9.63687 7.20054 12.1969 5.80054" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <p>Are you with the press?</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tp-contact-form tp-postbox-comment-input">
                <form action="{{ route('customerMessage.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                        <div class="tp-contact-input mb-25">
                            <label class="tp-label mb-5" for="fname">Full Name *</label>
                            <input name="name" class="tp-input" type="text" id="fname" placeholder="John" required>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <div class="tp-contact-input mb-25">
                            <label class="tp-label mb-5" for="lname">Last Name *</label>
                            <input name="l_name" class="tp-input" type="text" id="lname" placeholder="Smith" required>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <div class="tp-contact-input mb-25">
                            <label class="tp-label mb-5" for="email">Email *</label>
                            <input name="email" class="tp-input" type="email" id="email" placeholder="housey@mail.com" required>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <div class="tp-contact-input mb-25">
                            <label class="tp-label mb-5" for="phone">Phone Number *</label>
                            <input name="phone" class="tp-input" type="text" id="phone" placeholder="Phone Number" required>
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="tp-contact-input mb-25">
                            <label class="tp-label mb-5" for="subject">Subject</label>
                            <input name="subject" class="tp-input" type="text" id="subject" placeholder="Enter Subject" required>
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="tp-contact-textarea mb-15">
                            <label class="tp-label mb-5" for="textarea">Message *</label>
                            <textarea name="message" class="tp-textarea" id="textarea"  placeholder="Leave us a  message..." required></textarea>
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="tp-contact-agree mb-30 d-flex align-items-start mb-25">
                            <input name="checkbox" class="tp-checkbox" type="checkbox" id="agree" required>
                            <label class="tp-agree" for="agree">I agree to <a href="privacy-policy.html">terms & conditions </a></label>
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="tp-contact-comment-btn-wrap">
                            <button class="tp-btn-large w-100 text-center" type="submit">Send Message</button>
                        </div>
                        <p class="ajax-response mt-20"></p>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- contact-area-end -->

<!-- tp-contact-item-area-start -->
<div class="tp-contact-item-area">
<div class="container container-1430">
    <div class="tp-contact-bg" data-background="{{ asset('frontend') }}/img/contact/bg.jpg">
        <div class="row">
            <div class="col-lg-12">
            <div class="tp-contact-content mb-35 text-center">
                <span class="tp-contact-subtitle tp-contact-subtitle-2 mb-20">Contact Us</span>
                <h2 class="tp-contact-title tp-contact-title-2">Leave our team a message.</h2>
                <p class="tp-contact-dis">Fill free to contect our team</p>
            </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6">
            <div class="tp-contact-item mb-40">
                <span class="tp-contact-icon"><i class="fa-sharp fa-solid fa-phone"></i></span>
                <div class="tp-contact-text">
                    <h5>Phone</h5>
                    @if ($settings->first()->email != null)
                        <a href="tel:{{ $settings->first()->number }}">{{ $settings->first()->number }}</a>
                    @endif
                </div>
            </div>
            </div> --}}
            <div class="col-lg-6 col-md-6">
            <div class="tp-contact-item mb-40">
                <span class="tp-contact-icon"><i class="fa-regular fa-envelope"></i></span>
                <div class="tp-contact-text">
                    <h5>Email</h5>
                    @if ($settings->first()->email != null)
                        <p>{{ $settings->first()->email }}</p>
                    @endif
                </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-6">
            <div class="tp-contact-item mb-40">
                <span class="tp-contact-icon"><i class="fa-sharp fa-regular fa-location-dot"></i></span>
                <div class="tp-contact-text">
                    <h5>Address</h5>
                    @if ($settings->first()->address != null)
                        <p>{{ $settings->first()->address }}</p>
                    @endif
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-contact-item-area-end -->

@endsection
@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
