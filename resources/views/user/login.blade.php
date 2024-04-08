<x-base title="Login">
    <div class="msg-alerts"></div>
    <div class="container vh-100">
        <div class="d-flex flex-column h-100 justify-content-center align-items-center">
            <div class="card p-5 bg-white shadow border-0">
                <h1 class="text-center mb-5">Sign In</h1>
                <div class="w-500 step-container">
                    <form action="" id="login-form" class="w-100">
                        <div class="mb-3 step w-100">
                            <input type="text" class="p-3 form-control w-100" placeholder="Email"/>
                            <p class="error-msg text-danger"></p>
                        </div>
                        <div class="mb-3 step">
                            <input type="text" class="p-3 form-control" placeholder="Password"/>
                            <p class="error-msg text-danger"></p>
                            <div class="d-flex justify-content-end">
                                <button class="border-0 rounded-pill submit-btn bg-primary px-5 py-2 text-white">Done</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/plugins/message-alert/dist/main.js')}}"></script>
    <script src="{{asset('assets/js/step.js')}}"></script>
    <script>
        const step = new Step('#login-form', ['btn', 'p-3'], 'user/login', 'login');
    </script>
</x-base>
