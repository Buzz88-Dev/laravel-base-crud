<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($Comics as $link)
            <div class="container_fumetto">
                <img src="{{ $link['thumb'] }}">
                <span>{{ $link['series']}}</span>
            </div>
        @endforeach
    </div>
</body>
</html>
