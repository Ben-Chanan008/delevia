@php use Illuminate\Support\Facades\Auth; @endphp
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
            <div class="d-flex justify-content-center ">
                <div class="user-icon shadow me-3">
                    <i class="far fa-user fw-bold px-2"></i>
                </div>
                <div>
                    <span>Hello,</span>
                    <p class="fw-bold">{{Auth::user()->name}}</p>
                </div>
            </div>
        @endif
        @unless(Auth::check())
            <a href="{{route('login')}}" class="btn site-primary text-white px-5 py-2 btn-scale">Sign In</a>
        @endunless
    </div>
</nav>
