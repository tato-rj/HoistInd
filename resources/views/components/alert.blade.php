<div class="alert-container rounded-0 animate__animated animate__fadeInUp {{! empty($temporary) ? 'alert-temporary' : null}} d-flex justify-content-center w-100 alert-{{! empty($floating) ? $floating : null}}">
	<div class="alert rounded-0 border-0 {{! empty($fullX) ? 'w-100' : null}} {{! empty($floating) ? 'm-0' : null}} alert-{{$color}} {{! empty($dismissible) ? 'alert-dismissible' : null}} fade show" style="font-size: 16px" role="alert">
		
		{!! $message !!}

		@isset($dismissible)
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		@endisset
	</div>  
</div>