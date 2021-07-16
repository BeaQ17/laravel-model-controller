<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie controller</title>
</head>
<body>
    
    <div class="cards">
        @foreach ($movies as $index => $movie)
                <!--<img src="{{$movie[""]}}" alt="thumbnail movie cover">-->
                <h3>{{$movie["title"]}}</h3>
                <p>{{$movie["original_title"]}}</p>
                <p>{{$movie["date"]}} - Vote: {{$movie["vote"]}}</p>
        @endforeach
    </div>

</body>
</html>