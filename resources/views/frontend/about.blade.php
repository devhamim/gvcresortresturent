@extends('frontend.layout.app')
@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/18.jpg">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-title-wrap text-center">
                <h5 class="tp-breadcrumb-title-pre wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">About Us</h5>
                <h2 class="tp-breadcrumb-title wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">Explore our About</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-breadcrumb-area-end -->
<!-- tp-about-area-start -->
<div class="tp-about-top-area fix pt-125">
<div class="container">
    <div class="tp-about-top-inner pb-60">
        <div class="row align-items-end">
            <div class="col-lg-8">
            <div class="tp-about-top-content mb-50">
                <h6 class="tp-about-top-subtitle"><span></span> About us</h6>
                <h2 class="tp-about-top-title">Building your success through our unique <span>story.</span></h2>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="tp-about-top-logo-content">
                <div class="tp-about-top-logo mb-30 p-relative">
                    <img class="rotate-infinite-2" src="{{ asset('frontend') }}/img/about/about-4/shape.png" alt="">
                    <img class="shape" src="{{ asset('frontend') }}/img/about/about-4/brand.png" alt="">
                </div>
                <p>Welcome to our Resort And Restaurant on
                    exciting coastline.</p>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-about-area-end -->

<div class="tp-about-big-thumb jarallax fix p-relative">
<img class="w-100 jarallax-img" src="{{ asset('frontend') }}/img/about/about-4/bg.jpg" alt="thumb">
</div>

