
<!DOCTYPE html>
<html lang="he">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="windows-1255">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('storage/icons/icon.ico')}}">
    <meta name="theme-color" content="#e34240">
    <meta name="google-site-verification" content="512ahjENgrnERFaWdAEl4cYV7hDe1wSujE7pUrsJpwY" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-3239207905332136",
              enable_page_level_ads: true
         });
    </script>
    <title>@yield('title')</title>
    @include('partials.meta')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body>
    <div id="app">
        @include('partials.icon-bar')
        {{-- @include('partials.navbar') --}}
        <main class="container">
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
    <script src="{{ mix('js/app.js') }}" ></script>
     @yield('js')
</body>
</html>