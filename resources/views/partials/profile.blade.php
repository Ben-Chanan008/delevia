<x-base title="User Profile">
    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/profile/style.css')}}" />
    @endpush
    <x-navbar />
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="profile-card d-flex flex-column justify-content-center rounded-4 shadow">
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
                    <div class="d-flex ms-3 mb-2 align-items-center">
                        <i class="far fa-location-dot"></i>
                        <span class="ms-2">Port Harcout, PH</span>
                    </div>
                    <div class="d-flex ms-3 align-items-center">
                        <i class="far fa-user-tie"></i>
                        <span class="ms-2">Teacher</span>
                    </div>
                    <hr class="mx-3" />
                    <div class="d-flex align-items-center ms-3 site-text-primary">
                        <i class="far fa-pen"></i>
                        <span class="ms-1">Edit Profile</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <h2 class="text-center site-text-primary fw-bold">ABOUT ME!</h2>
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ullam animi libero cupiditate vero voluptatibus voluptate. Eos doloremque iste, fuga, accusantium quisquam voluptas velit natus eligendi porro excepturi earum maiores nobis dolorum corporis dolor, aliquid maxime libero dignissimos temporibus? Veniam perferendis est ipsum repellendus quibusdam necessitatibus quasi! Adipisci, ut, rerum fugiat consectetur in hic porro et magni recusandae voluptatibus quisquam! Nulla et dolores natus nostrum tempore quod totam hic labore illo voluptas non at quidem doloremque eligendi cupiditate aspernatur autem optio praesentium, ea porro veniam quae mollitia. Quasi, voluptate consequuntur culpa quibusdam, voluptas, esse fugit facilis optio aspernatur aut rerum.</p>
            </div>
        </div>
    </div>
</x-base>