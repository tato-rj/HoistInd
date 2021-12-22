<form class="form-light" id="brochure-form" axios="{{route('brochure')}}" >
  <div class="form-group">
    <label for="name">Full Name<span>*</span></label>
    <input type="text" required name="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email<span>*</span></label>
    <input type="email" required name="email" class="form-control" id="email">
  </div>
  <button type="submit" class="btn btn-md btn-primary btn-block mt-2">Request Brochure</button>
</form>