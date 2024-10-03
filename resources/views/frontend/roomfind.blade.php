@extends('frontend.layout.app')
@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/20.jpg">
<div class="container p-relative">
    <div class="row">
        <div class="col-lg-12">
            <div class="tp-breadcrumb-title-wrap text-center">
            <h5 class="tp-breadcrumb-title-pre wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">Our Luxurious Resort & Accommodations</h5>
            <h2 class="tp-breadcrumb-title wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">Explore our Rooms</h2>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-breadcrumb-area-end -->

<!-- tp-booking-area-start -->
<div id="booking" class="tp-booking-area tp-falured-bg pt-50 pb-60">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="tp-booking-title-wrap mb-45 text-center p-relative">
                <h2 class="tp-booking-title">Reservations</h2>
                <span class="tp-booking-border p-absolute"></span>
            </div>
        </div>
        <div class="col-12">
            <form action="{{route('search.rooms')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="tp-booking-form-input tp-booking-active pb-20 mr-5">
                                    <p>Arrival Date</p>
                                    <div class="p-relative">
                                        <input name="check_in" required type="date" placeholder="dd/mm/yyyy" class="form-control">
                                        @error('check_in')
                                            <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="tp-booking-form-input pb-20 mr-5">
                                    <p>Departure Date</p>
                                    <div class="p-relative">
                                        <input name="check_out" required type="date" placeholder="dd/mm/yyyy" class="form-control">
                                        @error('check_out')
                                            <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="tp-booking-form-input pb-20 mr-5">
                                    <p>Room</p>
                                    <div class="p-relative">
                                        <select name="rooms" id="child" class="form-control">
                                            <option value="1">1 Rooms</option>
                                            <option value="2">2 Rooms</option>
                                            <option value="3">3 Rooms</option>
                                            <option value="4">4 Rooms</option>
                                            <option value="5">5 Rooms</option>
                                        </select>
                                        @error('rooms')
                                            <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                        <span>
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.1818 12.4547V11.1819C11.1818 10.5068 10.9136 9.85939 10.4363 9.38202C9.95891 8.90466 9.31146 8.63647 8.63636 8.63647H3.54545C2.87036 8.63647 2.22291 8.90466 1.74555 9.38202C1.26818 9.85939 1 10.5068 1 11.1819V12.4547" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.09093 6.09091C7.49674 6.09091 8.63638 4.95127 8.63638 3.54545C8.63638 2.13964 7.49674 1 6.09093 1C4.68511 1 3.54547 2.13964 3.54547 3.54545C3.54547 4.95127 4.68511 6.09091 6.09093 6.09091Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15 12.4544V11.1817C14.9996 10.6177 14.8118 10.0698 14.4663 9.6241C14.1208 9.17836 13.637 8.85999 13.0909 8.71899" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.5455 1.08276C11.093 1.22296 11.5783 1.54139 11.9249 1.98787C12.2714 2.43435 12.4596 2.98347 12.4596 3.54867C12.4596 4.11387 12.2714 4.663 11.9249 5.10947C11.5783 5.55595 11.093 5.87439 10.5455 6.01458" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="tp-booking-form-input pb-20 mr-5">
                                    <p>Guest</p>
                                    <div class="p-relative">
                                        <select name="guests" id="child" class="form-control">
                                            @foreach ($rooms_gest->take(4) as $room)
                                                <option value="{{$room->id}}">{{$room->adult}} Adult, {{$room->childreen}}  Child</option>
                                            @endforeach
                                        </select>
                                        @error('guests')
                                            <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                        <span>
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.1818 12.4547V11.1819C11.1818 10.5068 10.9136 9.85939 10.4363 9.38202C9.95891 8.90466 9.31146 8.63647 8.63636 8.63647H3.54545C2.87036 8.63647 2.22291 8.90466 1.74555 9.38202C1.26818 9.85939 1 10.5068 1 11.1819V12.4547" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.09093 6.09091C7.49674 6.09091 8.63638 4.95127 8.63638 3.54545C8.63638 2.13964 7.49674 1 6.09093 1C4.68511 1 3.54547 2.13964 3.54547 3.54545C3.54547 4.95127 4.68511 6.09091 6.09093 6.09091Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15 12.4544V11.1817C14.9996 10.6177 14.8118 10.0698 14.4663 9.6241C14.1208 9.17836 13.637 8.85999 13.0909 8.71899" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.5455 1.08276C11.093 1.22296 11.5783 1.54139 11.9249 1.98787C12.2714 2.43435 12.4596 2.98347 12.4596 3.54867C12.4596 4.11387 12.2714 4.663 11.9249 5.10947C11.5783 5.55595 11.093 5.87439 10.5455 6.01458" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="tp-booking-btn-wrap pb-20 pt-25">
                                    <button class="tp-booking-form-btn" type="submit">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.72222 13.9444C11.1587 13.9444 13.9444 11.1587 13.9444 7.72222C13.9444 4.28578 11.1587 1.5 7.72222 1.5C4.28578 1.5 1.5 4.28578 1.5 7.72222C1.5 11.1587 4.28578 13.9444 7.72222 13.9444Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.5 15.5L12.1167 12.1166" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Find Hotels
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        </div>
    </div>
