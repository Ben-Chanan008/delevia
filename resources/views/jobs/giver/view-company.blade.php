<x-base title="My Companies">
    @push('styles')
        <link rel="stylesheet" href="{{asset('assets/css/jobs/style.css')}}">
    @endpush
    <x-navbar />
    <div class="container">
         <div class="d-flex align-items-center">
            <div class="me-2">
                <i class="fal site-text-primary fa-buildings fa-3x"></i>
            </div>
            <div>
                <h1 class="site-text-primary fw-bold">MY COMPANIES</h1>
                <span><i class="far fa-exclamation-circle"></i> Try <span class="site-text-primary">Delevia Pro</span> to see to top applicants and save time</span>
            </div>
        </div>
        <hr/>
        <div class="d-flex flex-column">
            @forelse($companies as $company)
                <div class="d-flex mx-5">
                    <div class="me-2">
                        <img src="{{asset('storage/' . $company->company_logo)}}" alt="logo" class="rounded-5" height="150px" width="150px"/>
                    </div>
                    <div class="d-flex justify-content-center align-items-start flex-column">
                        <p class="mb-0 fs-3 ms-4 fw-bold site-text-primary">{{$company->company_name}}</p>
                        <a href="#" class="ms-4 text-decoration-none anchor-tag">Edit Company</a>
                    </div>
                </div>   
                <hr />
                @empty
                <p class="fw-bold">No companies Yet</p>
            @endforelse
        </div>
    </div>
</x-base>