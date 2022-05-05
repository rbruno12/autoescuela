<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('head-principal')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles AdminLTE Bootstrap 4.4-->
    <title>Laravel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('theme.layouts.partials.nav')
@show

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">
    {{--}} @include('theme.layouts.partials.sidebar'){{--}}
     <div>
         @yield('content')
     </div>
    <div>
        @yield('aboutUs')
    </div>
    {{--}} @include('theme.footer')--}}
</div>
</body>



<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')

</html>
