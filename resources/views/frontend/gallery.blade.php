@extends('frontend.layout.app')
@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/01.jpg">
<div class="container p-relative">
    <div class="row">
        <div class="col-lg-12">
            <div class="tp-breadcrumb-title-wrap text-center">
            <h5 class="tp-breadcrumb-title-pre">Unique Historical Charm</h5>
            <h2 class="tp-breadcrumb-title">Luxury Hotel Gallery</h2>
            </div>
        </div>
    </div>
</div>
</div>
<!-- tp-breadcrumb-area-end -->

<!-- tp-gallery-mesonary-area-start -->
<div class="tp-gallery-area-start pt-120 pb-95">
<div class="container">
    <div class="row grid gx-25">
        @foreach ($gallerys as $gallery)
        <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-25">
            <div class="tp-gallery-thumb">
            <img class="w-100" src="{{ asset('uploads/gallery') }}/{{ $gallery->image }}" alt="">
            </div>
        </div>
        @endforeach
    </div>
    <div class="my">
        {!! $gallerys->links() !!}
    </div>
</div>
</div>
<!-- tp-gallery-mesonary-area-end -->
@endsection

