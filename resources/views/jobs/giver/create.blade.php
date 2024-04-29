<x-base class="vh-100">
    <x-navbar />
    <h1 class="text-center site-text-primary fw-bold mt-3">POST A JOB!</h1>
    <div class="d-flex flex-column h-75 justify-content-center align-items-center">
        <div class="card border-0 shadow p-5">
            <div class="row w-900">
                <div class="col-lg-6">
                    <div class="d-flex h-100 justify-content-center w-100 flex-column">
                        <p class="h4">Hey </p>
                        <p class="h3 fw-bold">{{Auth::user()->name}},</p>
                        <p>want more from <span class="site-text-primary">Delevia</span>?</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="" id="register-form" class="step-container w-100">
                        <div class="mt-3 step w-100">
                            <p class="text-center site-text-primary fw-bold">Job Information</p>
                            <div class="d-flex flex-column">
                                <div class="mb-3 form-group">
                                    <input type="text" class="form-control p-3 w-100" name="job-title" placeholder="Job Title" validate="name"/>
                                    <label for="name" class="floating-label">Job Title</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3 w-100">
                                    <label class="w-100">
                                        <select name="user_type" class="form-select w-100">
                                            <option readonly selected>Select Company</option>
                                            <option value="Hirer">Hirer</option>
                                            <option value="Job Seeker">Job Seeker</option>
                                        </select>
                                    </label>
                                    <p class="text-danger error-msg"></p>
                            </div>
                            </div>
                            <div class="form-group mb-3 w-100">
                                <input type="text" class="form-control p-3 w-100" name="tags" placeholder="Tags" validate="name"/>
                                <label for="name" class="floating-label">Tags</label>
                                <p class="text-danger error-msg"></p>
                            </div>
                            <div class="form-group mb-3 w-100">
                                <input type="date" class="form-control p-3 w-100" name="tags" placeholder="Date of Opening" validate="name"/>
                                <label for="name" class="floating-label">Date of opening</label>
                                <p class="text-danger error-msg"></p>
                            </div>
                        </div>
                        <div class="mt-3 step w-100">
                            <p class="text-center site-text-primary fw-bold">Job Popper</p>
                            <div class="d-flex flex-column">
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control p-3" name="email" placeholder="Email" validate="email"/>
                                    <label for="name" class="floating-label">Email</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                            </div>
                        </div>
{{--                        <div class="d-flex flex-column mt-3 step w-100">--}}
{{--                            <input type="password" name="password" class="form-control p-3 position-relative" placeholder="Password" validate="password" />--}}
{{--                            <div class="position-absolute eye-opener"><i class="far fa-eye"></i></div>--}}
{{--                            <p class="text-danger error-msg"></p>--}}
{{--                        </div>--}}
                        <div class="form-group mt-3 step w-100">
                            <label class="w-100">
                                <select name="user_type" class="form-select w-100">
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
    @push('scripts')
        <script src="{{asset('assets/plugins/message-alert/dist/main.js')}}"></script>
        <script src="{{asset('assets/js/step.js')}}"></script>
        <script>
            const step = new Step('#register-form', ['btn', 'post-job'], 'user/store');
        </script>
    @endpush
</x-base>
