<!DOCTYPE HTML>
<html>

<head>
    @include('partials.head')
</head>

<body>
    <div class="page-container">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </div>
</body>

</html>