<!-- tp-about-4-start -->
<div class="tp-about-area pt-115 fix pb-60">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-10">
            <div class="tp-about-top-content mb-70">
            <h6 class="tp-about-top-subtitle"><span></span> About us</h6>
            <h2 class="tp-about-top-title tp-about-top-title-2">Australia's Ultimate Luxury Resort and Dining Retreat!</h2>
            </div>
        </div>
        <div class="col-lg-2 d-none d-lg-block">
            <div class="tp-about-4-shape mb-70 text-right">
            <img src="{{ asset('frontend') }}/img/about/about-4/shape-2.png" alt="shape">
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="tp-about-4-thumb p-relative mb-40">
            <img class="w-100" src="{{ asset('frontend') }}/img/about/about-4/thumb.jpg" alt="thumb">
            <div class="tp-about-4-expreance">
                <div class="p-relative">
                    <img class="rotate-infinite" src="{{ asset('frontend') }}/img/about/about-4/yers.png" alt="year">
                    <div class="tp-about-4-expreance-content text-center">
                        <span class="d-block mb-10">
                        <svg width="47" height="36" viewBox="0 0 47 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7871 35.5615C15.1432 35.5615 14.5068 35.4867 13.8779 35.3369C13.264 35.2021 12.3955 34.9701 11.2725 34.6406C10.2393 34.3411 9.35579 34.1165 8.62207 33.9668C7.88835 33.8021 7.13965 33.7197 6.37598 33.7197C5.53743 33.7197 4.69889 33.8245 3.86035 34.0342C3.03678 34.2288 2.17578 34.5658 1.27734 35.0449H1.09766C0.917969 34.3262 0.828125 33.6299 0.828125 32.9561C0.828125 31.833 1.06022 30.7699 1.52441 29.7666C2.30306 27.9847 3.71061 26.0755 5.74707 24.0391C6.97493 22.8112 7.91081 21.8903 8.55469 21.2764C9.85742 19.9886 10.8981 18.9255 11.6768 18.0869C12.4704 17.2484 13.1816 16.3724 13.8105 15.459C14.5742 14.3659 15.1582 13.2728 15.5625 12.1797C15.9818 11.0716 16.1914 9.92611 16.1914 8.74316C16.1914 6.99121 15.9219 5.62858 15.3828 4.65527C14.7839 3.59212 13.9079 3.06055 12.7549 3.06055C12.2308 3.06055 11.7367 3.15788 11.2725 3.35254C10.8232 3.53223 10.4414 3.79427 10.127 4.13867C9.8125 4.48307 9.56543 4.88737 9.38574 5.35156C9.20605 5.81576 9.11621 6.29492 9.11621 6.78906C9.11621 7.85221 9.31836 8.78809 9.72266 9.59668C10.1419 10.3903 10.6735 10.9818 11.3174 11.3711V11.5508C10.7933 12.0299 10.2243 12.4118 9.61035 12.6963C8.99642 12.9658 8.40495 13.1006 7.83594 13.1006C7.38672 13.1006 6.95996 12.9958 6.55566 12.7861C6.15137 12.5765 5.79948 12.2695 5.5 11.8652C4.84115 10.9818 4.51172 9.80632 4.51172 8.33887C4.51172 7.41048 4.72135 6.4821 5.14062 5.55371C5.57487 4.61035 6.1888 3.76432 6.98242 3.01562C7.83594 2.22201 8.86914 1.60059 10.082 1.15137C11.2949 0.702148 12.6576 0.477539 14.1699 0.477539C15.4727 0.477539 16.6706 0.672201 17.7637 1.06152C18.8568 1.43587 19.8001 1.98242 20.5938 2.70117C21.4023 3.4349 22.0238 4.32585 22.458 5.37402C22.8923 6.40723 23.1094 7.5752 23.1094 8.87793C23.1094 10.8994 22.4056 12.846 20.998 14.7178C20.3991 15.5114 19.6878 16.2975 18.8643 17.0762C18.0557 17.8548 17.1198 18.6709 16.0566 19.5244C14.7988 20.5127 13.848 21.2464 13.2041 21.7256C11.0179 23.3727 9.2959 24.8776 8.03809 26.2402C7.31934 27.0039 6.72038 27.82 6.24121 28.6885C7.07975 28.4639 8.01562 28.3516 9.04883 28.3516C10.2168 28.3516 11.6169 28.5238 13.249 28.8682C14.1025 29.0479 14.7764 29.1826 15.2705 29.2725C15.7796 29.3473 16.2663 29.3848 16.7305 29.3848C17.5391 29.3848 18.2952 29.2126 18.999 28.8682C19.7178 28.5088 20.459 27.9023 21.2227 27.0488L21.3574 27.1387C21.7467 28.2318 21.9414 29.1826 21.9414 29.9912C21.9414 30.8148 21.7767 31.571 21.4473 32.2598C21.1178 32.9336 20.6611 33.5176 20.0771 34.0117C19.5081 34.5059 18.8493 34.8877 18.1006 35.1572C17.3669 35.4268 16.5957 35.5615 15.7871 35.5615Z" fill="white" />
                            <path d="M32.8799 35.2246C30.1546 35.2246 28.0732 34.6481 26.6357 33.4951C25.2132 32.3421 24.502 30.6875 24.502 28.5312C24.502 27.5879 24.6442 26.7194 24.9287 25.9258C25.2132 25.1322 25.625 24.4434 26.1641 23.8594C27.2572 22.6764 28.6872 22.085 30.4541 22.085C32.3258 22.085 33.4189 22.8636 33.7334 24.4209C32.4606 24.5706 31.4499 25.0273 30.7012 25.791C29.9674 26.5397 29.6006 27.5055 29.6006 28.6885C29.6006 29.7666 29.915 30.6126 30.5439 31.2266C31.1729 31.8405 32.0339 32.1475 33.127 32.1475C34.0104 32.1475 34.8265 31.9453 35.5752 31.541C36.3389 31.1217 36.9902 30.5228 37.5293 29.7441C38.0684 28.9805 38.4801 28.082 38.7646 27.0488C39.0641 26.0156 39.2139 24.8851 39.2139 23.6572C39.2139 21.516 38.7721 19.8763 37.8887 18.7383C37.0202 17.5853 35.7773 17.0088 34.1602 17.0088C33.3066 17.0088 32.3932 17.181 31.4199 17.5254C30.4466 17.8548 29.3535 18.3789 28.1406 19.0977L27.5117 18.6484L31.083 1.24121C34.3174 1.64551 36.8854 1.84766 38.7871 1.84766C40.1647 1.84766 41.4974 1.75033 42.7852 1.55566C44.0879 1.34603 45.4281 1.00911 46.8057 0.544922C46.8656 1.00911 46.8955 1.51823 46.8955 2.07227C46.8955 3.64453 46.5062 4.89486 45.7275 5.82324C44.8441 6.87142 43.474 7.39551 41.6172 7.39551C40.6139 7.39551 39.2588 7.23079 37.5518 6.90137C36.9678 6.81152 36.3014 6.68424 35.5527 6.51953L33.9355 6.25L32.0938 14.583C34.0254 13.6247 35.9271 13.1455 37.7988 13.1455C39.0267 13.1455 40.1423 13.3626 41.1455 13.7969C42.1488 14.2311 43.0098 14.86 43.7285 15.6836C44.4473 16.5072 44.9938 17.5104 45.3682 18.6934C45.7425 19.8763 45.9297 21.1865 45.9297 22.624C45.9297 24.4808 45.6152 26.1803 44.9863 27.7227C44.3724 29.265 43.4889 30.6051 42.3359 31.7432C41.1979 32.8662 39.8203 33.7272 38.2031 34.3262C36.5859 34.9251 34.8115 35.2246 32.8799 35.2246Z" fill="white" />
                            </svg>
                        </span>
                        <span class="tp-about-4-expreance-year">Years of<br>  Experience</span>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="tp-about-4-content mb-40">
            <p class="mb-90">Discover Australia’s finest luxury resort and exclusive dining retreat, where refined elegance meets natural splendor. Catering to discerning guests, from global influencers to celebrities, this resort is a sanctuary of sophistication. Every experience, from lavish accommodations to the finest gourmet dining, is crafted with attention to detail. More than just a stay, it's a destination where the essence of luxury, prestige, and the beauty of Australia unite, offering an unforgettable escape.</p>
            <div class="tp-about-4-client-wrap">
                <div class="tp-about-4-client-img mb-10">
                    <img src="{{ asset('frontend') }}/img/about/about-4/user.png" alt="user">
                </div>
                <div class="tp-about-4-client-review mb-10">
                    <p><span>3256+</span><br> Client-Reviews</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-about-4-end -->

