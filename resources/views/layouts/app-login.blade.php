<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Librería')</title>

    <link rel="icon" href="{{ asset('img/libros.png')}}">

    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"> <!--Bootstrap--> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css')}}"> <!--Estilos--> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Jesusball14/mi-css@latest/app.css">
</head>
<body>
    
    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <h4 class="ms-2">Librería</h4>
              </a>

            </div>
        </nav>

        <main class="main-content">

            <div class="container">
              @yield('content')
            </div>

        </main>

    </header>

    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>