<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}"  type='image/x-icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
</head>

<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials/nav')
            @include('partials.session-status')
        </header>
        <main class="content">
            @yield('content')
        </main>
        <footer class="text-center bg-dark text-white-50 py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
    </div>
</body>

</html>
