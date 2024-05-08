@php use App\Http\Middleware\CheckUserType; use Carbon\Carbon; use App\Models\Company;use Illuminate\Support\Facades\Auth; @endphp

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
                        <div class="d-flex justify-content-center flex-column">
                            <p class="fw-bold mb-2 fs-5 job-title">{{$job->title}}</p>
                            <div class="d-flex mb-2 tags">
                                @php
                                    $tags = explode(',', $job->tags);
									$get_two_array_items = fn ($array) => count($array) > 2 ? array_slice($array,0, 2) : $array;

                                    $create_date = $job->created_at;
									$today = now();
									$post_message = '';

                                    $secondsDifference = $today->diffInSeconds($create_date);
                                    $minutesDifference = $today->diffInMinutes($create_date);
                                    $hoursDifference = $today->diffInHours($create_date);
                                    $daysDifference = $today->diffInDays($create_date);

                                    switch (true) {
                                        case $secondsDifference < 60:
                                            $post_message = "Posted just now";
                                            break;
                                        case $minutesDifference < 60:
                                            $post_message = "Posted $minutesDifference minutes ago";
                                            break;
                                        case $hoursDifference < 24:
                                            $post_message = "Posted $hoursDifference hours ago";
                                            break;
                                        case $daysDifference == 1:
                                            $post_message = "Posted yesterday";
                                            break;
                                        case $daysDifference > 1 && $daysDifference <= 7:
                                            $post_message = "Posted $daysDifference days ago";
                                            break;
                                        default:
                                            $post_message = "Posted more than a week ago";
                                            break;
                                    }
                                @endphp
                                @foreach($get_two_array_items($tags) as $idx => $tag)
                                    <div class="tag me-2">{{$tag}}</div>
                                @endforeach
                            </div>
                            <p class="fw-bold mb-2"><i class="far fa-building me-2"></i>{{Company::where(['id' => $job->company_id])->get()->first()->company_name}}</p>
                            <p class="mb-2"><i class="far fa-location-dot me-2 "></i>{{ucfirst($job->location)}}</p>
                            <p class="mb-2"><i class="far fa-code-branch me-2"></i>{{ucfirst($job->job_type)}}</p>
                            <p class="text-secondary"><i class="far fa-calendar-day me-2"></i>{{$post_message}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-base>
