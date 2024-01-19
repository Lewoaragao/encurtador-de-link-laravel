<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encurtador de Links</title>
</head>
<body>
    <h1>Encurtador de Links</h1>

    @if(session('link'))
        <p>Link encurtado com sucesso: <a href="{{ url(session('link')->slug) }}">{{ url(session('link')->slug) }}</a></p>
    @endif

    <form action="/encurtar" method="post">
        @csrf
        <label for="url">URL:</label>
        <input type="text" name="url" required>
        <button type="submit">Encurtar</button>
    </form>

    <h2>Links Encurtados:</h2>
    <ul>
        @foreach($links as $link)
            <li><a href="{{ url($link->slug) }}">{{ url($link->slug) }}</a></li>
        @endforeach
    </ul>
</body>
</html>
