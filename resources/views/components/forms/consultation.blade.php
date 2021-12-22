<form method="POST" class="form-dark" action="{{route('contact')}}">
	@csrf
	<div class="form-group">
		<label for="name">Full Name<span>*</span></label>
		<input type="text" required name="name" class="form-control" id="name">
	</div>
	<div class="form-group">
		<label for="email">Email<span>*</span></label>
		<input type="email" required name="email" class="form-control" id="email">
	</div>
	<div class="form-group">
		<label for="number">Phone number<span>*</span></label>
		<input type="text" required name="number" class="form-control" id="number" placeholder="(201) 555-0123">
	</div>
	<button type="submit" class="btn btn-md btn-outline-white mt-4">Send request</button>
</form>