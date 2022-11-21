@extends('layouts.app', [
	'name' => 'Hoist & Compenents Purchasing | Hoist Industries | Tri-State Area',
	'description' => 'Hoist Industries provides OEM hoist & components purchasing as well as replacement parts for construction hoists in New York.'
])

@push('header')
@endpush

@section('content')

@component('bands.lead', [
	'title' => 'Hoist & Compenents Purchasing', 
	'subtitle' => 'Hoist Industries provide OEM as well as replacement components for Construction Hoist. We realize in some cases it’s difficult to find a replacement component, especially when the manufacturer is not supporting the machine any longer.', 
	'background' => 'riverbuildings'])

	<a scrollto="#professional-services" class="btn btn-outline-white btn-lg">@fa(['icon' => 'angle-double-down', 'mr' => 3])Learn More</a>
@endcomponent

@component('components.band', ['title' => 'Professional Services'])
	
<div class="row">
	<div class="col-lg-8 col-md-6 col-12 mb-2">
		<p>Custom design of new elevators, parts, redesign of obsolete components.</p>
	</div>
	<div class="col-lg-4 col-md-6 col-12 text-center mb-2">
		<img src="{{asset('images/worker.png')}}" style="width: 200px; max-width: 90%;">
	</div>
</div>

<div class="row align-items-center">
	<div class="col-lg-6 col-md-6 col-12 mb-4">
		<div class="bg-align-center w-100" style="background-image: url({{asset('images/facade.jpeg')}}); height: 500px;"></div>
	</div>
	<div class="col-lg-6 col-md-6 col-12 mb-4">
		<h4>LOOKING FOR CONSTRUCTION HOISTS AND INTERNAL ELEVATOR SALES AND RENALS?</h4>
		<h6>Download the Hoist Ind Sales & Rentals Brochure</h6>

		<div id="contact-form"></div>
	</div>
</div>
@endcomponent

@include('bands.cta', [
	'title' => 'Schedule a Consultation', 
	'subtitle' => 'Our team is ready to take on the challenge. Let’s coordinate a time to discuss your business needs.',
	'background' => 'machine-inside'])

@component('components.band', ['title' => 'How we solve it'])

<div class="row align-items-center">
	<div class="col-lg-7 col-md-7 col-12">
		<p>We redesign and retrofit modules and systems if OEM and replacement components are either failing due to a bad design or are no longer available.</p>
		<p>Hoist Industries has built outstanding relationships with big and small shops in the US for custom manufacturing of <strong>Gears, Pinions, Discs, Racks, and Shafts</strong>.</p>
		<p>We also buy used elevators and have a range of new and used construction hoists in stock for sale.</p>
	</div>
</div>
@endcomponent

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
	}, 500);
});
</script>
@endpush