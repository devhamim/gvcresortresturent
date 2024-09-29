@extends('frontend.layout.app')

@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/01.jpg">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-title-wrap text-center">
                <h5 class="tp-breadcrumb-title-pre">Our Luxurious Resort & Accommodations</h5>
                <h2 class="tp-breadcrumb-title">Blogd Details</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-breadcrumb-area-end -->

    <!-- tp-room-details-area-start -->
    <div class="tp-room-details-area pt-100 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tp-room-details-wrapper mb-35">
                    <div class="tp-room-details-slider mb-90">
                        <div class="swiper-container tp-room-details-slide-active pb-20">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tp-room-details-thumb">
                                        <img class="w-100" src="{{asset('uploads/rooms')}}/{{$rooms->first()->image}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-room-about-content mb-45">
                        <h2 class="tp-room-details-title mb-20">{{$rooms->first()->title}}</h2>
                        {!! $rooms->first()->description !!}
                    </div>
                    <div class="tp-room-about-amenities mb-65">
                        <h2 class="tp-room-details-title mb-30">Amenities</h2>
                        <div class="row tp-gx-23">
                            <div class="col-lg-6 col-md-6">
                                <div class="tp-room-about-amenities-item mb-25 d-flex align-items-center">
                                <div class="tp-room-about-amenities-icon">
                                    <span>
                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.3729 7.91525L28.661 14.6272L32.322 32.7288C32.5255 33.339 32.322 34.1526 31.7119 34.5593L30.2882 35.9831C29.2712 37 27.4406 36.5932 27.0339 35.3729L21.7457 21.7457L14.8305 28.661L15.2372 33.1356C15.2372 33.7458 15.0339 34.356 14.6272 34.7627L12.3898 37L8.11864 29.8813L1 25.6102L3.0339 22.9661C3.44068 22.5593 4.05084 22.3559 4.66102 22.3559L9.13559 22.7627L16.0508 15.8474L2.22034 10.5594C1 9.94919 0.59322 8.32203 1.61016 7.30508L3.0339 5.88136C3.44068 5.47458 4.25424 5.27118 4.8644 5.27118L22.9661 8.9322L29.678 2.22034C31.3051 0.59322 33.7458 0.59322 35.3729 2.22034C37 3.84746 37 6.28814 35.3729 7.91525Z" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <h5 class="tp-room-about-amenities-title">Airport Pickup</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="tp-room-about-amenities-item mb-25 d-flex align-items-center">
                                <div class="tp-room-about-amenities-icon">
                                    <span>
                                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 26.2189C3.12225 25.2763 5.5445 25.2763 7.6668 26.2189C9.789 27.1615 12.2113 27.1615 14.3335 26.2189C16.4558 25.2763 18.878 25.2763 21.0003 26.2189C23.1225 27.1615 25.5448 27.1615 27.667 26.2189C29.7893 25.2763 32.2115 25.2763 34.3338 26.2189" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.2588 10.2595H25.0738" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.2588 17.6667H25.0738" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M25.0752 21.3706V3.77782C25.0752 2.24446 26.3196 1 27.853 1C29.3864 1 30.6308 2.24446 30.6308 3.77782" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.2588 21.3706V3.77782C10.2588 2.24446 11.5032 1 13.0366 1C14.5699 1 15.8144 2.24446 15.8144 3.77782" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 33.6261C3.12225 32.6835 5.5445 32.6835 7.6668 33.6261C9.789 34.5687 12.2113 34.5687 14.3335 33.6261C16.4558 32.6835 18.878 32.6835 21.0003 33.6261C23.1225 34.5687 25.5448 34.5687 27.667 33.6261C29.7893 32.6835 32.2115 32.6835 34.3338 33.6261" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <h5 class="tp-room-about-amenities-title">Swimming Pool</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="tp-room-about-amenities-item mb-25 d-flex align-items-center">
                                <div class="tp-room-about-amenities-icon">
                                    <span>
                                        <svg width="36" height="27" viewBox="0 0 36 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.999 26.3041L18.0157 26.2856" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 6.73747C11.2 -0.912489 24.8 -0.912489 35 6.73747" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.09961 13.5375C12.8996 8.43752 23.0997 8.43752 29.8996 13.5375" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.0498 19.4876C15.8755 17.1075 20.1245 17.1069 23.95 19.4876" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <h5 class="tp-room-about-amenities-title">Fiber Internet</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="tp-room-about-amenities-item mb-25 d-flex align-items-center">
                                <div class="tp-room-about-amenities-icon">
                                    <span>
                                        <svg width="39" height="37" viewBox="0 0 39 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.0002 24.3335V22.389C24.0002 19.1671 21.3888 16.5557 18.1669 16.5557H8.44466C5.22272 16.5557 2.61133 19.1671 2.61133 22.389V24.3335" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1113 36.0001H6.50022C4.35161 36.0001 2.61133 34.2598 2.61133 32.1112V30.1667H24.0002V32.1112C24.0002 34.2598 22.2599 36.0001 20.1113 36.0001Z" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M0.666016 24.3335H25.9438" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.5519 16.5551L16.811 10.9784C16.6574 9.81183 17.5635 8.77734 18.7399 8.77734H35.6663C36.8505 8.77734 37.7585 9.82543 37.5913 10.9959L34.2585 34.3293C34.1205 35.2879 33.2999 35.9995 32.3335 35.9995H28.186" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M34.0166 1H29.8614C28.8969 1 28.0803 1.70583 27.9383 2.65861L27.0283 8.77778" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <h5 class="tp-room-about-amenities-title">Lunch & Breakfast</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="tp-room-about-amenities-item mb-25 d-flex align-items-center">
                                <div class="tp-room-about-amenities-icon">
                                    <span>
                                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5672 11.3785L11.3264 12.6886C10.3996 12.9204 9.46045 12.3569 9.22879 11.4301L8.16285 7.16648C8.0033 6.52826 8.02903 5.85767 8.23713 5.2335L9.25411 2.18272C9.48949 1.47641 10.1505 1 10.895 1H22.2395C22.984 1 23.645 1.47642 23.8805 2.18274L25.0567 5.71141C25.1607 6.0235 25.1736 6.35875 25.0938 6.67796L23.9058 11.4301C23.674 12.357 22.735 12.9204 21.8081 12.6887L16.5672 11.3785Z" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M32.134 16.5676V11.3784C32.134 8.51249 29.8107 6.18921 26.9448 6.18921H25.1445" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.06135 6.18921H6.18922C3.32329 6.18921 1 8.51249 1 11.3784V26.946C1 29.812 3.32329 32.1353 6.18922 32.1353H18.2974" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M23.2613 1.33728L16.5672 11.3784L9.87305 1.33728" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.6552 21.7571C16.6552 21.8051 16.6163 21.8439 16.5683 21.8439C16.5204 21.8439 16.4814 21.8051 16.4814 21.7571C16.4814 21.7091 16.5204 21.6703 16.5683 21.6703" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.5674 21.6703C16.6148 21.6703 16.6533 21.7089 16.6533 21.7563" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.6552 16.5682C16.6552 16.6161 16.6163 16.6551 16.5683 16.6551C16.5204 16.6551 16.4814 16.6161 16.4814 16.5682C16.4814 16.5202 16.5204 16.4813 16.5683 16.4813" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.5674 16.4813C16.6148 16.4813 16.6533 16.5198 16.6533 16.5672" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.81 32.9999C27.81 29.6563 25.0994 26.9457 21.7559 26.9457C25.0994 26.9457 27.81 24.2353 27.81 20.8917C27.81 24.2353 30.5204 26.9457 33.864 26.9457C30.5204 26.9457 27.81 29.6563 27.81 32.9999Z" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <h5 class="tp-room-about-amenities-title">Airport Pickup</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="tp-room-about-amenities-item mb-25 d-flex align-items-center">
                                <div class="tp-room-about-amenities-icon">
                                    <span>
                                        <svg width="40" height="19" viewBox="0 0 40 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4689 1H6.80345C6.46004 1 6.18164 1.27847 6.18164 1.62181V17.6508C6.18164 17.9942 6.46004 18.2726 6.80345 18.2726H12.4689C12.8122 18.2726 13.0907 17.9942 13.0907 17.6508V1.62181C13.0907 1.27847 12.8122 1 12.4689 1Z" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M33.1964 1H27.531C27.1875 1 26.9092 1.27847 26.9092 1.62181V17.6508C26.9092 17.9942 27.1875 18.2726 27.531 18.2726H33.1964C33.5398 18.2726 33.8182 17.9942 33.8182 17.6508V1.62181C33.8182 1.27847 33.5398 1 33.1964 1Z" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 14.1963V5.0764C1 4.73306 1.2784 4.45459 1.62181 4.45459H5.55996C5.90338 4.45459 6.18177 4.73306 6.18177 5.0764V14.1963C6.18177 14.5398 5.90338 14.8181 5.55996 14.8181H1.62181C1.2784 14.8181 1 14.5398 1 14.1963Z" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M39.0001 14.1963V5.0764C39.0001 4.73306 38.7218 4.45459 38.3783 4.45459H34.4402C34.0967 4.45459 33.8184 4.73306 33.8184 5.0764V14.1963C33.8184 14.5398 34.0967 14.8181 34.4402 14.8181H38.3783C38.7218 14.8181 39.0001 14.5398 39.0001 14.1963Z" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.0908 9.63635H26.9088" stroke="#A05916" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <h5 class="tp-room-about-amenities-title">Fitness Center</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tp-room-details-info-wrap  box-bg mb-35">
                <div class="tp-room-type-attributes">
                    <h3 class="tp-room-details-info-title mb-25">Information</h3>
                    <div class="row row-cols-2 tp-gx-15 mb-5">
                        <div class="col">
                            <div class="tp-room-type-capacity mb-20">
                            <div class="tp-room-type-icon">
                                <span>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.0712 18.3579V6.78589M17.0712 18.3579L15.1426 16.5307M17.0712 18.3579L18.9999 16.5307M17.0712 6.78589L15.1426 8.61304M17.0712 6.78589L18.9999 8.61304" stroke="#2D1A0E" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 2.92866H12.5719M1 2.92866L2.82715 1M1 2.92866L2.82715 4.85732M12.5719 2.92866L10.7448 1M12.5719 2.92866L10.7448 4.85732" stroke="#2D1A0E" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 17.715V7.42878C1 7.07372 1.28783 6.78589 1.64289 6.78589H11.9291C12.2842 6.78589 12.572 7.07372 12.572 7.42878V17.715C12.572 18.07 12.2842 18.3579 11.9291 18.3579H1.64289C1.28783 18.3579 1 18.07 1 17.715Z" stroke="#2D1A0E" stroke-width="0.8" />
                                    </svg>
                                </span>
                            </div>
                            <h5 class="tp-room-type-title">{{$rooms->first()->interior}}</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-room-type-capacity mb-20">
                            <div class="tp-room-type-icon">
                                <span>
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.25 14.6002V13.7502C5.25 11.403 7.15279 9.50024 9.5 9.50024C11.8473 9.50024 13.75 11.403 13.75 13.7502V14.6002" stroke="#2D1A0E" stroke-width="0.8" stroke-linecap="round" />
                                        <path d="M9.49922 9.49988C10.9075 9.49988 12.0492 8.35823 12.0492 6.9499C12.0492 5.54158 10.9075 4.3999 9.49922 4.3999C8.09089 4.3999 6.94922 5.54158 6.94922 6.9499C6.94922 8.35823 8.09089 9.49988 9.49922 9.49988Z" stroke="#2D1A0E" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.5 18C14.1944 18 18 14.1944 18 9.5C18 4.80558 14.1944 1 9.5 1C4.80558 1 1 4.80558 1 9.5C1 14.1944 4.80558 18 9.5 18Z" stroke="#2D1A0E" stroke-width="0.8" />
                                    </svg>
                                </span>
                            </div>
                            @php
                                $gest = $rooms->first()->adult+$rooms->first()->childreen;
                            @endphp
                            <h5 class="tp-room-type-title">{{$rooms->first()->adult}} - {{$gest}}People</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-room-type-capacity mb-20">
                            <div class="tp-room-type-icon">
                                <span>
                                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.02857 7.86443V3.79663C2.02857 3.54239 2.13143 3.03392 2.54286 3.03392C2.95429 3.03392 4.77143 3.03392 5.62857 3.03392C6.14286 2.4407 8.20362 1 10 1C11.8 1 12.9829 1.4068 14.6286 3.03392H17.4571C17.7143 3.11866 18.2286 3.38985 18.2286 3.79663C18.2286 4.20341 18.2286 6.67799 18.2286 7.86443M2.02857 7.86443C1.68571 8.03391 1 8.5763 1 9.3898C1 9.8241 1 10.8571 1 11.9322M2.02857 7.86443H4.34286M18.2286 7.86443C18.8457 8.27122 19 9.0509 19 9.3898V11.9322M18.2286 7.86443H15.6571M1 11.9322H19M1 11.9322C1 12.8713 1 13.8424 1 14.4746H1.77143M4.34286 7.86443V5.32203C4.34286 5.0678 4.44571 4.55932 4.85714 4.55932C5.26857 4.55932 8.11429 4.55932 9.48571 4.55932C9.74286 4.55932 10 4.86441 10 5.0678M4.34286 7.86443H10M19 11.9322V14.4746H18.2286M15.6571 7.86443C15.6571 7.01696 15.6571 5.27119 15.6571 5.0678C15.6571 4.86441 15.4 4.55932 15.1429 4.55932H10.5143C10.2571 4.55932 10.0857 4.81356 10 5.0678M15.6571 7.86443H10M18.2286 14.4746H1.77143M18.2286 14.4746V16M1.77143 14.4746V16M10 5.0678C10 5.27119 10 7.01696 10 7.86443" stroke="#2D1A0E" stroke-width="0.8" stroke-linecap="round" />
                                    </svg>
                                </span>
                            </div>
                            <h5 class="tp-room-type-title">2 Beds</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-room-type-capacity mb-20">
                            <div class="tp-room-type-icon">
                                <span>
                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 10.1665H19.3333" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.417 10.1667L17.9179 13.3615C17.6281 15.2161 16.0307 16.5834 14.1535 16.5834H6.18047C4.30333 16.5834 2.70589 15.2161 2.41613 13.3615L1.91699 10.1667" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4.78696 16.3149L3.75 17.4999" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.5469 16.3149L16.5839 17.4999" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.14844 3.75H9.3534C10.325 3.75 11.1876 4.37172 11.4949 5.29346C11.588 5.57299 11.5412 5.88028 11.3689 6.11932C11.1966 6.35836 10.9199 6.5 10.6252 6.5H7.87664C7.58198 6.5 7.30528 6.35836 7.13299 6.11932C6.9607 5.88028 6.91383 5.57299 7.007 5.29346C7.31425 4.37172 8.17684 3.75 9.14844 3.75Z" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.24998 3.75C9.24998 2.23122 8.01878 1 6.5 1C4.98122 1 3.75 2.23122 3.75 3.75V10.1667" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <h5 class="tp-room-type-title">{{$rooms->first()->subtitle}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-room-regular-price-wrap mb-30 tp-room-regular-price-border d-flex justify-content-between">
                    <span class="tp-room-regular-price-title">Per Night:</span>
                    <span class="tp-room-regular-price">{{$rooms->first()->price}} USD</span>
                </div>
                <div class="tp-room-extra-services mb-40">
                    <h3 class="tp-room-details-info-title mb-30">Extra Services</h3>
                    <ul>
                        <li>
                            <span>
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8068 9.05005C12.5694 9.35927 12.2045 9.54418 11.8146 9.55254C11.4256 9.54183 11.0618 9.35744 10.8232 9.05005" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.17601 9.05005C7.93877 9.35907 7.57415 9.54387 7.18462 9.55254C6.79533 9.54193 6.43125 9.35754 6.19238 9.05005" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 17.1104C12.692 17.1087 15.4883 14.9719 16.3283 11.8925C17.28 11.7868 18 10.9824 18 10.0249C18 9.06732 17.28 8.26295 16.3283 8.15729C15.49 5.07659 12.6927 2.93872 9.5 2.93872C6.30727 2.93872 3.50994 5.07659 2.67167 8.15729C1.72001 8.26295 1 9.06732 1 10.0249C1 10.9824 1.72001 11.7868 2.67167 11.8925C3.51171 14.9719 6.30804 17.1087 9.5 17.1104Z" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.3898 12.5815C10.3073 13.5258 8.69381 13.5258 7.61133 12.5815" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.56152 1C8.07588 1 8.56918 1.20433 8.93289 1.56804C9.29661 1.93175 9.5009 2.42504 9.5009 2.93941" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.50098 2.93941C9.50098 2.42504 9.70526 1.93175 10.069 1.56804C10.4327 1.20433 10.926 1 11.4404 1" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            Kids Play Area
                        </li>
                        <li>
                            <span>
                            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.0003 13.1536C13.2316 13.1536 15.8511 10.5341 15.8511 7.30274C15.8511 4.07141 13.2316 1.4519 10.0003 1.4519C6.76892 1.4519 4.14941 4.07141 4.14941 7.30274C4.14941 10.5341 6.76892 13.1536 10.0003 13.1536Z" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.57525 1C0.141584 4.49892 0.141584 10.1029 3.57525 13.6018" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.4248 1C19.8584 4.49892 19.8584 10.1029 16.4248 13.6018" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.04688 9.66543V4.9397H10.4501C11.1959 4.9397 11.8004 5.5442 11.8004 6.2899C11.8004 7.03559 11.1959 7.64012 10.4501 7.64012H9.04688" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            </span>
                            Free Private Parking
                        </li>
                        <li>
                            <span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.84082 15.4091H5.6297M5.6297 15.4091H8.4186M5.6297 15.4091V10.761" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.0674 15.4092V7.97219C13.0674 7.97219 15.3915 7.04257 15.3915 5.18331C15.3915 3.54963 15.3915 1 15.3915 1" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.0674 4.71851V1" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1.44602 7.04257C2.37558 9.02087 5.62934 10.7611 5.62934 10.7611C5.62934 10.7611 8.8831 9.02087 9.8127 7.04257C10.8162 4.90683 9.8127 1 9.8127 1H1.44602C1.44602 1 0.442478 4.90683 1.44602 7.04257Z" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            Delicious Meals & Snacks
                        </li>
                        <li>
                            <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.6748 5.44458H15.6179C16.3824 5.44458 17.0011 6.06324 17.0011 6.82768V15.6179C17.0011 16.3814 16.3824 17.0001 15.6179 17.0001H5.93974C5.1753 17.0001 4.55664 16.3814 4.55664 15.617V14.3334" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.88986 14.3333H11.9449C12.5396 14.3333 13.0942 14.0364 13.4241 13.5413L14.0764 12.5617C14.4658 11.9777 14.6738 11.2915 14.6738 10.5894V3.66669C14.6738 2.68448 13.8782 1.88892 12.8961 1.88892H4.00718C3.02497 1.88892 2.22942 2.68448 2.22942 3.66669V9.93869C2.22942 10.4907 2.10052 11.0347 1.8543 11.5289L1.09519 13.047C0.799194 13.6382 1.22942 14.3333 1.88986 14.3333Z" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5.78223 1V2.77777" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.1152 1V2.77777" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5.61328 6.33325H10.9466" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5.61328 9.88892H10.9466" stroke="#5A5859" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            </span>
                            Free Early Check in
                        </li>
                    </ul>
                </div>
                <div class="tp-purches-btn">
                    <form action="{{route('gest.room.book')}}" method="POST" id="dreamit-form">
                        @csrf
                        <input type="hidden" name="room_id" value="{{$rooms->first()->id}}">
                        <input type="date" class="form-control my-3" name="checkin" value="{{$checkIn}}" required>
                            @error('checkin')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        <input type="date" class="form-control "  name="checkout" value="{{$checkOut}}" required>
                            @error('checkout')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        <div class="py-3" style="padding: 25px 0">
                            <select name="rooms" class="form-control" required>
                                <option value="1">1 Rooms</option>
                                <option value="2">2 Rooms</option>
                                <option value="3">3 Rooms</option>
                                <option value="4">4 Rooms</option>
                                <option value="5">5 Rooms</option>
                            </select>
                        </div>
                        <select name="gest" class="form-control" required>
                            @foreach ($rooms as $room)
                                <option value="{{$room->id}}">{{$room->adult}} Adult, {{$room->childreen}}  Child</option>
                            @endforeach
                        </select>
                        <button class="tp-btn-falured mt-3" type="submit">Book this room</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- tp-room-details-area-end -->

@endsection
