<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
</head>
<body>
    @include('partials.header')
    <main>
        <ul>
            @foreach ($movies as $item)
            <li>{{$item->title}}</li>
                
            @endforeach
        </ul>
    </main>
    @include('partials.footer')
</body>
@vite('resources/js/app.js')
</html>