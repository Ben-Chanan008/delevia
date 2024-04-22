<x-base title="Forgot Password">
    <div class="msg-alerts"></div>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow border-0 rounded-4 p-5">
            <div>
                <h1 class="text-center fw-bold site-text-primary">Delevia</h1>
                <p class=" text-center mb-3">Forgot Password?</p>
            </div>
            <div class="mb-3 w-500 step-container">
                <form id="upd-form" class="w-100">
                    <div class="mb-3 step form-group w-100">
                        <input type="email" name="email" class="form-control p-3 w-100" placeholder="Email" validate="email" />
                        <label class="floating-label">Email</label>
                        <p class="error-msg text-danger"></p>
                    </div>
                    <div class="mb-3 step form-group w-100">
                        <input type="password" name="password" class="form-control p-3 w-100 position-relative" placeholder="New Password" validate="password" />
                        <div class="position-absolute eye-opener"><i class="far fa-eye"></i></div>
                        <label class="floating-label">New Password</label>
                        <p class="error-msg text-danger"></p>
                        <div class="d-flex justify-content-end">
                            <button class="border-0 rounded-pill submit-btn site-primary px-5 py-2 text-white">Done</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{asset('assets/plugins/message-alert/dist/main.js')}}"></script>
        <script src="{{asset('assets/js/step.js')}}"></script>
        <script defer>
            const step = new Step('#upd-form', ['btn', 'p-3', 'login'], 'forgot-password');
        </script>
    @endpush
</x-base>
