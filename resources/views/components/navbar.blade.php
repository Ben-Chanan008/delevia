@php use App\Http\Controllers\UserController;use Illuminate\Support\Facades\Auth; @endphp
<nav class="bg-white container-fluid">
    <div class="d-flex justify-content-around p-3 align-items-center">
        <a href="/" class="nav-brand text-black text-decoration-none">
            <h3>DELEVIA</h3>
        </a>
        <ul class="list-unstyled d-flex">
            <a href="{{route('home')}}" class="px-3 text-decoration-none text-black">
                <li class="list-unstyled">Home</li>
            </a>
            <a href="{{route('about')}}" class="px-3 text-decoration-none text-black">
                <li class="list-unstyled">About</li>
            </a>
            <a href="{{route('services')}}" class="px-3 text-decoration-none text-black">
                <li class="list-unstyled">Services</li>
            </a>
            <a href="{{route('contact')}}" class="px-3 text-decoration-none text-black">
                <li class="list-unstyled">Contact</li>
            </a>
        </ul>
        @if(Auth::check())
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-flex ">
                        <div class="user-icon shadow me-3">
                            <i class="far fa-user fw-bold px-2"></i>
                        </div>
                        <div>
                            <p class="mb-0 text-start">Hello,</p>
                            <p class="fw-bold">{{Auth::user()->name}}</p>
                        </div>
                    </div>
                </button>
                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
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
</nav>
