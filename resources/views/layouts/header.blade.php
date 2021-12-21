<section class="position-absolute w-100" style="top: 0; left: 0">
    
    @include('layouts.components.topbar')

    <div class="menu-parked z-10 w-100" id="menu">
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-expand-lg w-100" style="top: 0; left: 0; z-index: 10">

          @include('layouts.components.logo')

          @include('layouts.components.hamburger')

          @include('layouts.components.menu-desktop')

          @include('layouts.components.menu-mobile')

        </nav>
      </div>
    </div>
  </div>
</section>