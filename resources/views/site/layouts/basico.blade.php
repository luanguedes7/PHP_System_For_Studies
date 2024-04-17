<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('Título')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}">>
    </head>

    <body>

    @include('site.layouts._partials.topo')
    @yield('conteudo_principal')
    @yield('conteudo_contato')
    @yield('conteudo_sobrenos')

    </body>
</html>