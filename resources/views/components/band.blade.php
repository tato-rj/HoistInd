<section id="{{str_slug($title)}}" class="bg-align-center position-relative bg-{{$background_color ?? null}}"
 @isset($background_image)
 style="background-image: url({{asset('images/'.$background_image.'.jpeg')}})"
 @endisset>
	@isset($background_image)
	<div class="w-100 h-100 position-absolute" style="z-index: 0; background: white; opacity: .92;"></div>
	@endisset
	<div class="container py-6">
		<div class="row mb-4">
			<div class="col-lg-6">
				<h2>{{$title}}</h2>
				@isset($subtitle)
				<p>{{$subtitle}}</p>
				@endisset
			</div>
		</div>
		{{$slot}}
	</div>
</section>