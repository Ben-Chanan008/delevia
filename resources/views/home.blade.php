<x-base title="Home">
    @push('styles')
        <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
    <x-navbar />
    <div class="hero-card mt-5">
        <div class="p-5 shadow rounded-4 mx-auto">
            <h1 class="text-center">DELEVIA</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consequuntur dolorem eligendi hic ipsum laborum modi quae quam repudiandae vero.</p>
            <div class="d-flex w-100">
                <button class="mx-auto btn text-center site-primary px5 py-3 text-white">Try Delevia Pro</button>
            </div>
        </div>
    </div>
    <section id="our-partners" class="mt-5">
        <div class="d-flex">
            <div class="icons d-flex mx-auto p-5">
                <div class="px-3 icon">
                    <i class="fab fa-apple text-black fa-3x"></i>
                </div>
                <div class="px-3 icon">
                    <i class="fab fa-facebook text-black fa-3x"></i>
                </div>
                <div class="px-3 icon">
                    <i class="fab fa-laravel text-black fa-3x"></i>
                </div>
                <div class="px-3 icon">
                    <i class="fab fa-twitter text-black fa-3x"></i>
                </div>
                <div class="px-3 icon">
                    <i class="fab fa-microsoft text-black fa-3x"></i>
                </div>
                <div class="px-3 icon">
                    <i class="fab fa-google text-black fa-3x"></i>
                </div>
                <div class="px-3 icon">
                    <i class="fab fa-amazon text-black fa-3x"></i>
                </div>
                <div class="px-3 icon">
                    <i class="fab fa-instagram text-black fa-3x"></i>
                </div>
                <div class="px-3 icon">
                    <i class="fab fa-twitch text-black fa-3x"></i>
                </div>
            </div>
        </div>
        <div class="p-2">
            <p class="text-center">Our trusted Partners in collaboration</p>
            <h3 class="text-center">OUR PARTNERS</h3>
        </div>
    </section>
    <section id="testimonials" class="mt-5 p-5">
        <h2 class="text-center site-text-primary fw-bold">TESTIMONIALS</h2>
        <p class="text-center">Don't just take our word for it. Here's what the users think!</p>
            <div class="d-flex overflow-x-hidden">
                <div class="owl-carousel d-flex justify-content-center" id="owl-one">
                    <div class="testimonials-card mx-3">
                        <div class="testimonial-head mb-3">
                            <div class="testimonial-img shadow">
                                <i class="far fa-user"></i>
                            </div>
                            <p>John Doe</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem est iste mollitia natus quod similique, suscipit voluptatibus. Fugiat, veniam?</p>
                        <div class="d-flex justify-content-end">
                            <p>2024-02-01</p>
                        </div>
                    </div>
                    <div class="testimonials-card mx-3">
                        <div class="testimonial-head mb-3">
                            <div class="testimonial-img shadow">
                                <i class="far fa-user"></i>
                            </div>
                            <p>John Doe</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem est iste mollitia natus quod similique, suscipit voluptatibus. Fugiat, veniam?</p>
                        <div class="d-flex justify-content-end">
                            <p>2024-02-01</p>
                        </div>
                    </div>
                    <div class="testimonials-card mx-3">
                        <div class="testimonial-head mb-3">
                            <div class="testimonial-img shadow">
                                <i class="far fa-user"></i>
                            </div>
                            <p>John Doe</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem est iste mollitia natus quod similique, suscipit voluptatibus. Fugiat, veniam?</p>
                        <div class="d-flex justify-content-end">
                            <p>2024-02-01</p>
                        </div>
                    </div>
                    <div class="testimonials-card mx-3">
                        <div class="testimonial-head mb-3">
                            <div class="testimonial-img shadow">
                                <i class="far fa-user"></i>
                            </div>
                            <p>John Doe</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem est iste mollitia natus quod similique, suscipit voluptatibus. Fugiat, veniam?</p>
                        <div class="d-flex justify-content-end">
                            <p>2024-02-01</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="why-us" class="container mt-5">
        <div class="mt-5 p-4">
            <h2 class="text-center site-text-primary fw-bold">WHY US?</h2>
            <p class="text-center">See why we're are the best fit for you!</p>
            <div class="row mt-5">
                <div class="col-lg-7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi beatae debitis doloribus dolorum ducimus eligendi eos esse fugiat ipsa, iste nam, odit officiis quas quis quisquam rem reprehenderit tenetur vel velit. Cumque labore obcaecati officia perferendis sapiente. A aperiam consequuntur dolores dolorum minima. A accusantium aliquam, amet animi architecto beatae commodi delectus dolor dolore dolorem, est, exercitationem harum libero nam nemo nobis non obcaecati quia quidem quo ratione repudiandae sint sunt suscipit unde velit vero! At aut autem beatae, consequatur consequuntur corporis cum dolores ducimus ea, earum eligendi error, ex incidunt minima modi nisi provident quam vel vitae voluptates.</p>
                </div>
                <div class="col">
                    <div class="img-container rounded-5"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="news-letter">
        <div class="container p-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7">
                    <p class="h3">Subscribe to Our News Letter</p>
                    <p>Get posted on all new jobs in your area.</p>
                </div>
                <div class="col-lg-5">
                    <p>20% off Premium for Subscribers</p>
                    <div class="input-group bg-white p-3 rounded-3">
                        <input type="text"  class="bg-transparent border-0 form-control" placeholder="Email"/>
                        <button class="btn site-primary text-white" id="news-btn">@Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="mt-5">
        <h2 class="text-center site-text-primary fw-bold">OUR TEAM</h2>
        <p class="text-center">Meet our wonderful Delevia team.</p>
{{--        <div class="owl-carousel">--}}
{{--            --}}
{{--        </div>--}}
        <div class="team-background p-5">
            <div class="owl-carousel" id="owl-two">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center h-100">
                        <i class="far fa-user fa-10x"></i>
                    </div>
                    <div class="col-lg-6 text-white">
                        <h1 class="fw-bold">Samuel Oshinga</h1>
                        <span>CEO - FRONT END TEAM</span>
                        <div class="d-flex flex-column w-75">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam autem ea, earum fuga minus modi molestiae quia quod sapiente soluta voluptatum? Ad architecto delectus deserunt dolores ex facilis illum impedit itaque maxime modi mollitia necessitatibus optio quibusdam recusandae sit soluta, sunt temporibus tenetur unde vitae. Architecto molestiae, quod.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam autem ea, earum fuga minus modi molestiae quia quod sapiente soluta voluptatum? Ad architecto delectus deserunt dolores ex facilis illum impedit itaque maxime modi mollitia necessitatibus optio quibusdam recusandae sit soluta, sunt temporibus tenetur unde vitae. Architecto molestiae, quod.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center h-100">
                        <i class="far fa-user fa-10x"></i>
                    </div>
                    <div class="col-lg-6 text-white">
                        <h1 class="fw-bold">Benchanan Idehen</h1>
                        <span>CEO - FRONT END TEAM</span>
                        <div class="d-flex flex-column w-75">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam autem ea, earum fuga minus modi molestiae quia quod sapiente soluta voluptatum? Ad architecto delectus deserunt dolores ex facilis illum impedit itaque maxime modi mollitia necessitatibus optio quibusdam recusandae sit soluta, sunt temporibus tenetur unde vitae. Architecto molestiae, quod.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam autem ea, earum fuga minus modi molestiae quia quod sapiente soluta voluptatum? Ad architecto delectus deserunt dolores ex facilis illum impedit itaque maxime modi mollitia necessitatibus optio quibusdam recusandae sit soluta, sunt temporibus tenetur unde vitae. Architecto molestiae, quod.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center h-100">
                        <i class="far fa-user fa-10x"></i>
                    </div>
                    <div class="col-lg-6 text-white">
                        <h1 class="fw-bold">Immanuel Oshinga</h1>
                        <span>CEO - FRONT END TEAM</span>
                        <div class="d-flex flex-column w-75">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam autem ea, earum fuga minus modi molestiae quia quod sapiente soluta voluptatum? Ad architecto delectus deserunt dolores ex facilis illum impedit itaque maxime modi mollitia necessitatibus optio quibusdam recusandae sit soluta, sunt temporibus tenetur unde vitae. Architecto molestiae, quod.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam autem ea, earum fuga minus modi molestiae quia quod sapiente soluta voluptatum? Ad architecto delectus deserunt dolores ex facilis illum impedit itaque maxime modi mollitia necessitatibus optio quibusdam recusandae sit soluta, sunt temporibus tenetur unde vitae. Architecto molestiae, quod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="plans" class="mt-5">
        <h2 class="text-center site-text-primary fw-bold">Delevia Pro</h2>
        <p class="text-center">Go pro and unlock the full potential of <span class="site-text-primary">Delevia</span></p>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card h-100 p-5 border-0 bg-white shadow rounded-4">
                        <p class="h2 text-center fw-bold site-text-primary">Delevia Elite</p>
                        <div class="mt-3">
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="site-text-primary text-center fs-2">$24.99/<span class="fs-6">month</span></p>
                            <div class="d-flex">
                                <button class="btn mx-auto btn-primary px-5">Try Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 p-5 border-0 bg-white shadow rounded-4">
                        <p class="h2 text-center fw-bold site-text-primary">Delevia Free</p>
                        <div class="mt-3">
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-times text-danger me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-times text-danger me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-times text-danger me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-times text-danger me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="site-text-primary text-center fs-2">Free/<span class="fs-6">month</span></p>
                            <div class="d-flex">
                                <button class="btn mx-auto btn-primary px-5">Try Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 p-5 border-0 bg-white shadow rounded-4">
                        <p class="h2 text-center fw-bold site-text-primary">Delevia Pro</p>
                        <div class="mt-3">
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-check text-success me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-times text-danger me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="mb-3">
                                <i class="far fa-times text-danger me-2"></i>
                                <span class="">Lorem ipsum dolor sit amet.</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="site-text-primary text-center fs-2">$19.99/<span class="fs-6">month</span></p>
                            <div class="d-flex">
                                <button class="btn mx-auto btn-primary px-5">Try Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    @endpush
</x-base>