<!-- tp-counter-area-start -->
<div class="tp-counter-area pb-120">
<div class="container">
    <div class="row gx-0">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="tp-counter-item">
            <h3 class="tp-counter-number"><span data-purecounter-duration="1"
                data-purecounter-end="45" class="purecounter">0</span>+</h3>
            <span class="tp-counter-title">Realized Projects</span>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="tp-counter-item">
            <h3 class="tp-counter-number"><span data-purecounter-duration="1"
                data-purecounter-end="16" class="purecounter">0</span>+</h3>
            <span class="tp-counter-title">Years experiences</span>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="tp-counter-item">
            <h3 class="tp-counter-number"><span data-purecounter-duration="1"
                data-purecounter-end="96" class="purecounter">0</span>+</h3>
            <span class="tp-counter-title">Happy customers</span>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="tp-counter-item">
            <h3 class="tp-counter-number"><span data-purecounter-duration="1"
                data-purecounter-end="14" class="purecounter">0</span>+</h3>
            <span class="tp-counter-title">trusted partners</span>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-counter-area-end -->

<!-- tp-text-slider-area-start -->
<div class="tp-text-slider tp-falured-bg tp-text-spacing">
<div class="swiper-container tp-brand-active-2">
    <div class="swiper-wrapper slide-transtion">
        <div class="swiper-slide">
            <div class="tp-text-slider-content tp-text-slider-content-2">
            <h4 class="tp-text-slider-title">Elegan
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0L10.5006 6.83939L13.0902 0.489436L11.4528 7.14879L15.8779 1.90983L12.2628 7.73725L18.0902 4.12214L12.8512 8.54721L19.5106 6.90982L13.1606 9.49939L20 10L13.1606 10.5006L19.5106 13.0902L12.8512 11.4528L18.0902 15.8779L12.2628 12.2628L15.8779 18.0902L11.4528 12.8512L13.0902 19.5106L10.5006 13.1606L10 20L9.49939 13.1606L6.90982 19.5106L8.54721 12.8512L4.12214 18.0902L7.73725 12.2628L1.90983 15.8779L7.14879 11.4528L0.489436 13.0902L6.83939 10.5006L0 10L6.83939 9.49939L0.489436 6.90982L7.14879 8.54721L1.90983 4.12214L7.73725 7.73725L4.12214 1.90983L8.54721 7.14879L6.90982 0.489436L9.49939 6.83939L10 0Z" fill="#FAF5EF" />
                </svg>
            </h4>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-text-slider-content tp-text-slider-content-2">
            <h4 class="tp-text-slider-title">Relaxing
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0L10.5006 6.83939L13.0902 0.489436L11.4528 7.14879L15.8779 1.90983L12.2628 7.73725L18.0902 4.12214L12.8512 8.54721L19.5106 6.90982L13.1606 9.49939L20 10L13.1606 10.5006L19.5106 13.0902L12.8512 11.4528L18.0902 15.8779L12.2628 12.2628L15.8779 18.0902L11.4528 12.8512L13.0902 19.5106L10.5006 13.1606L10 20L9.49939 13.1606L6.90982 19.5106L8.54721 12.8512L4.12214 18.0902L7.73725 12.2628L1.90983 15.8779L7.14879 11.4528L0.489436 13.0902L6.83939 10.5006L0 10L6.83939 9.49939L0.489436 6.90982L7.14879 8.54721L1.90983 4.12214L7.73725 7.73725L4.12214 1.90983L8.54721 7.14879L6.90982 0.489436L9.49939 6.83939L10 0Z" fill="#FAF5EF" />
                </svg>
            </h4>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-text-slider-content tp-text-slider-content-2">
            <h4 class="tp-text-slider-title">Comfort
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0L10.5006 6.83939L13.0902 0.489436L11.4528 7.14879L15.8779 1.90983L12.2628 7.73725L18.0902 4.12214L12.8512 8.54721L19.5106 6.90982L13.1606 9.49939L20 10L13.1606 10.5006L19.5106 13.0902L12.8512 11.4528L18.0902 15.8779L12.2628 12.2628L15.8779 18.0902L11.4528 12.8512L13.0902 19.5106L10.5006 13.1606L10 20L9.49939 13.1606L6.90982 19.5106L8.54721 12.8512L4.12214 18.0902L7.73725 12.2628L1.90983 15.8779L7.14879 11.4528L0.489436 13.0902L6.83939 10.5006L0 10L6.83939 9.49939L0.489436 6.90982L7.14879 8.54721L1.90983 4.12214L7.73725 7.73725L4.12214 1.90983L8.54721 7.14879L6.90982 0.489436L9.49939 6.83939L10 0Z" fill="#FAF5EF" />
                </svg>
            </h4>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-text-slider-content tp-text-slider-content-2">
            <h4 class="tp-text-slider-title">Experiences
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0L10.5006 6.83939L13.0902 0.489436L11.4528 7.14879L15.8779 1.90983L12.2628 7.73725L18.0902 4.12214L12.8512 8.54721L19.5106 6.90982L13.1606 9.49939L20 10L13.1606 10.5006L19.5106 13.0902L12.8512 11.4528L18.0902 15.8779L12.2628 12.2628L15.8779 18.0902L11.4528 12.8512L13.0902 19.5106L10.5006 13.1606L10 20L9.49939 13.1606L6.90982 19.5106L8.54721 12.8512L4.12214 18.0902L7.73725 12.2628L1.90983 15.8779L7.14879 11.4528L0.489436 13.0902L6.83939 10.5006L0 10L6.83939 9.49939L0.489436 6.90982L7.14879 8.54721L1.90983 4.12214L7.73725 7.73725L4.12214 1.90983L8.54721 7.14879L6.90982 0.489436L9.49939 6.83939L10 0Z" fill="#FAF5EF" />
                </svg>
            </h4>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-text-slider-content tp-text-slider-content-2">
            <h4 class="tp-text-slider-title">Beautiful
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0L10.5006 6.83939L13.0902 0.489436L11.4528 7.14879L15.8779 1.90983L12.2628 7.73725L18.0902 4.12214L12.8512 8.54721L19.5106 6.90982L13.1606 9.49939L20 10L13.1606 10.5006L19.5106 13.0902L12.8512 11.4528L18.0902 15.8779L12.2628 12.2628L15.8779 18.0902L11.4528 12.8512L13.0902 19.5106L10.5006 13.1606L10 20L9.49939 13.1606L6.90982 19.5106L8.54721 12.8512L4.12214 18.0902L7.73725 12.2628L1.90983 15.8779L7.14879 11.4528L0.489436 13.0902L6.83939 10.5006L0 10L6.83939 9.49939L0.489436 6.90982L7.14879 8.54721L1.90983 4.12214L7.73725 7.73725L4.12214 1.90983L8.54721 7.14879L6.90982 0.489436L9.49939 6.83939L10 0Z" fill="#FAF5EF" />
                </svg>
            </h4>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-text-slider-content tp-text-slider-content-2">
            <h4 class="tp-text-slider-title">Elegan
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0L10.5006 6.83939L13.0902 0.489436L11.4528 7.14879L15.8779 1.90983L12.2628 7.73725L18.0902 4.12214L12.8512 8.54721L19.5106 6.90982L13.1606 9.49939L20 10L13.1606 10.5006L19.5106 13.0902L12.8512 11.4528L18.0902 15.8779L12.2628 12.2628L15.8779 18.0902L11.4528 12.8512L13.0902 19.5106L10.5006 13.1606L10 20L9.49939 13.1606L6.90982 19.5106L8.54721 12.8512L4.12214 18.0902L7.73725 12.2628L1.90983 15.8779L7.14879 11.4528L0.489436 13.0902L6.83939 10.5006L0 10L6.83939 9.49939L0.489436 6.90982L7.14879 8.54721L1.90983 4.12214L7.73725 7.73725L4.12214 1.90983L8.54721 7.14879L6.90982 0.489436L9.49939 6.83939L10 0Z" fill="#FAF5EF" />
                </svg>
            </h4>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-text-slider-content tp-text-slider-content-2">
            <h4 class="tp-text-slider-title">Beautiful
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 0L10.5006 6.83939L13.0902 0.489436L11.4528 7.14879L15.8779 1.90983L12.2628 7.73725L18.0902 4.12214L12.8512 8.54721L19.5106 6.90982L13.1606 9.49939L20 10L13.1606 10.5006L19.5106 13.0902L12.8512 11.4528L18.0902 15.8779L12.2628 12.2628L15.8779 18.0902L11.4528 12.8512L13.0902 19.5106L10.5006 13.1606L10 20L9.49939 13.1606L6.90982 19.5106L8.54721 12.8512L4.12214 18.0902L7.73725 12.2628L1.90983 15.8779L7.14879 11.4528L0.489436 13.0902L6.83939 10.5006L0 10L6.83939 9.49939L0.489436 6.90982L7.14879 8.54721L1.90983 4.12214L7.73725 7.73725L4.12214 1.90983L8.54721 7.14879L6.90982 0.489436L9.49939 6.83939L10 0Z" fill="#FAF5EF" />
                </svg>
            </h4>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-text-slider-area-end -->

