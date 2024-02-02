@extends('home')

@section('content')
    <h1>Register</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/auth/register" method="post">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="name">{{ __('messages.name') }}</label>
            <input class="form-control" type="text" name="name" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">{{ __('messages.email') }}</label>
            <input class="form-control" type="email" name="email" required aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">{{ __('messages.we.will.never.share.your.email') }}</div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">{{ __('messages.password') }}:</label>
            <input class="form-control" type="password" name="password" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="password_confirmation">{{ __('messages.confirm.password') }}</label>
            <input class="form-control" type="password" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('messages.register') }}</button>
    </form>

    <a href={{ route('auth.login') }} class="btn btn-secondary">{{ __('messages.login') }}</a>
@endsection
