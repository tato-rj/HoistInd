@extends('layouts.app', [
	'name' => 'Construction Hoist Rental | Hoist Industries| New York',
	'description' => 'Construction and Material Hoist Rental in the Tri-state region of New York, New Jersey and Connecticut.'
])

@push('header')
@endpush

@section('content')

@component('bands.lead', [
	'title' => 'Contact us', 
	'subtitle' => 'We are based in New York and can service or assist and consult with any types of Construction Elevators – Personnel and Material Hoists.', 
	'background' => 'contact'])

@endcomponent

<section class="container-fluid">
	<div class="row align-items-center">
		<div class="col-lg-6 col-md-6 col-12 py-6 contact-col">
			<h2>How can we help?</h2>
			<div class="mb-5">
				<h5>Office: <a style="font-weight: 500;" href="tel:{{config('brand.phone')}}">{{config('brand.phone')}}</a></h5>
			</div>

			<div class="mb-5">
				<h5>Hoist Industries</h5>
				<h5><a style="font-weight: 500;" target="_blank" href="{{config('brand.office.map')}}">{{config('brand.office.address.street')}}<br>{{config('brand.office.address.city')}}</a></h5>
			</div>

			<div class="mb-5">
				<h5>Schedule Free Consultation</h5>
				<h5 style="font-weight: 500">You can <a href="{{config('brand.calendly')}}" target="_blank" class="text-secondary">schedule a free consultation</a> to speak with one of our business managers to see if Hoist Ind is the right fit for your business.</h5>
			</div>
			<a href="{{config('brand.calendly')}}" target="_blank" class="btn btn-md btn-outline-primary btn-block">@fa(['icon' =>'plus'])SCHEDULE CONSULTATION</a>
		</div>
		<div class="col-lg-6 col-md-6 col-12 contact-col bg-primary text-white py-6">
			@include('components.forms.contact')
		</div>
	</div>
</section>

@include('bands.cta', [
	'title' => 'Ready to get started?', 
	'subtitle' => 'Our team is ready to take on the challenge. Let’s coordinate a time to discuss the next steps.',
	'background' => 'facade2'])

@endsection

@push('scripts')
@endpush