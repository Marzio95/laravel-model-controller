<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- TEMPLATE DEI MOVIE --}}
    <h1>questa è la pagina movie</h1>
    <ul>
        @foreach ($myMovies as $movie)
        <li>
            <h2>{{ $movie.title }}</h2>
        </li>
            
        @endforeach

    </ul>
</body>
</html>