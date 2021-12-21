<section id="lead" class="bg-align-center position-relative" style="background-image: url({{asset('images/'.$background.'.jpeg')}})">
	<div class="w-100 h-100 position-absolute" style="z-index: 0; background: black; opacity: .56;"></div>
	<div class="container text-white" style="padding-top: 320px; padding-bottom: 200px;">
		<div class="row">
			<div class="col-lg-7 col-md-10 col-12">
				<h1 style="">{{$title}}</h1>
				
				@isset($subtitle)
				<h6>{{$subtitle}}</h6>
				@endisset

				{{$slot}}
			</div>
		</div>
	</div>
</section>