<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name') . ' :: ' . $title = $title ?? 'Your Daily Driver'}} </title>

    {{--  PLUGINS' CSS  LINKS  --}}
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.css')}}">

    {{--  ICONS CSS  LINKS  --}}
    <link rel="stylesheet" href="{{asset('assets/icons/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/icons/mdi/css/materialdesignicons.css')}}">

    {{--  CSS LINKS  --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
</head>
<body>
    {{$slot}}
    {{--  JAVASCRIPT LINKS  --}}
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
</html>
