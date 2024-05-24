<x-base title="Contact Us">
    <x-navbar />
    <section class="container about-section">
        <h1 class="d-text-primary text-center fw-bold site-text-primary">Contact The Team</h1>
        <p class="lead text-center">Want to reach Delevia? Fill in form or <a class="site-text-primary text-decoration-none" href="tel:+2347037250037">call</a> us at +1 (889) 952-6998</p>
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class="w-75 h-100">
                    <div class="d-lg-flex d-none hero rounded-top-3 fs-5 h-75 p-5 contact-card flex-column position-relative">
{{--                        <div class="overlay position-absolute top-0 start-0 bottom-0 end-0"></div>--}}
                        <div class="text-white d-flex align-items-center">
                            <i class="far fa-phone fa-2x me-4"></i>
                            <span>+1 (889) 952-6998</span>
                        </div>
                        <div class="text-white d-flex mt-4 align-items-center">
                            <i class="far fa-envelope-circle fa-2x me-4"></i>
                            <span>hello@delevia.com</span>
                        </div>
                        <div class="text-white d-flex align-items-center mt-4">
                            <i class="far fa-location fa-2x me-4"></i>
                            <span>Remote Nigeria</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 vh-100">
                <div class="d-flex h-75 w-100 flex-column justify-content-center align-items-center">
                    <form action="" id="contact-form" class="w-100">
                        <div class="form-group mb-3">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="p-3 form-control"/>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="name" class="p-3 form-control"/>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="name" class="p-3 form-control"/>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Message</label>
                            <textarea name="name" id="message" class="p-5 form-control"></textarea>
                        </div>
                        <button class="btn text-white site-primary p-3 w-100">Submit <i class="far fa-arrow-right-long"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
</x-base>
