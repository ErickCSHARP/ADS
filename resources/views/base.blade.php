<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ATV1 Programação WEB - Aplicação PHP Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

    <div class="container mt-2">
        <div class="p-3 mb-2 bg-dark font-weight-bold text-white">ATV1 Programaçao WEB - Aplicação PHP Lavarel</div>

        <a class="p-3" href="{{ route('produtos.index') }}">Produtos</a>
        
        @if ($message = Session::get('Sucesso'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>

