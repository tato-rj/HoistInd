
<section class="container">
    <div class="swiper mySwiper py-5">
      <div class="swiper-wrapper">
		@foreach(['alimak', 'anka', 'betamax', 'fraco', 'geda', 'pega', 'raxtar', 'stros', 'usahoist'] as $company)
		<div class="swiper-slide">
			<img src="{{asset('images/companies/'.$company.'.jpeg')}}" class="w-100">
		</div>
		@endforeach
      </div>
  </div>
</section>
