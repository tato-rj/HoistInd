@extends('layouts.app', [
	'name' => 'Hoisting Companies | Hoist Industries | New York',
	'description' => 'Hoist Industries provides Hoist Companies Control system solutions for modernization for older construction hoists. We have qualified personnel to repair construction hoists on site. Call Today.'
])

@push('header')
@endpush

@section('content')

@component('bands.lead', [
	'title' => 'Hoisting Companies', 
	'subtitle' => 'We receive many inquiries of various project sizes for construction hoists, shoring, scaffold, & bridge rentals. Contact us to discuss cooperation strategy.', 
	'background' => 'riverbuildings2'])

	<a scrollto="#aec-industry-pros" class="btn btn-outline-white btn-lg">@fa(['icon' => 'angle-double-down', 'mr' => 3])Learn More</a>
@endcomponent

@component('components.band', ['title' => 'AEC Industry Pros'])
	
<div class="row">
	<div class="col-lg-8 col-md-6 col-12 mb-2">
		<p>Hoist Industries also provides services such as Control system modernization for older construction hoists, we have qualified personnel to repair construction hoists on site.</p>
	</div>
	<div class="col-lg-4 col-md-6 col-12 text-center mb-2">
		<img src="{{asset('images/pm.png')}}" style="width: 200px; max-width: 90%;">
	</div>
</div>

<div class="row align-items-center">
	<div class="col-lg-6 col-md-6 col-12 mb-4">
		<div class="bg-align-center w-100" style="background-image: url({{asset('images/facade3.jpeg')}}); height: 500px;"></div>
	</div>
	<div class="col-lg-6 col-md-6 col-12 mb-4">
		<h4>LOOKING FOR CONSTRUCTION HOISTS AND INTERNAL ELEVATOR SALES AND RENALS?</h4>
		<h6>Download the Hoist Ind Sales & Rentals Brochure</h6>

		<div class="contact-form"></div>
	</div>
</div>
@endcomponent

@include('bands.cta', [
	'title' => 'Build Together', 
	'subtitle' => 'Let’s discuss your business goals and how we can achieve success together.',
	'background' => 'engine'])

<section class="container pt-6">
	<div class="row align-items-center">
		<div class="col-lg-6 col-md-6 col-12 mb-4">
			<div class="bg-align-center w-100" style="background-image: url({{asset('images/control.jpeg')}}); height: 500px;"></div>
		</div>
		<div class="col-lg-6 col-md-6 col-12 mb-4">
			<h4>LOOKING TO UPGRADE AN OLDER CONTROL SYSTEM?</h4>
			<h6>Download the Hoist Ind ControlSystem Conversion Brochure</h6>

			<div class="contact-form"></div>
		</div>
	</div>
</section>

@component('components.band', ['title' => 'What we do', 'subtitle' => 'We provide services in the area of: '])

<div class="row align-items-center mb-5">
	<div class="col-lg-7 col-md-7 col-12">
		<ul>
			<li>Control Systems conversions</li>
			<li>Parts purchasing</li>
			<li>Safety devise refurbishing & purchase for all manufacturers</li>
			<li>Mechanical</li>
			<li>Construction Elevators purchasing, New & Used</li>
			<li>Engineering</li>
			<li>Drawings</li>
			<li>Permitting</li>
			<li>DOB inspections</li>
			<li>Jump tests</li>
			<li>Drop tests</li>
			<li>Installation</li>
			<li>Management</li>
			<li>Consulting</li>
		</ul>
	</div>
</div>

<div class="row">
		@include('components.card', [
			'title' => 'Control System Conversion', 
			'sizes' => 'col-lg-4 col-md-6 col-12',
			'text' => 'Complete plug in control system conversion for your aged construction hoist.',
			'btn' => ['label' => 'Learn more', 'url' => route('control')]])

		@include('components.card', [
			'title' => 'Service & Repair', 
			'sizes' => 'col-lg-4 col-md-6 col-12',
			'text' => 'DOB Inspections, Drop tests, Compliance, ANSI 10.4 2016.',
			'btn' => ['label' => 'Learn more', 'url' => route('contact')]])

		@include('components.card', [
			'title' => 'Parts Purchasing', 
			'sizes' => 'col-lg-4 col-md-6 col-12',
			'text' => 'Purchase of OEM and replacement component for Construction Hoist.',
			'btn' => ['label' => 'Learn more', 'url' => route('contact')]])

</div>

@endcomponent

@include('bands.request', ['background' => 'control'])

@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
	setTimeout(function() {
axios.get('/contact-form', {params: {form: 'brochure'}})
	 .then(function(response) {
	 	$('.contact-form').html(response.data);
	 	$('.contact-form form').fadeIn('fast');
	 });

axios.get('/contact-form', {params: {form: 'consultation'}})
	 .then(function(response) {
	 	$('#consultation-form').html(response.data);
	 	$('#consultation-form form').fadeIn('fast');
	 });
	}, 500);
});
</script>
@endpush