<x-base title="Make changes to your job">
    @push('styles')
        <link rel="stylesheet" href="{{asset('assets/css/jobs/style.css')}}">
    @endpush
    <div class="msg-alerts"></div>
    <x-navbar />
    <h1 class="text-center site-text-primary fw-bold mt-3">EDIT YOUR JOB!</h1>
    <div class="d-flex flex-column vh-75 justify-content-center align-items-center">
        <div class="card border-0 shadow p-5">
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
                    <form id="update-form" class="step-container w-100">
                        <div class="mt-3 step w-100">
                            <p class="text-center site-text-primary fw-bold">Job Information</p>
                            <div class="d-flex flex-column">
                                <div class="mb-3 form-group">
                                    <input type="text" class="form-control p-3 w-100" name="job_title" placeholder="Job Title" validate="name" value="{{$job->title}}"/>
                                    <label for="name" class="floating-label">Job Title</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3 w-100">
                                    <input type="text" class="form-control p-3 w-100" name="company" placeholder="Company" validate="no-validate" value="{{$job->company->company_name}}" readonly/>
                                    <p class="text-danger error-msg"></p>
                                    <label for="" class="floating-label">Company</label>
                                </div>
                                <div class="form-group mb-3 w-100">
                                    <input type="text" class="form-control p-3 w-100" name="tags" placeholder="Tags comma seperated" validate="name" value="{{$job->tags}}"/>
                                    <label for="name" class="floating-label">Tags comma seperated</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3 w-100">
                                    <input type="text" class="form-control p-3 w-100" name="location" placeholder="Location" validate="name" value="{{$job->location}}"/>
                                    <label for="name" class="floating-label">Location</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 step w-100">
                            <p class="text-center site-text-primary fw-bold">Job Requirements</p>
                            <div class="d-flex flex-column">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3" name="description" placeholder="Description" validate="name" value="{{$job->description}}"/>
                                    <label for="name" class="floating-label">Description</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3" name="experience" placeholder="Experience" validate="name" value="{{$job->experience}}"/>
                                    <label for="name" class="floating-label">Experience</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3" name="degree_req" placeholder="Degree Req" validate="name" value="{{$job->degree_req}}"/>
                                    <label for="name" class="floating-label">Degree Req</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3" name="job_type" placeholder="Job Type" validate="name" value="{{$job->job_type}}"/>
                                    <label for="name" class="floating-label">Job Type</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3 step w-100">
                            <p class="text-center site-text-primary fw-bold">Job Pay</p>
                            <div class="d-flex flex-column">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3" name="salary" placeholder="Salary" validate="name" value="{{$job->salary}}"/>
                                    <label for="name" class="floating-label">Salary</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3" name="rate" placeholder="Rate" validate="name" value="{{$job->rate}}"/>
                                    <label for="name" class="floating-label">Rate</label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="w-100">
                                        <select name="currency" class="form-select w-100" id="currency-select">
                                            <option readonly value="" selected>Select Your Currency</option>
                                            @foreach($currency as $money)
                                                <option value="{{$money->currency_name}}">&{{$money->unicode}}; {{$money->currency_name}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                    <p class="text-danger error-msg"></p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="border-0 rounded-pill submit-btn site-primary px-5 py-2 text-white">Edit Job</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{asset('assets/plugins/message-alert/src/main.js')}}"></script>
        <script src="{{asset('assets/js/step.js')}}"></script>
        <script>
            const step = new Step('#update-form', ['btn', 'post-job'], 'jobs/giver/{{Auth::id()}}/edit/{{$job->id}}', true);
        </script>
    @endpush
</x-base>
