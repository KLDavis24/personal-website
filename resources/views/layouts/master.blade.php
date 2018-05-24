<!DOCTYPE HTML>
<html>

<head>
    @include('partials.head')
</head>

<body>

<div class="page-container">

    @include('partials.header')

    <main class="wrapper">

        @yield('content')

        @include('partials.footer')

    </main>
</div>

</body>

</html>