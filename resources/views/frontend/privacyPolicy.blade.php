@extends('frontend.layout.app')
@section('content')
<!-- tp-breadcrumb-area-start -->
<div class="tp-breadcrumb-area tp-breadcrumb-spacing bg-position" data-background="{{ asset('frontend') }}/img/breadcrumb/15.jpg">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb-title-wrap text-center">
                <h5 class="tp-breadcrumb-title-pre">Privacy Policy</h5>
                <h2 class="tp-breadcrumb-title">Privacy Policy</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tp-breadcrumb-area-end -->

<!-- Team Section -->
<div class="container">
	<div class="row">
		<div class="team-block col-lg-12 col-md-12 col-sm-12 wow fadeInUp">
			<div class="inner-box">
				@if ($privacyPolicy->first()->id != null)
				<p>{!! $privacyPolicy->first()->description !!}</p>
				@endif
			</div>
		</div>
	</div>
</div>
<!-- End Team Section -->
@endsection
