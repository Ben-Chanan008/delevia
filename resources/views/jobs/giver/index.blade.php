@php use App\Models\Company;use Illuminate\Support\Facades\Auth; @endphp
@php @endphp
<x-base title="Create A Job">
    @push('styles')
        <link rel="stylesheet" href="{{asset('assets/css/jobs/style.css')}}">
    @endpush
    <x-navbar/>
    <div class="hero p-5 mb-5">
        <p class="text-white fs-1 fw-bold text-center">CREATE YOUR NEXT JOB</p>
        <div class="d-flex justify-content-center">
            <a href="{{route('jobs.create', ['user' => Auth::id()])}}" class="btn site-primary text-decoration-none text-white px-5">POST JOB</a>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="search-bar d-flex w-100 py-2 rounded-3">
                <button class="btn">
                    <i class="far fa-magnifying-glass"></i>
                </button>
                <input type="text" class="bg-transparent form-control border-0 w-100" placeholder="Search..."/>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach($jobs as $job)
                <div class="col-lg-4 gx-4 jobs" id="{{$job->id}}">
                    <div class="d-flex">
                        <div class="me-2">
                            <div class="p-2 rounded-4 bg-secondary">
                                <img src="{{asset('assets/images/ask-me.svg')}}" class="img-fluid" alt="img" height="100px" width="200px"/>
                            </div>
                            <div class="d-flex">
                                <a href="" class="btn p-0">
                                    <i class="far fa-pen me-2 ms-2 mt-3"></i>
                                </a>
                                <a href="" class="btn p-0">
                                    <i class="far fa-gear me-2 ms-2 mt-3"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <p class="fw-bold">{{$job->title}}</p>
                            <div class="d-flex mb-2 tags">
                                @foreach($tags as $idx => $tag)
                                    @foreach($tag as $value)
                                        <div class="tag me-2">{{$value}}</div>
                                    @endforeach
                                @endforeach
                            </div>
                            <p class="fw-bold">{{dd(Company::where(['id' => $job->company_id])->get())}}</p>
                            <p class="text-secondary">Posted 20+ days ago</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-4 gx-4 jobs" id="2">
                <div class="d-flex">
                    <div class="me-2">
                        <div class="p-2 rounded-4 bg-secondary">
                            <img src="{{asset('assets/images/ask-me.svg')}}" class="img-fluid" alt="img" height="100px" width="200px"/>
                        </div>
                        <div class="d-flex">
                            <a href="" class="btn p-0">
                                <i class="far fa-pen me-2 ms-2 mt-3"></i>
                            </a>
                            <a href="" class="btn p-0">
                                <i class="far fa-gear me-2 ms-2 mt-3"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="fw-bold">Senior Developer Advocate</p>
                        <div class="d-flex mb-2">
                            <div class="tag me-2">php</div>
                            <div class="tag me-2">js</div>
                            <div class="tag me-2">css</div>
                        </div>
                        <p class="fw-bold">Acne Corps Ltd.</p>
                        <p class="text-secondary">Posted 20+ days ago</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 gx-4">
                <div class="d-flex">
                    <div class="me-2">
                        <div class="p-2 rounded-4 bg-secondary">
                            <img src="{{asset('assets/images/ask-me.svg')}}" class="img-fluid" alt="img" height="100px" width="200px"/>
                        </div>
                        <div class="d-flex">
                            <a class="btn p-0">
                                <i class="far fa-pen me-2 ms-2 mt-3"></i>
                            </a>
                            <a class="btn p-0">
                                <i class="far fa-gear me-2 ms-2 mt-3"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="fw-bold">Senior Developer Advocate</p>
                        <div class="d-flex mb-2">
                            <div class="tag me-2">laravel</div>
                            <div class="tag me-2">html</div>
                            <div class="tag me-2">css</div>
                        </div>
                        <p class="fw-bold">Acne Corps Ltd.</p>
                        <p class="text-secondary">Posted 20+ days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-base>
