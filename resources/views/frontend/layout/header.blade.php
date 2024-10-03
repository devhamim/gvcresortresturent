<!-- tp-offcanvus-area-end -->
<div class="tp-offcanvas-area tp-offcanvas-style-2">
    <div class="tp-offcanvas-wrapper">
       <div class="tp-offcanvas-top d-flex align-items-center justify-content-between">
          <div class="tp-offcanvas-logo">
             <a href="{{ url('/') }}">
                @if ($setting->first()->logo != null)
                    <img data-width="155" src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="">
                @endif
             </a>
          </div>
          <div class="tp-offcanvas-close">
             <button class="tp-offcanvas-close-btn">
                <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M9.19141 9.80762L27.5762 28.1924" stroke="currentColor" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                   <path d="M9.19141 28.1924L27.5762 9.80761" stroke="currentColor" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                </svg>
             </button>
          </div>
       </div>
       <div class="tp-offcanvas-main">
          <div class="tp-offcanvas-contact">
             <h3 class="tp-offcanvas-title sm">Information</h3>
             <ul>
                @if ($setting->first()->number != null)
                    <li><a href="tel:{{ $setting->first()->number }}">{{ $setting->first()->number }}</a></li>
                @endif
                @if ($setting->first()->email != null)
                    <li><a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a></li>
                @endif
                @if ($setting->first()->address != null)
                    <li><a href="{{ $setting->first()->address }}">{{ $setting->first()->address }}</a></li>
                @endif
             </ul>
          </div>
          <div class="tp-offcanvas-social">
             <h3 class="tp-offcanvas-title sm">Follow Us</h3>
             <ul>
                <li>
                    <a href="{{ $setting->first()->twitter }}" class="fa-brands fa-twitter"></a>
                </li>
                <li>
                    <a href="{{ $setting->first()->facebook }}" class="fa-brands fa-facebook-f"></a>
                </li>
                <li>
                    <a href="{{ $setting->first()->linkedin }}" class="fa-brands fa-linkedin-in"></a>
                </li>
                <li>
                    <a href="{{ $setting->first()->youtube }}" class="fa-brands fa-youtube"></a>
                </li>
             </ul>
          </div>
       </div>
    </div>
 </div>
 <div class="body-overlay"></div>
 <!-- tp-offcanvus-area-end -->

 <header class="tp-header-height">

    <!-- header-area-start -->
    <div id="header-sticky" class="tp-header-three-area p-relative z-index-1 tp-header-3-border header-sticky-white tp-transparent">
       <div class="container container-1700">
          <div class="row align-items-center">
             <div class="col-xxl-6 col-xl-6 col-lg-6 col-2">
                <div class="tp-header-3-menu-wrap d-flex align-items-center">
                   <div class="tp-header-3-menu-bar">
                      <button class="tp-offcanvas-open-btn">
                         <span></span>
                         <span></span>
                      </button>
                   </div>
                   <div class="tp-main-menu tp-main-menu-3 d-none d-lg-block">
                      <nav class="tp-mobile-menu-active">
                         <ul>
                            <li class="p-lg-inherit">
                               <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('room.finds')}}">Rooms</a>
                            </li>
                            <li><a href="{{route('services')}}">Service</a></li>
                            <li><a href="{{route('restaurant')}}">Restaurant</a></li>
                            <li><a href="{{route('gallerys')}}">Gallery</a></li>
                            <li>
                               <a href="{{ url('/') }}">Our Company<i class="fa-regular fa-angle-down"></i></a>
                               <div class="tp-mega-menu">
                                  <div class="tp-megamenu-small">
                                     <div class="row gx-6 row-cols-1 row-cols-lg-3">
                                        <div class="col">
                                           <div class="tp-megamenu-list">
                                              <ul>
                                                 <li><a href="{{route('about_us')}}">About</a></li>
                                                 <li><a href="{{route('our.blog')}}">Blog</a></li>
                                                 <li><a href="{{route('contect')}}">Contact</a></li>
                                              </ul>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </li>
                         </ul>
                      </nav>
                   </div>
                </div>
             </div>
             <div class="col-xxl-2 col-xl-2 col-lg-2 col-10">
                <div class="tp-header-logo tp-header-logo-3 text-center">
                   <a class="p-relative" href="{{ url('/') }}">
                    @if ($setting->first()->logo != null)
                        <img data-width="155" class="logo-normal" src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="logo">
                        <img data-width="155" class="logo-sticky" src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="logo">
                    @endif
                   </a>
                </div>
             </div>
             <div class="col-xxl-4 col-xl-4 col-lg-4">
                <div class="tp-header-3-right d-flex align-items-center justify-content-end">
                   <div class="tp-header-3-btn d-none d-lg-block ml-30">
                      <a class="tp-btn-4" href="{{route('room.finds')}}">
                         <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.9444 2.60059H3.05556C2.19645 2.60059 1.5 3.31691 1.5 4.20054V15.4002C1.5 16.2839 2.19645 17.0002 3.05556 17.0002H13.9444C14.8036 17.0002 15.5 16.2839 15.5 15.4002V4.20054C15.5 3.31691 14.8036 2.60059 13.9444 2.60059Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.6123 1V4.19991" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.38867 1V4.19991" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.5 7.40039H15.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                         </svg>
                      Book Now</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- header-area-end -->

 </header>
