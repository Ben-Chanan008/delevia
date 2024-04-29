<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta token="{{csrf_token()}}" />
    <title>{{$title ?? ''}} :: {{config('app.name')}}</title>

    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/message-alert/src/css/style.css')}}" />
    @stack('styles')

    <link rel="icon" type="image/x-icon" href="{{asset('meta/favicon.ico')}}">
</head>
<body {{$attributes->merge(['class' => 'overflow-x-hidden vw-100'])}}>
    {{$slot}}

    <script defer src="{{asset('assets/js/main.js')}}"></script>
    <script defer src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script defer src="{{asset('assets/plugins/fontawesome/js/all.js')}}"></script>

    @stack('scripts')
</body>
</html>
