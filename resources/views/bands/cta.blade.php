<section class="bg-align-center position-relative" style="background-image: url({{asset('images/'.$background.'.jpeg')}})">
	<div class="w-100 h-100 position-absolute" style="z-index: 0; background: black; opacity: .56;"></div>
	<div class="container py-7 text-white">
		<div class="row align-items-center mb-4">
			<div class="col-lg-6">
				<h2>{{$title}}</h2>
				<p class="mb-4">{{$subtitle}}</p>
				<a href="{{config('brand.calendly')}}" target="_blank" class="btn btn-md btn-white">@fa(['icon' =>'plus'])SCHEDULE MEETING</a>
			</div>
		</div>
	</div>
</section>