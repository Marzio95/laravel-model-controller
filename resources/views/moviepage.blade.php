<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  

    <link rel="stylesheet" href="css/app.css">
    <title>Movies Controller</title>
</head>
<body>
    <h1>questa è la pagina movie</h1>
    <div class="body">
    {{-- TEMPLATE DEI MOVIE --}}
        @foreach ($myMovies as $movie)
        <div class="card">
            <h2>Title: {{ $movie->title }}</h2> 
            <h2>Nationality: {{ $movie->nationality }}</h2> 
            <h3>Data: {{ $movie->date }}</h3> 
            <h3>Vote: {{ $movie->vote }}</h3>
        </div>
        @endforeach
    </div>
</body>
</html>