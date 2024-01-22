@extends('home')

@section('content')
    @if (session('link'))
        <p>Link encurtado com sucesso: <a href="{{ url(session('link')->slug) }}">{{ url(session('link')->slug) }}</a>
        </p>
    @endif

    <form action="/encurtar" method="post">
        @csrf
        <label for="url">URL:</label>
        <input type="text" name="url" required>
        <button class="btn btn-primary" type="submit">Encurtar</button>
    </form>

    <h2>Links Encurtados:</h2>
    <ul>
        @foreach ($links as $link)
            <li><a href="{{ url($link->slug) }}">{{ url($link->slug) }}</a></li>
        @endforeach
    </ul>
@endsection