<!-- tp-video-area-start -->
<div class="tp-video-area bg-position jarallax p-relative" data-background="{{ asset('frontend') }}/img/video/01.jpg">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="tp-video-three-wrap tp-video-three-spacing text-center">
            <div class="tp-video-main mb-45">
                <a class="tp-video-three-play popup-video tp-pulse-border p-relative" href="{{ asset('uploads/1.mp4') }}">
                    <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 13L0.5 25.9904V0.00961876L23 13Z" fill="#FAF5EF" />
                    </svg>
                </a>
            </div>
            <h3 class="tp-video-title">Experience a <a href="#"> Memorable</a> <br> Stay at our Hotel.!</h3>
            </div>
        </div>
    </div>
</div>

</div>
<!-- tp-video-area-end -->

<!-- tp-about-hotel-area-start -->
<div class="tp-about-area pt-120 mb-120">
<div class="container">
    <div class="tp-about-hotel-border">
        <div class="row align-items-center">
            <div class="col-lg-6">
            <div class="tp-about-hotel-thumb">
                <img class="w-100" src="{{ asset('frontend') }}/img/about/hotel/thumb.jpg" alt="thumb">
            </div>
            </div>
            <div class="col-lg-6">
            <div class="tp-about-hotel-content">
                <div class="tp-about-title-box mb-35">
                    <span class="tp-about-hotel-subtitle">About Our Hotel</span>
                    <h2 class="tp-about-hotel-title mb-15">Experience Luxury from a New Perspective</h2>
                    <p>Immerse yourself in unparalleled elegance at Australia’s most exclusive resort. With breathtaking views, world-class amenities, and exquisite dining, every moment offers a fresh take on luxury and relaxation. Discover a place where sophistication meets serenity, creating an unforgettable escape.</p>
                </div>
                <div class="tp-about-hotel-feature mb-35">
                    <ul>
                        <li>
                        <i class="fa-sharp fa-solid fa-check"></i>
                        <span>Breathtaking Views</span>
                        </li>
                        <li>
                        <i class="fa-sharp fa-solid fa-check"></i>
                        <span>World-Class Accommodations</span>
                        </li>
                        <li>
                        <i class="fa-sharp fa-solid fa-check"></i>
                        <span>Exquisite Dining</span>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-about-hotel-area-end -->

