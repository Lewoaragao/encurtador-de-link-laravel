@if (session('link'))
    <div class="alert alert-success" role="alert">Link encurtado com sucesso: <a
            href="{{ url(session('link')->slug) }}">{{ url(session('link')->slug) }}</a>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

@error('slug')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