</div>
<!-- tp-booking-area-end -->

<!-- tp-room-masonary-start -->
<div class="tp-room-masonary pt-140 pb-95">
<div class="container">
    <div class="row tp-gx-25 grid">
        @foreach ($rooms_gest as $room)
            <div class="col-md-6 grid-item cat4 cat2 mb-25">
                <div class="tp-room-wrap tp-room-wrap-2">
                <div class="tp-room-thumb">
                    <img class="w-100" src="{{asset('uploads/rooms')}}/{{$room->image}}" alt="room">
                </div>
                <div class="tp-room-content box-bg">
                    <span class="tp-room-tag mb-15">{{$room->interior}}</span>
                    <h4 class="tp-room-title mb-20"><a href="{{route('room.details',[$room->slug,'check_in' => $checkIn, 'check_out' => $checkOut])}}">{{ Str::limit($room->title, 22, '...') }}</a></h4>
                    <div class="tp-room-meta mb-30">
                        <ul>

                            <li>
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5902 4.65087C17.0424 4.83482 18.2681 4.97808 19.4951 4.67298C19.687 4.62525 19.8974 4.63454 20.0798 4.6988C20.2622 4.76307 20.4019 4.87705 20.468 5.01567C20.5341 5.15429 20.5212 5.30619 20.4322 5.43796C20.3432 5.56972 20.1854 5.67056 19.9935 5.71829C18.3637 6.12422 16.773 5.92258 15.3967 5.74925L15.3269 5.7404C13.8746 5.55646 12.6489 5.41319 11.4219 5.71829C11.23 5.76603 11.0197 5.75674 10.8372 5.69247C10.6548 5.6282 10.5152 5.51422 10.4491 5.3756C10.383 5.23699 10.3959 5.08508 10.4848 4.95332C10.5738 4.82155 10.7316 4.72071 10.9236 4.67298C12.5534 4.26705 14.144 4.46869 15.5204 4.64202L15.5902 4.65087ZM3.82513 0C4.2488 0 4.59166 0.247622 4.59166 0.552727C4.59166 1.44063 4.98106 2.06941 5.43902 2.78132L5.46596 2.82554C5.91658 3.52684 6.42842 4.32365 6.42842 5.41673C6.42842 5.56332 6.34779 5.70391 6.20426 5.80756C6.06074 5.91122 5.86608 5.96945 5.6631 5.96945C5.46013 5.96945 5.26547 5.91122 5.12195 5.80756C4.97842 5.70391 4.89779 5.56332 4.89779 5.41673C4.89779 4.57216 4.51207 3.96637 4.04921 3.2465C3.5888 2.52751 3.06104 1.70417 3.06104 0.552727C3.06104 0.247622 3.40267 0 3.82513 0ZM6.88638 0.884364C7.31006 0.884364 7.65292 1.13199 7.65292 1.43709C7.65292 2.13309 8.01048 2.60003 8.46844 3.17221L8.49905 3.21024C8.94845 3.77181 9.48968 4.44658 9.48968 5.41673C9.48968 5.56332 9.40905 5.70391 9.26552 5.80756C9.122 5.91122 8.92734 5.96945 8.72436 5.96945C8.52139 5.96945 8.32673 5.91122 8.1832 5.80756C8.03968 5.70391 7.95905 5.56332 7.95905 5.41673C7.95905 4.75345 7.60639 4.3042 7.1423 3.72494L7.13496 3.7161C6.67577 3.14126 6.12229 2.44969 6.12229 1.43709C6.12229 1.13199 6.46393 0.884364 6.88638 0.884364Z" fill="#A05916" fill-opacity="0.5" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.92944 3.57668C9.90114 3.33992 9.92319 3.09987 9.99415 2.87223C10.0651 2.6446 10.1834 2.43453 10.3412 2.25579C10.499 2.07705 10.6928 1.93368 10.9099 1.83507C11.127 1.73646 11.3625 1.68484 11.6009 1.68359H19.3177C20.3206 1.68359 21.1128 2.57993 20.9867 3.5779L19.3569 16.1744C19.2947 16.6539 19.0601 17.0943 18.6968 17.4134C18.3335 17.7325 17.8665 17.9084 17.383 17.9083H13.445C12.9514 17.9083 12.4754 17.7248 12.1095 17.3935C11.7436 17.0622 11.5139 16.6068 11.465 16.1156L11.3352 14.8005C11.3212 14.6986 11.328 14.5949 11.355 14.4957C11.382 14.3964 11.4288 14.3037 11.4925 14.2229C11.5562 14.1421 11.6355 14.0751 11.7257 14.0256C11.8159 13.9762 11.9151 13.9455 12.0175 13.9353C12.1198 13.9251 12.2232 13.9356 12.3213 13.9662C12.4195 13.9968 12.5105 14.0469 12.5889 14.1135C12.6673 14.1801 12.7315 14.2618 12.7776 14.3538C12.8237 14.4457 12.8508 14.546 12.8572 14.6486L12.9883 15.9638C13.0127 16.1989 13.2087 16.3776 13.445 16.3776H17.383C17.6144 16.3776 17.8091 16.2062 17.8385 15.9772L19.4671 3.38443C19.4688 3.36348 19.4661 3.3424 19.4592 3.32256C19.4522 3.30273 19.4411 3.28459 19.4267 3.26933C19.4133 3.25277 19.3966 3.23928 19.3776 3.22978C19.3586 3.22027 19.3377 3.21496 19.3165 3.21422H11.6021C11.5807 3.21495 11.5597 3.22024 11.5404 3.22974C11.5212 3.23924 11.5043 3.25274 11.4907 3.26933C11.4759 3.28439 11.4645 3.30247 11.4573 3.32234C11.4501 3.3422 11.4473 3.36338 11.4491 3.38443V3.38565L11.934 7.25141C11.9486 7.35208 11.943 7.45466 11.9175 7.55314C11.892 7.65162 11.8471 7.74403 11.7855 7.82496C11.7239 7.9059 11.6467 7.97374 11.5586 8.02451C11.4704 8.07529 11.373 8.10798 11.2721 8.12068C11.1712 8.13338 11.0687 8.12582 10.9707 8.09846C10.8728 8.07111 10.7812 8.02449 10.7015 7.96134C10.6217 7.89819 10.5554 7.81977 10.5063 7.73067C10.4572 7.64158 10.4263 7.54359 10.4156 7.44243L9.93067 3.57668H9.92944Z" fill="#A05916" fill-opacity="0.5" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25698e-07 8.26548C4.25698e-07 7.33486 0.75307 6.58179 1.68369 6.58179H14.541C15.4704 6.58179 16.2247 7.33608 16.2247 8.26548V8.57161C16.2249 10.0352 15.8289 11.4716 15.0786 12.7282C14.3284 13.9849 13.2519 15.015 11.9634 15.7092C11.8701 15.7599 11.7882 15.8293 11.7231 15.9132C11.658 15.9971 11.611 16.0936 11.585 16.1966L11.4185 16.8639C11.2642 17.4762 10.7144 17.9084 10.0826 17.9084H6.13966C5.50782 17.9084 4.95801 17.4774 4.80495 16.8652L4.63719 16.1966C4.61147 16.0935 4.56454 15.9969 4.49939 15.913C4.43424 15.8291 4.35231 15.7597 4.25882 15.7092C2.9708 15.0147 1.8948 13.9845 1.14499 12.7278C0.395183 11.4711 -0.000473745 10.035 4.25698e-07 8.57161V8.26548ZM1.68369 8.11242C1.6431 8.11242 1.60417 8.12854 1.57546 8.15725C1.54676 8.18595 1.53063 8.22488 1.53063 8.26548V8.57161C1.53009 9.7592 1.85118 10.9248 2.45981 11.9445C3.06844 12.9643 3.94189 13.8002 4.9874 14.3635C5.26794 14.5151 5.51377 14.7235 5.70922 14.9755C5.90467 15.2274 6.04543 15.5174 6.12252 15.8268L6.25966 16.3778H9.96256L10.0997 15.8268C10.2564 15.1998 10.6691 14.6696 11.2348 14.3635C12.2807 13.8005 13.1546 12.9647 13.7636 11.9449C14.3727 10.9251 14.6942 9.75942 14.694 8.57161V8.26548C14.694 8.22488 14.6779 8.18595 14.6492 8.15725C14.6205 8.12854 14.5816 8.11242 14.541 8.11242H1.68369Z" fill="#A05916" />
                            </svg>
                            <span>Breakfast</span>
                            </li>
                            <li>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.7 17.25H6.3C4.12397 17.25 2.79586 16.8102 1.99283 16.0072C1.1898 15.2041 0.75 13.876 0.75 11.7V6.3C0.75 4.12397 1.1898 2.79586 1.99283 1.99283C2.79586 1.1898 4.12397 0.75 6.3 0.75H11.7C13.876 0.75 15.2041 1.1898 16.0072 1.99283C16.8102 2.79586 17.25 4.12397 17.25 6.3V11.7C17.25 13.876 16.8102 15.2041 16.0072 16.0072C15.2041 16.8102 13.876 17.25 11.7 17.25Z" stroke="#A05916" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.2 12.25H7.8C6.87397 12.25 6.42086 12.0602 6.18033 11.8197C5.9398 11.5791 5.75 11.126 5.75 10.2V7.8C5.75 6.87397 5.9398 6.42086 6.18033 6.18033C6.42086 5.9398 6.87397 5.75 7.8 5.75H10.2C11.126 5.75 11.5791 5.9398 11.8197 6.18033C12.0602 6.42086 12.25 6.87397 12.25 7.8V10.2C12.25 11.126 12.0602 11.5791 11.8197 11.8197C11.5791 12.0602 11.126 12.25 10.2 12.25Z" stroke="#A05916" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Size: {{$room->subtitle}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="tp-room-btn-3">
                        <a class="tp-btn-square" href="{{route('room.details',[$room->slug,'check_in' => $checkIn, 'check_out' => $checkOut])}}">Book Now</a>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
<!-- tp-room-masonary-end -->

@endsection

<script>
    $(document).ready(function () {
        $('#search_input').submit(function (e) {
            e.preventDefault();

            var check_in = $('.check_in').val();
            var check_out = $('.check_out').val();
            var rooms = $('.rooms').val();
            var guests = $('.guests').val();

            var link = "{{ route('search.rooms') }}" + "?check_in=" + check_in + "&check_out=" + check_out + "&rooms=" + rooms + "&guests=" + guests;
            window.location.href = link;
        });
    });
    </script>

