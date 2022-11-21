@extends('layouts.app', [
	'name' => 'Control System Conversion | Hoist Industries | New York',
	'description' => 'Complete Plug and Play control system conversions for Construction Hoist in New York, Connecticut, and New Jersey.'
])

@push('header')
@endpush

@section('content')

@component('bands.lead', [
	'title' => 'Control System Conversion', 
	'subtitle' => 'Complete plug & play control system for the Construction Hoists. It includes a touchscreen for the system’s self-diagnostic and notification. Call-in system for each floor as well as automatic floor leveling system.', 
	'background' => 'control'])

	<a scrollto="#contact" class="btn btn-outline-white btn-lg">@fa(['icon' => 'angle-double-down', 'mr' => 3])Learn More</a>
@endcomponent

@component('components.band', ['title' => 'Conversion Services'])
	
<div class="row align-items-center mb-5">
	<div class="col-lg-8 col-md-6 col-12 mb-4">
		<p>Personnel and material hoist ages quickly, given the nature of the construction environment and technological advancements in VFD – Variable Frequency Drives and PLC – Programmable Logical Controllers. A lot of older elevators could easily serve another 10 years if you upgrade the controls to a new Intuitive and less troublesome design where we eliminated relay logic and unnecessary circuitry and replaced it with solid-state controls moreover adding such standard features such as:</p>
		<ul>
			<li>Automatic floor leveling system.</li>
			<li>Intuitive notification touchscreen display for system malfunctions.</li>
			<li>Floor call-in system.</li>
		</ul>
	</div>
	<div class="col-lg-4 col-md-6 col-12 text-center mb-4">
		<img src="{{asset('images/gears.png')}}" style="width: 200px; max-width: 90%;">
	</div>
</div>

<div class="row align-items-center">
	<div class="col-lg-6 col-md-6 col-12 mb-4">
		<div class="bg-align-center w-100" style="background-image: url({{asset('images/control.jpeg')}}); height: 500px;"></div>
	</div>
	<div class="col-lg-6 col-md-6 col-12 mb-4">
		<h4>LOOKING TO UPGRADE AN OLDER CONTROL SYSTEM?</h4>
		<h6>Download the Hoist Ind ControlSystem Conversion Brochure</h6>

		<div id="contact-form"></div>
	</div>
</div>
@endcomponent

@include('bands.cta', [
	'title' => 'Ready to get started?', 
	'subtitle' => 'Our team is ready to take on the challenge. Let’s coordinate a time to discuss the next steps.',
	'background' => 'engine'])

@component('components.band', ['title' => 'How we solve it'])

<div class="row align-items-center mb-5">
	<div class="col-lg-7 col-md-7 col-12">
		<p>Our new control system includes an intuitive LCD touchscreen display which provides real-time monitoring information as well as the total system status of the hoist. This allows the technician to go directly to the problem skipping the troubleshooting stage.</p>
		<p>We solve all issues related to obsolete or aged components. Such as the complete <strong>Control system, Electric motors, Gearboxes, VFDs, and Pinions</strong>.</p>
		<p>The components we use in our new design are from world-renowned manufacturers such as <strong>Schneider, Mitsubishi, Eaton, Vacon, and Siemens</strong>.</p>
	</div>
</div>

<div class="row align-items-center">
	@foreach(['Input Voltage', 'Contactors', 'Limit Switches', 'Brake Rectifier', 'Frequency Inverter', 'PLC Controller', 'Short Detection', 'Breakers', 'Resistors', 'Emergency Stops', 'Brake Coils', 'Motors', 'Cooling Fans'] as $label)
	<div class="col-lg-3 col-md-6 col-12 mb-4">
		<h6 class="border border-1x py-5 text-center m-0 font-weight-bold" style="border-color: black!important">{{$label}}</h6>
	</div>
	@endforeach
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