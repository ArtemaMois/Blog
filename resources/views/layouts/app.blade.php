<!doctype html>
<html lang="ru">
    @include('layouts.head')
<body>
    @include('layouts.header')
<main>
    @yield('main')
    <div class="container m-lg-3">
    </div>
</main>
@include('layouts.js')
</body>
</html>
