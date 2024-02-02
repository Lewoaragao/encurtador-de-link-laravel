@extends('home')

@section('content')

    <form class="mb-3" action="{{ route('link.store') }}" method="post">
        @csrf
        <div class="form-control">
            <label class="form-label fw-bold" for="alias">Apelido</label>
            <input class="form-control mb-3" id="alias" type="text" name="alias" placeholder="Apelido (Opcional)">

            <label class="form-label fw-bold" for="url">URL</label>
            <input class="form-control mb-3" id="url" type="text" name="url" placeholder="URL" required>

            <button class="btn btn-primary" type="submit">Encurtar</button>
        </div>
    </form>

    <h2 class="fw-bold ms-3 mb-3">Links Encurtados</h2>
    <ul class="list-group">
        @if (isset($links) && count($links) > 0)
            @foreach ($links as $link)
                <li class="list-group-item d-flex gap-5">
                    <div>
                        <p class="mb-0"><span class="fw-bold">Apelido:</span> {{ $link->alias }}</p>
                        <p class="mb-0"><span class="fw-bold">Link:</span> {{ $link->url }}</p>
                        <p class="mb-0"><span class="fw-bold">Link Encurtado:</span> <a
                                href="{{ url($link->slug) }}">{{ url($link->slug) }}</a></p>
                    </div>

                    <div>
                        <p class="mb-0"><span class="fw-bold">Cliques:</span> {{ $link->num_clicks }}</p>
                    </div>

                    <div>
                        <form class="mb-0" action="{{ route('link.destroy', $link->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>

                        <a class="btn btn-primary" href="{{ route('link.update', $link->id) }}">
                            <i class="fa-solid fa-gear"></i>
                        </a>
                    </div>
                </li>
            @endforeach
        @else
            <li class="list-group-item">{{ __('messages.no.links.avaliable') }}</li>
        @endif
    </ul>
@endsection
