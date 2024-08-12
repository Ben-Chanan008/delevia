<x-base title="Register">
    <div class="msg-alerts"></div>
    <div class="container vh-100">
        <div class="d-flex flex-column h-100 justify-content-center align-items-center">
            <div class="card w-100 p-5 border-0 bg-light">
                <div class="row my-5">
                    <div class="col-lg-6 mb-lg-0 mb-5">
                        <h1 class="fw-bold">Delevia - Find Jobs</h1>
                        <span>Your best suited job is one click away!</span>
                        <div class="w-100 justify-content-center align-items-center d-flex pt-3">
                            <img src="{{asset('assets/images/sign-up.svg')}}" alt="find-jobs" height="200px">
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative">
                        <p class="fs-2 fw-bold">Sign In</p>
                        <p>Already have an account? <a class="text-decoration-none site-text-primary" href="{{route('login')}}">Login</a></p>
                        <form action="" id="register-form" class="step-container w-100">
                            <div class="form-group mt-3 step w-100">
                                <input type="text" class="form-control p-3 w-100" name="name" placeholder="Name" validate="name"/>
                                <label for="name" class="floating-label">Name</label>
                                <p class="text-danger error-msg"></p>
                            </div>
                            <div class="form-group mt-3 step w-100">
                                <input type="email" class="form-control p-3" name="email" placeholder="Email" validate="email"/>
                                <label for="name" class="floating-label">Email</label>
                                <p class="text-danger error-msg"></p>
                            </div>
                            <div class="form-group mt-3 step w-100">
                                <input type="password" name="password" class="form-control p-3 position-relative" placeholder="Password" validate="password" />
                                <div class="position-absolute eye-opener"><i class="far fa-eye"></i></div>
                                <p class="text-danger error-msg"></p>
                            </div>
                            <div class="form-group mt-3 step w-100">
                                <label class="w-100">
                                    <select name="user_type" id="job-select" class="form-select w-100">
                                        <option readonly selected>Select User Type</option>
                                        <option value="Hirer">Hirer</option>
                                        <option value="Job Seeker">Job Seeker</option>
                                    </select>
                                </label>
                                <p class="text-danger error-msg"></p>
                                <div class="d-flex justify-content-end">
                                    <button class="border-0 rounded-pill submit-btn site-primary px-5 py-2 text-white">Done</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="{{asset('assets/plugins/message-alert/src/main.js')}}"></script>
    <script src="{{asset('assets/js/step.js')}}"></script>
    <script>
        const step = new Step('#register-form', ['btn'], 'user/store', false);
    </script>
    @endpush;
</x-base>
