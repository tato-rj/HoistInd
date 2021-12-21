@extends('layouts.app')

@push('header')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endpush

@section('content')
@component('bands.lead', ['title' => 'Hoist Engineering, Rentals & Sales', 'background' => 'facade'])
	<div class="form-row">
		<div class="col">
			<a scrollto="#services" class="btn btn-white btn-block btn-lg">Services</a>
		</div>
		<div class="col">
			<a scrollto="#industry-solutions" class="btn btn-white btn-block btn-lg">Solutions</a>
		</div>
	</div>
	<div class="form-row">
		<div class="col">
			<a scrollto="#consultation" class="btn btn-outline-white btn-block btn-lg">Free Consultation</a>
		</div>
	</div>
@endcomponent

@component('components.band', ['title' => 'Services', 'subtitle' => 'Hoist Industries are a consulting, service, and repair company for your Construction Hoist needs.', 'background_image' => 'floorplan'])
	
	<div class="row">
		@include('components.card', [
			'title' => 'Control System Conversion', 
			'text' => 'Complete plug & play control system for the Construction Hoists. It includes a touchscreen for the system’s self-diagnostic and notification. Call-in system for each floor as well as automatic floor leveling system.', 
			'btn' => ['label' => 'Learn more', 'url' => route('control')]])

		@include('components.card', [
			'title' => 'Construction Hoist Rental', 
			'text' => 'Hoist Industries provides solutions for GCs. construction hoists, scaffold, bridge, shoring & new installation, or modernization of internal elevators.',
			'btn' => ['label' => 'Contact us', 'url' => route('contact')]])

		@include('components.card', [
			'title' => 'Construction Hoist & Components Sales', 
			'text' => 'New & used construction elevators. OEM & aftermarket replacement components for hoists.',
			'btn' => ['label' => 'Learn more', 'url' => route('purchasing')]])

		@include('components.card', [
			'title' => 'Internal Elevator Installation & Modernization', 
			'text' => 'New elevators installation and modernization. Contact us for pricing!',
			'btn' => ['label' => 'Contact us', 'url' => route('contact')]])
	</div>
@endcomponent

@include('bands.request')

@component('components.band', ['title' => 'Industry Solutions', 'subtitle' => 'Hoist Industries are a consulting and managing company that provides a cost-effective solution for GC’s and Developers to operate their own construction Hoists / Elevators.', 'background_image' => 'floorplan'])
	
	<div class="row">
		@include('components.card', [
			'title' => 'General Contractors', 
			'text' => 'Construction Hoist, scaffold, shoring, bridge rentals & Internal Elevators installation and modernization.',
			'btn' => ['label' => 'Learn more', 'url' => route('gc')]])

		@include('components.card', [
			'title' => 'Hoisting Companies', 
			'text' => 'Hoist industries are open for collaboration in terms of project sales. We partner with rental companies that provide scaffold, shed & shoring.',
			'btn' => ['label' => 'Learn more', 'url' => route('hc')]])
	</div>
@endcomponent

@include('bands.cta', [
	'title' => 'Schedule a Consultation', 
	'subtitle' => 'Our team is ready to take on the challenge. Let’s coordinate a time to discuss your business needs.', 
	'background' => 'topsite'])

@include('bands.companies')

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