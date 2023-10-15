<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empty project layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<main>
    <div class="container">
        <div class="card col-md-5 m-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Имя участника: <span class="badge text-bg-primary">{{ $name }}</span></li>
                <li class="list-group-item">Возраст: <span class="badge text-bg-primary">{{ $age }}</span></li>
                <li class="list-group-item">Страна проживания: <span class="badge text-bg-primary">{{$country}}</span></li>
                <li class="list-group-item">Ссылка на фотографию: <span class="badge text-bg-primary"><a href="{{ $image }}">{{$image}}</a></span></li>
            </ul>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
