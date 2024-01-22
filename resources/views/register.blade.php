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
            <label class="form-label" for="name">Name:</label>
            <input class="form-control" type="text" name="name" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">Email:</label>
            <input class="form-control" type="email" name="email" required aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.</div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">Password:</label>
            <input class="form-control" type="password" name="password" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="password_confirmation">Confirm Password:</label>
            <input class="form-control" type="password" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection
