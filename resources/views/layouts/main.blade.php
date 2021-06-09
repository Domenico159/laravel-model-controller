<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movies</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    {{-- Style --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>

    {{-- Header --}}

    @include('partials.header')

    {{-- Main --}}

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}

    @include('partials.footer')

</body>

</html>
