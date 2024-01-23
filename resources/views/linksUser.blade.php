@extends('home')

@section('content')
    @if (session('link'))
        <p>Link encurtado com sucesso: <a href="{{ url(session('link')->slug) }}">{{ url(session('link')->slug) }}</a>
        </p>
    @endif

    <form class="mb-3" action="/encurtar" method="post">
        @csrf
        <div class="input-group">
            <input class="form-control" type="text" name="url" placeholder="URL" required>
            <button class="btn btn-primary" type="submit">Encurtar</button>
        </div>
    </form>

    <h2>Links Encurtados:</h2>
    <ul>
        @if (isset($links) && count($links) > 0)
            @foreach ($links as $link)
                <li><a href="{{ url($link->slug) }}">{{ url($link->slug) }}</a></li>
            @endforeach
        @else
            <li>Nenhum link disponível.</li>
        @endif
    </ul>
@endsection
