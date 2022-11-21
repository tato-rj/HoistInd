@extends('layouts.app', [
	'name' => 'Hoist Rental for Construction Contractors | Hoist Industries',
	'description' => 'Hoist Industries Provides Complete or Partial Hoist Rental Solutions for your Construction Project.'
])

@push('header')
@endpush

@section('content')

@component('bands.lead', [
	'title' => 'General Contractors', 
	'subtitle' => 'Construction Hoist, scaffold, shoring, bridge rentals & Internal Elevators installation and modernization.', 
	'background' => 'facade3'])

	<a scrollto="#preventing-delays" class="btn btn-outline-white btn-lg">@fa(['icon' => 'angle-double-down', 'mr' => 3])Learn More</a>
@endcomponent

@component('components.band', ['title' => 'Preventing Delays'])
	
<div class="row align-items-center mb-5">
	<div class="col-lg-8 col-md-6 col-12 mb-4">
		<p>Hoist industries will provide a complete or partial solution for your construction site. Whether it is a rental in only one segment or a complete broadband of our full portfolio, we have got you covered.</p>
		<p>Our partners in the industry are ranging from the best in the small to the best in the high rise buildings. Hoist Industries will match the best option and the price for your specific project. There is no need to bring the tank to do the job when a machine gun will achieve you the same results effectively for less money.</p>
		<p>Leave all those logistic details to us, you have a bigger fish to fry!</p>
	</div>
	<div class="col-lg-4 col-md-6 col-12 text-center mb-4">
		<img src="{{asset('images/worker-pc.png')}}" style="width: 200px; max-width: 90%;">
	</div>
</div>

<div class="row align-items-center">
	<div class="col-lg-6 col-md-6 col-12 mb-4">
		<div class="bg-align-center w-100" style="background-image: url({{asset('images/facade3.jpeg')}}); height: 500px;"></div>
	</div>
	<div class="col-lg-6 col-md-6 col-12 mb-4">
		<h4>LOOKING FOR CONSTRUCTION HOISTS AND INTERNAL ELEVATOR SALES AND RENALS?</h4>
		<h6>Download the Hoist Ind Sales & Rentals Brochure</h6>

		<div id="contact-form"></div>
	</div>
</div>
@endcomponent

@include('bands.cta', [
	'title' => 'Always On Time', 
	'subtitle' => 'Let’s discuss your business goals and how we can achieve success together.',
	'background' => 'machine-inside2'])

@component('components.band', ['title' => 'What we do'])

<div class="row align-items-center mb-5">
	<div class="col-lg-7 col-md-7 col-12">
		<ul>
			<li>Construction personnel and material Hoists – 2000lb to 14200lb</li>
			<li>Internal Elevators Installation & Modernization</li>
			<li>Scaffold</li>
			<li>Shoring</li>
			<li>Bridge</li>
			<li>Debris netting</li>
			<li>Consulting</li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="col-12 d-flex flex-center"> 
	@include('components.card', [
		'title' => 'Consulting & Reporting', 
		'text' => 'Evaluation of Elevator, Personnel, and material hoist. Report on condition and consultation.',
		'btn' => ['label' => 'Learn more', 'url' => route('contact')]])
	</div>
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
	 	$('#contact-form').html(response.data);
	 	$('#contact-form form').fadeIn('fast');
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