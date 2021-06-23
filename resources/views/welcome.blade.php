<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="div container-fluid d-flex flex-wrap">
        @foreach($movies as $movie)
        {{-- @dump($movie->getattributes()) --}}


        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><strong>Title: </strong>  {{$movie->title}}</h5>
                <p class="card-text"><strong>Original title: </strong>  {{$movie->original_title}}</p>
                <p class="card-text"><strong>Nationality: </strong>  {{$movie->nationality}}</p>
                <p class="card-text"><strong>Date: </strong> {{$movie->date}}</p>
                <p class="card-text"><strong>Vote: </strong> {{$movie->vote}}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>
