<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('head-principal')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles AdminLTE Bootstrap 4.4-->
    <title>Laravel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@show

<body >
<div class="wrapper" id="app">
    {{--}} @include('theme.layouts.partials.sidebar'){{--}}
    @include('theme.layouts.partials.nav')
     <div class="content">
         @yield('content')
     </div>
    {{--}} @include('theme.footer')--}}
</div>
</body>



<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')

</html>
