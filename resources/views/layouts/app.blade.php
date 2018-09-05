<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="@csrf">
    <title>Navigation</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">@lang('navigation.title')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-content">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">@lang('navigation.home')</a></li>
                @if (!Auth::user())
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">@lang('navigation.login')</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">@lang('navigation.register')</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('navigation.pages')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('pages.index') }}">@lang('navigation.pages_list')</a>
                            <a class="dropdown-item" href="{{ route('pages.about') }}">@lang('navigation.pages_about')</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">@lang('navigation.logout')</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
<footer class="footer">
    <div class="container"><span class="text-muted">{!! __('content.footer') !!}</span></div>
</footer>

</body>
</html>
