@php use App\Http\Middleware\CheckUserType; use App\Models\Jobs;use Carbon\Carbon; use App\Models\Company;use Illuminate\Support\Facades\Auth; @endphp

<x-base title="Create A Job">
    @push('styles')
        <link rel="stylesheet" href="{{asset('assets/css/jobs/style.css')}}">
    @endpush
    <x-navbar/>
    <x-popup.pop-up title="Confirm deletion" body="Are you sure you want to delete"/>
    <div class="msg-alerts"></div>
    <div class="hero p-5 mb-5">
        <p class="text-white fs-1 fw-bold text-center">CREATE YOUR NEXT JOB</p>
        <div class="d-flex justify-content-center">
            <a href="{{route('jobs.create', ['user' => Auth::id()])}}" class="btn site-primary text-decoration-none text-white px-5">POST JOB</a>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
        <form action="{{route('jobs.giver')}}" class="w-100">
            <div class="search-bar d-flex w-100 py-2 rounded-3">
                <button class="btn" type="submit">
                    <i class="far fa-magnifying-glass"></i>
                </button>
                <input type="text" name="search" class="bg-transparent form-control border-0 w-100" placeholder="Search..."/>
            </div>
        </form>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            @forelse($jobs as $job)
                <div class="col-lg-4 gx-4 jobs mb-5" id="{{$job->id}}" user_id="{{Auth::id()}}">
                    <div class="d-flex">
                        <div class="me-2">
                            <div class="p-2 rounded-4 bg-secondary">
                                <img src="{{$job->company->company_logo ? asset('storage/' . $job->company->company_logo) : asset('assets/images/ask-me.svg')}}" class="img-fluid logo-img" alt="img" height="100px" width="200px"/>
                            </div>
                            <div class="d-flex">
                                <button type="button" class="p-0 btn bg-danger text-white px-3 w-50 mt-2 me-2 open-delete rounded-pill" data-bs-toggle="modal" data-bs-target="#delete-modal" user_id="{{Auth::id()}}" job_id="{{$job->id}}">
                                    Delete
                                </button>
                                <a class="p-0 btn btn-primary rounded-pill px-3 w-50 mt-2">
                                    Edit
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
                                            $post_message = "More than a week";
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
                            <p class="text-secondary"><i class="far fa-calendar-day me-2"></i>{{$create_date->format('Y-m-d')}}</p>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="h4 fw-bold">
                            @if(!$trashed)
                                Get started with your <span class="site-text-primary">Delevia</span> journey today!
                            @else
                                Keep posting jobs on <span class="site-text-primary">Delevia</span> you'll find that candidate!
                            @endif
                        </p>
                    </div>
            @endforelse
        </div>
        <div class="mt-5">
            {{$jobs->links()}}
        </div>
    </div>
    @push('scripts')
        <script src="{{asset('assets/plugins/message-alert/src/main.js')}}"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endpush
</x-base>
