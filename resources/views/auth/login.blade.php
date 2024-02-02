@extends('home')

@section('content')
    <h1>Login</h1>

    @if ($errors->any())
        <div>
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item list-group-item-action">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('auth.login') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="email">{{ __('messages.email') }}</label>
            <input class="form-control" type="email" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">{{ __('messages.password') }}</label>
            <input class="form-control" type="password" name="password" required>
        </div>

        <div class="mb-3">
            <input type="checkbox" name="remember" id="remember" />
            <label class="form-label" for="remember">{{ __('messages.remember.me') }}</label>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('messages.login') }}</button>
    </form>
@endsection
