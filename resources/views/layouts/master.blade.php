<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{$context['title']}} | Treenomony Database of Common Tree Names</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="rowan-main">
    <div class="details-container rowan-main">
        <div class="container-fluid rowan-header">
            <a href="/"><img style="height: 45px; float: left;"
               src="{{ asset('images/sorbus_aucuparia.svg') }}" alt="Index"></a>
            @include('partials.search_form')
            <div style="clear: both"></div>
        </div>
    </div>

    <nav class="navbar-default details-container rowan-sub-main">
        @if ($context['type'] == 'genus' || $context['type'] == 'species' || $context['type'] == 'show')
            <em><a href="/genus/{{$tree->genus}}">{{$tree->genus}}</a></em>
            @if ($context['type'] == 'genus')
                : {{ count($trees) }} species
            @endif
        @endif

        @if ($context['type'] == 'species' || $context['type'] == 'show')
            <em><a href="/genus/{{$tree->genus}}/species/{{$tree->species}}">{{$tree->species}}</a></em>
        @elseif ($context['type'] == 'tree_search')
            <a href="/search/tree/{{$context['term']}}">Search: {{$context['term']}}</a>
        @elseif ($context['type'] == 'common_name_search')
            <a href="/search/common_name/{{$context['term']}}">Search: {{$context['term']}}</a>
        @else
            &nbsp;
        @endif

        <span style="float: right">
            @guest
                <a href="{{ route('register') }}">Register</a> | <a href="{{ route('login') }}">Login</a>
            @else
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </span>

    </nav>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>