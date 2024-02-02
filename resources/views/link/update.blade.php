@extends('home')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fw-bold">{{ __('Atualizar Link') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('link.update', $link->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="alias" class="form-label">{{ __('Apelido') }}</label>
                            <input id="alias" type="text" class="form-control @error('alias') is-invalid @enderror"
                                name="alias" value="{{ old('alias', $link->alias) }}" required autofocus>

                            @error('alias')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="url" class="form-label">{{ __('messages.original.link') }}</label>
                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror"
                                name="url" value="{{ old('url', $link->url) }}" readonly disabled>

                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">{{ __('Link Encurtado') }}</label>
                            <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror"
                                name="slug" value="{{ url($link->slug) }}" readonly disabled>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Atualizar') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
