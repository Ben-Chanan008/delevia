<x-base_struct title="Sign Up">
    <div class="container vh-100">
        <div class="d-flex flex-column justify-content-center h-100">
            <form action="" id="register-form">
                <h1 class="text-center mb-3">Sign Up</h1>
                <div class="form-group mb-3 mx-3">
                    <input type="text" class="rounded-pill p-3 form-control" placeholder="First Name" id="first-name"/>
                    <p class="error-msg mb-2"></p>
                </div>
                <div class="form-group mb-3 mx-3">
                    <input type="text" class="rounded-pill p-3 form-control" placeholder="Last Name" id="last-name"/>
                    <p class="error-msg mb-2"></p>
                </div>
                <div class="form-group mb-3 mx-3">
                    <input type="email" class="rounded-pill p-3 form-control" placeholder="Email Address" id="email"/>
                    <p class="error-msg mb-2"></p>
                </div>
                <div class="form-group mb-3 mx-3">
                    <input type="password" class="rounded-pill p-3 form-control" placeholder="Password" id="password"/>
                    <p class="error-msg mb-2"></p>
                </div>
                <button class="site-orange rounded-pill px-5 py-3 border-0 w-100 text-white">Sign Up</button>
            </form>
        </div>
    </div>
</x-base_struct>
