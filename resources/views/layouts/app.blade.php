<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="">
    @include('layouts._nav')
    @include('layouts._messages')

    <main class="py-4">
        @yield('content')
    </main>

    {{--Modal--}}
    <div id="modal-frame">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        </div>
    </div>
    {{--Modal - FIM --}}

{{--    @include('layouts._footer')--}}
</div>
</body>
@stack('custom-scripts')
</html>
