<x-base title="Register">
    <div class="msg-alerts"></div>
    <div class="container vh-100">
        <div class="d-flex flex-column h-100 justify-content-center align-items-center">
            <div class="card w-100 p-5 border-0 bg-light">
                <div class="row my-5">
                    <div class="col-lg-6 mb-lg-0 mb-5">
                        <h1>Delevia - Find Jobs</h1>
                        <span>Your best suited job is one click away!</span>
                    </div>
                    <div class="col-lg-6 position-relative">
                        <p class="fs-2">Sign In</p>
                        <form action="" id="register-form" class="step-container w-100">
                            <div class="form-group mt-3 step w-100">
                                <input type="text" class="form-control p-3 w-100" name="name" placeholder="Name"/>
                                <p class="text-danger error-msg"></p>
                            </div>
                            <div class="form-group mt-3 step w-100">
                                <input type="email" class="form-control p-3" name="email" placeholder="Email"/>
                                <p class="text-danger error-msg"></p>
                            </div>
                            <div class="form-group mt-3 step w-100">
                                <input type="password" class="form-control p-3" name="password" placeholder="Password"/>
                                <p class="text-danger error-msg"></p>
                                <div class="d-flex justify-content-end">
                                    <button class="border-0 rounded-pill submit-btn bg-primary px-5 py-2 text-white">Done</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/plugins/message-alert/dist/main.js')}}"></script>
    <script src="{{asset('assets/js/step.js')}}"></script>
    <script>
        const step = new Step('#register-form', ['btn'], 'user/register');
    </script>
</x-base>
