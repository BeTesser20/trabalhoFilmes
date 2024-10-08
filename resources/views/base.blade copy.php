{{-- resources/views/base.blade.php --}}

<html>
    <head>
        <title>@yield('titulo')</title>
    </head>
    <body>
    
        <h1>@yield('titulo')</h1>
        <hr>
            <a href="{{route('index')}}">Inicial</a>
            |
            <a href="{{route('filmes')}}">Filmes</a>
            |
            @if(Auth::user() && Auth::user()['admin'])
                <a href="{{route('usuarios')}}">Usuários</a>
                |
            @endif

            @if(Auth::user())
                Olá, {{Auth::user()['nome']}}
                <a href="{{route('logout')}}">Logout</a>
            @else
                <a href="{{route('login')}}">Login</a>
            @endif
            
        <hr>
        @yield('conteudo')
    </body>
</html>