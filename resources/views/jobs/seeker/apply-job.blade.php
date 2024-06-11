<x-base title="Apply for Job">
    <x-navbar />
    <div class="container">
        <h1 class="mb-5 site-text-primary text-center">Job Application</h1>
        <span class="fs-3"><span class="site-text-primary">Apply for Job | </span> {{$job->title}} @ {{$job->company->company_name}}</span>
        <hr class="mt-0"/>
        <div class="d-flex flex-column h-75 justify-content-center align-items-center">
        <div class="card border-0 shadow p-5 mt-lg-0 mt-5">
            <div class="row w-900">
                <div class="col-lg-6">
                    <div class="d-flex h-100 justify-content-center w-100 flex-column">
                        <p class="h4">Hey </p>
                        <p class="h3 fw-bold">{{Auth::user()->name}},</p>
                        <p>want more from <span class="site-text-primary">Delevia</span>?</p>
                        <a href="#" class="text-decoration-none btn w-75 site-primary px-3 py-2 text-white">TRY DELEVIA PRO </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form id="register-form" class="step-container w-100">
                        <div class="mt-3 step w-100">
                            <p class="text-center site-text-primary fw-bold">Job Information</p>
                            <div class="d-flex flex-column">
                                <div class="mb-3 form-group">
                                    <input type="text" class="form-control p-3 w-100" name="job_title" placeholder="Job Title" validate="name"/>
                                    <label for="name" class="floating-label">Full Name</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3 w-100">
                                    <input type="text" class="form-control p-3 w-100" name="tags" placeholder="Tags comma seperated" validate="name"/>
                                    <label for="name" class="floating-label">Application Info</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3 w-100">
                                    <input type="text" class="form-control p-3 w-100" name="location" placeholder="Location" validate="name"/>
                                    <label for="name" class="floating-label">Email</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 step w-100">
                            <p class="text-center site-text-primary fw-bold">Job Requirements</p>
                            <div class="d-flex flex-column">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3" name="description" placeholder="Description" validate="name"/>
                                    <label for="name" class="floating-label">Past Jobs</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3" name="experience" placeholder="Experience" validate="name"/>
                                    <label for="name" class="floating-label">Past Experience</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3" name="degree_req" placeholder="Degree Req" validate="name"/>
                                    <label for="name" class="floating-label">Degree</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="border-0 rounded-pill submit-btn site-primary px-5 py-2 text-white">Post Job</button>
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
            const step = new Step('#register-form', ['btn', 'post-job'], 'jobs/giver/{{Auth::id()}}/store', true);
        </script>
    @endpush
    </div>
</x-base>