<!-- tp-brand-area-start -->
<div class="tp-brand-area tp-brand-border-2">
<div class="swiper-container tp-brand-active" >
    <div class="swiper-wrapper slide-transtion">
        <div class="swiper-slide">
            <div class="tp-brand-item">
            <a href="#"><img src="{{ asset('frontend') }}/img/brands/01.png" alt="brands"></a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-brand-item">
            <a href="#"><img src="{{ asset('frontend') }}/img/brands/02.png" alt="brands"></a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-brand-item">
            <a href="#"><img src="{{ asset('frontend') }}/img/brands/03.png" alt="brands"></a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-brand-item">
            <a href="#"><img src="{{ asset('frontend') }}/img/brands/04.png" alt="brands"></a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-brand-item">
            <a href="#"><img src="{{ asset('frontend') }}/img/brands/05.png" alt="brands"></a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-brand-item">
            <a href="#"><img src="{{ asset('frontend') }}/img/brands/02.png" alt="brands"></a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-brand-item">
            <a href="#"><img src="{{ asset('frontend') }}/img/brands/03.png" alt="brands"></a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-brand-item">
            <a href="#"><img src="{{ asset('frontend') }}/img/brands/04.png" alt="brands"></a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="tp-brand-item">
            <a href="#"><img src="{{ asset('frontend') }}/img/brands/05.png" alt="brands"></a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-brand-area-end -->

@endsection
