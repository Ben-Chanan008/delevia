@php use App\Http\Controllers\UserController; @endphp
<nav class="navbar fixed-top">
  <div class="container-fluid">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold site-text-primary" id="offcanvasNavbarLabel">DELEVIA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        @unless(!Auth::check())
            <div class="d-flex mb-5">
                <div class="user-icon shadow me-3">
                    <i class="far fa-user fw-bold px-2"></i>
                </div>
                <div>
                    <p class="mb-0 text-start">Hello,</p>
                    <p class="fw-bold">{{Auth::user()->name}}</p>
                </div>
            </div>
        @endunless
         <ul class="list-unstyled d-flex flex-column">
            <a href="{{route('home')}}" class="px-3 text-decoration-none text-black mb-3">
                <li class="list-unstyled"><i class="far fa-home me-2"></i> Home</li>
            </a>
            <a href="{{route('about')}}" class="px-3 text-decoration-none text-black mb-3">
                <li class="list-unstyled"><i class="far fa-address-card me-2"></i> About</li>
            </a>
            <a href="{{route('services')}}" class="px-3 text-decoration-none text-black mb-3">
                <li class="list-unstyled"><i class="far fa-bell-concierge me-2"></i> Services</li>
            </a>
            <a href="{{route('contact')}}" class="px-3 text-decoration-none text-black mb-3">
                <li class="list-unstyled"><i class="far fa-folder-user me-2"></i> Contact</li>
            </a>
        </ul>
        @if(Auth::check())
            <div class="dropdown">
                    <div class="d-flex ms-3 p-2 align-items-center">
                        <i class="far fa-power-off me-3"></i>
                        <a href="{{route('logout')}}" class="text-black text-decoration-none">Logout</a>
                    </div>
                    <div class="d-flex ms-3 p-2 align-items-center">
                        <i class="far fa-user me-3"></i>
                        <a href="{{route('logout')}}" class="text-black text-decoration-none">Profile</a>
                    </div>
                    @if(UserController::checkUserRole())
                        <div class="d-flex ms-3 p-2 align-items-center">
                            <i class="far fa-gear me-3"></i>
                            <a href="{{route('jobs.giver')}}" class="text-black text-decoration-none">Manage Listings</a>
                        </div>
                        <div class="d-flex ms-3 p-2 align-items-center">
                            <i class="far fa-building me-3"></i>
                            <a href="{{route('jobs.show-create-company', [Auth::id()])}}" class="text-black text-decoration-none">Create Company</a>
                        </div>
                         <div class="d-flex ms-3 p-2 align-items-center">
                            <i class="far fa-business-time me-3"></i>
                            <a href="{{route('jobs.create', [Auth::id()])}}" class="text-black text-decoration-none">Post Job</a>
                        </div>
                        <div class="d-flex ms-3 p-2 align-items-center">
                            <i class="far fa-buildings me-3"></i>
                            <a href="{{route('jobs.view-companies', [Auth::id()])}}" class="text-black text-decoration-none">View companies</a>
                        </div>
                    @else
                        <div class="d-flex ms-3 p-2 align-items-center">
                            <i class="far fa-business-time me-3"></i>
                            <a href="{{route('jobs.seeker')}}" class="text-black text-decoration-none">View Jobs</a>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        @unless(Auth::check())
            <a href="{{route('login')}}" class="btn site-primary text-white px-5 py-2 btn-scale">Sign In</a>
        @endunless
      </div>
    </div>
  </div>
</nav>