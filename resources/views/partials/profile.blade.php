<x-base title="User Profile">
    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/profile/style.css')}}" />
    @endpush
    <x-navbar />
    <div class="container">
        @if($profile)
            <div class="row">
                <div class="col-lg-4 d-flex">
                    <div class="profile-card mx-lg-0 mt-lg-0 mt-4 mx-auto d-flex flex-column justify-content-center rounded-4 shadow">
                        <div class="d-flex">
                            <div class="mx-auto rounded-circle mt-5 shadow profile-img">
                                <img src="{{asset('assets/images/black.jpeg')}}" alt="" class="rounded-circle"/>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="text-decoration-none">Add Picture</a>
                        </div>
                        <div>
                            <p class="fw-bold h3 site-text-primary text-center">{{Auth::user()->name}}</p>
                            <p class="text-center">{{Auth::user()->email}}</p>
                        </div>
                        <hr class="mx-3" />
                        @if($profile->location)
                            <div class="d-flex ms-3 mb-2 align-items-center">
                                <i class="fad fa-location-dot"></i>
                                <span class="ms-2">{{$profile->location}}</span>
                            </div>
                        @else
                            <div class="d-flex align-items-center ms-3 mb-3 site-text-primary">
                                <i class="far fa-pen"></i>
                                <a href="#" class="ms-1 site-text-primary text-decoration-none">Add Location</a>
                            </div>
                        @endif
                        @if(!Auth::user()->user_key)
                            @if($profile->profession)
                                <div class="d-flex ms-3 align-items-center">
                                    <i class="fad fa-user-tie"></i>
                                    <span class="ms-2">Teacher</span>
                                </div>
                            @else
                                <div class="d-flex align-items-center ms-3 mb-3 site-text-primary">
                                    <i class="far fa-pen"></i>
                                    <a href="#" class="ms-1 site-text-primary text-decoration-none">Add Profession</a>
                                </div>
                            @endif    
                        @else
                            <div class="d-flex ms-3 align-items-center">
                                <i class="fad fa-user-tie"></i>
                                <span class="ms-2">Business Owner</span>
                            </div>
                        @endif
                        <hr class="mx-3" />
                        <div class="d-flex align-items-center ms-3 site-text-primary">
                            <i class="far fa-pen"></i>
                            <span class="ms-1">Edit Profile</span>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 mt-lg-0">
                    <h2 class="text-center site-text-primary fw-bold">ABOUT ME!</h2>
                    @if($profile->about)
                        <p class="mt-5">{{$profile->about}}</p>
                    @else
                        <div class="d-flex align-items-center ms-3 mb-3 site-text-primary">
                            <i class="far fa-pen"></i>
                            <a href="#" class="ms-1 site-text-primary text-decoration-none">Add About Me</a>
                        </div>
                    @endif
                </div>
            </div>
        @else
            <div class="d-flex vh-100 justify-content-center align-items-center">
                <a class="text-decoration-none mx-auto mt-5" href="#">Complete your profile!</a>
            </div>
        @endif
    </div>
</x-base>