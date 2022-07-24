<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Loja - Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-info pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">Minha Loja</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('categoria') }}">Categorias</a>
            <a class="nav-link" href="{{ route('cadastrar') }}">Cadastrar</a>
            </div>
        </div>
        <a href="{{ route('ver_carrinho') }}" class="btn btn-sm"> <i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
           <!--- nesta div teremos uma area que os arquivos irao adiconar conteudo-->
        @yield('content')    
        </div>     
    </div>

</body>
</html>