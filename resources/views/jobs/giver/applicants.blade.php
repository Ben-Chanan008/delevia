<x-base title="{{$job->title}}">
    <x-navbar />
    @push('styles')
        <link rel="stylesheet" href="{{asset('assets/css/jobs/style.css')}}">
    @endpush
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="me-2">
{{--                <i class="fab site-text-primary fa-firefox-browser fa-3x"></i>--}}
                <i class="fal site-text-primary fa-memo-circle-check fa-3x"></i>
            </div>
            <div>
                <h1 class="site-text-primary fw-bold">JOB APPLICANTS</h1>
                <span><i class="far fa-exclamation-circle"></i> Try <span class="site-text-primary">Delevia Pro</span> to see to top applicants and save time</span>
            </div>
        </div>
        <hr />

        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/images/sign-up.svg')}}" alt="" class="jobs-user-icon img-fluid shadow">
                    <div class="ms-3">
                        <p class="mb-0 fs-5 fw-bold ellipsis">Krasnelar Akbhar Kunillle</p>
                        <p class="mb-0">&#x1F1F3;&#x1F1EC; Nigeria | Lagos</p>
                        <a href="#" class="site-text-primary text-decoration-none">View Application</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/images/sign-up.svg')}}" alt="" class="jobs-user-icon img-fluid shadow">
                    <div class="ms-3">
                        <p class="mb-0 fs-5 fw-bold ellipsis">Krasnelar Akbhar Kunillle</p>
                        <p class="mb-0">&#x1F1F3;&#x1F1EC; Nigeria | Lagos</p>
                        <a href="#" class="site-text-primary text-decoration-none">View Application</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/images/sign-up.svg')}}" alt="" class="jobs-user-icon img-fluid shadow">
                    <div class="ms-3">
                        <p class="mb-0 fs-5 fw-bold ellipsis">Krasnelar Akbhar Kunillle</p>
                        <p class="mb-0">&#x1F1F3;&#x1F1EC; Nigeria | Lagos</p>
                        <a href="#" class="site-text-primary text-decoration-none">View Application</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-base>
