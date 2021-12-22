<section class="bg-align-center position-relative {{isset($background) ? 'bg-align-center' : 'bg-primary'}}" id="consultation"
@isset($background)
 style="background-image: url({{asset('images/'.$background.'.jpeg')}})"
@endisset
>
@isset($background)
<div class="w-100 h-100 position-absolute" style="z-index: 0; background: black; opacity: .56;"></div>
@endisset
	<div class="container py-7 text-white">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h2>Request a consultation</h2>
				<p>We work parallel with you to ensure that our solutions solve problems. One of our project managers will evaluate your firms position and provide a viable solution that fits your business.</p>
			</div>
			<div class="col-lg-6">
				@include('components.forms.consultation')
			</div>
		</div>
	</div>
</section>