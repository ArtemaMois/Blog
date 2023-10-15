<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X_UA_Compatible" content="ie=edge">
    <title>Laravel Site</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</head>

<body>
    <header>
        <div class="container">
            @include('components.navbar')
        </div>
    </header>
<main>
    <div class="container">
        @yield('main')
    </div>
</main>
<footer>

</footer>
</body>

</html>
