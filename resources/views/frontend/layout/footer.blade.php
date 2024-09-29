<footer>
    <div class="tp-footer-area tp-falured-bg-2 pt-120">
       <div class="container mb-50">
          <div class="row">
             <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6 mb-60">
                <div class="tp-footer-widget tp-footer-widget-3">
                   <div class="tp-footer-logo mb-25">
                    @if ($setting->first()->footer_logo != null)
                        <a href="{{ url('/') }}"><img data-width="155" src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt="logo"></a>
                    @endif
                   </div>
                   <div class="tp-footer-widget-content">
                      <div class="tp-footer-location tp-footer-location-3 mb-20">
                        @if ($setting->first()->address != null)
                            <a href="{{ $setting->first()->address }}">{{ $setting->first()->address }}</a>
                        @endif
                      </div>
                      <div class="tp-footer-number tp-footer-number-3 mb-15">
                        @if ($setting->first()->number != null)
                            <span class="tp-footer-call-title tp-footer-call-title-3">Call For Reservations</span>
                            <a href="tel:{{ $setting->first()->number }}" class="tp-footer-call">{{ $setting->first()->number }}</a>
                        @endif
                      </div>
                      <div class="tp-footer-number tp-footer-number-3 mb-15">
                        @if ($setting->first()->email != null)
                            <a href="mail:{{ $setting->first()->email }}" class="tp-footer-call">{{ $setting->first()->email }}</a>
                        @endif
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-4 col-lg-7 col-md-6 col-sm-6 mb-60">
                <div class="tp-footer-widget tp-footer-widget-3">
                   <h3 class="tp-footer-widget-title tp-footer-widget-title-3 mb-25">Quick Links</h3>
                   <div class="row">
                      <div class="col-lg-6 col-md-6">
                         <div class="tp-footer-widget-content tp-footer-widget-content-3">
                            <ul>
                                <li><a href="{{route('about_us')}}">About</a></li>
                                <li><a href="{{route('career')}}">Career</a></li>
                                <li><a href="{{ route('our.blog') }}">Blog</a></li>
                                <li><a href="{{route('contect')}}">Contact</a></li>
                                <li><a href="{{ route('our.privacy.policy') }}">Privacy Policy</a></li>
                            </ul>
                         </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                         <div class="tp-footer-widget-content tp-footer-widget-content-3">
                            <ul>
                                <li><a href="{{route('room.finds')}}">Room</a></li>
                                <li><a href="{{route('services')}}">Service</a></li>
                                <li><a href="{{route('restaurant')}}">Restaurant</a></li>
                                <li><a href="{{route('gallerys')}}">Gallery</a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mb-60">
                <div class="tp-footer-widget tp-footer-widget-3 pl-65">
                   <div class="tp-footer-form mb-20">
                    @if ( $setting->first()->about != null)
                        <p class="text-white">{{ $setting->first()->about }}</p>
                    @endif
                   </div>
                   <div class="tp-footer-social">
                        <a href="{{ $setting->first()->twitter }}" class="fa-brands fa-twitter"></a>
						<a href="{{ $setting->first()->facebook }}" class="fa-brands fa-facebook-f"></a>
                        <a href="{{ $setting->first()->linkedin }}" class="fa-brands fa-linkedin-in"></a>
                        <a href="{{ $setting->first()->youtube }}" class="fa-brands fa-youtube"></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="tp-footer-botom">
          <div class="container">
             <div class="tp-footer-bottom-inner">
                <div class="row">
                   <div class="col-sm-12">
                      <div class="tp-footer-copyright tp-footer-copyright-3">
                         <p>Copyright © {{ $setting->first()->footer }}</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
