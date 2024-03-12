<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Link para o Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<header class="bg-primary py-3">
    <div class="container text-center text-white">
        <h1>Teste Dev Full</h1>
    </div>
</header>

<div class="content">
    <main class="py-4">
        @yield('content')
    </main>
</div>

<footer class="footer bg-light py-3">
    <div class="container text-center">
        <h1>William Oliveira</h1>
        @if(request()->is('clientes*'))
            <a href="{{ url('/') }}">Ir para a página Welcome</a>
        @elseif(request()->is('/'))
            <a href="{{ route('clientes.index') }}">Ir para a página de clientes</a>
        @endif
    </div>
</footer>

</body>
</html>
