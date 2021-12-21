@extends('layouts.app', ['name' => 'About us'])

@push('header')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endpush

@section('content')

@component('bands.lead', [
	'title' => 'Hoist Industries', 
	'subtitle' => 'Our company provide OEM as well as replacement components for Construction Hoist. We realize in some cases it’s difficult to find a replacement component, especially when the manufacturer is not supporting the machine any longer.', 
	'background' => 'riverbuildings'])

	<a scrollto="#about-us" class="btn btn-outline-white btn-lg">@fa(['icon' => 'angle-double-down', 'mr' => 3])Learn More</a>
@endcomponent

@component('components.band', ['title' => 'About us'])
	
@slot('subtitle')
<p>Hoist Industries and it’s staff has years of experience in the construction elevators industry. We worked with most major hoist manufacturers as well as aftermarket parts manufacturers in the industry and have already established relationships with them.</p>
<p>We are based in New York and can service or assist and consult with any types of Construction Elevators – Personnel and Material Hoists.</p>
@endslot

@endcomponent

@include('bands.companies')

@include('bands.cta', [
	'title' => 'Ready to get started?', 
	'subtitle' => 'Our team is ready to take on the challenge. Let’s coordinate a time to discuss the next steps.',
	'background' => 'facade2'])

@endsection

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 15,
        grabCursor: true,
        loop: true,
		autoplay: {
			delay: 3000,
		},
	  breakpoints: {
		    480: {
		      slidesPerView: 2,
		      spaceBetween: 30
		    },
		    640: {
		      slidesPerView: 5,
		      spaceBetween: 40
		    }
		}
      });
</script>
@endpush