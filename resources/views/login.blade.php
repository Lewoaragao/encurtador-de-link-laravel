@extends('home')

@section('content')
    <h1>Login</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/auth/login" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="email">Email:</label>
            <input class="form-control" type="email" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">Password:</label>
            <input class="form-control" type="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
