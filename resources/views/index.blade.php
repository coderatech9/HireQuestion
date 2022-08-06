<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Converter</title>
    @yield('style')
</head>

<body class="container">
    @yield('content')
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}">

    </script>
    @yield('script')
</body>

</html>
