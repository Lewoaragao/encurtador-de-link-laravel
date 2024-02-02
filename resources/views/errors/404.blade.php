@extends('homeSHF')

@section('content')
    <div class="d-flex justify-content-center align-items-center h-100">
        <div>
            <h1 class="fw-bold">{{ __('messages.error404') }}</h1>
            <a class="btn btn-primary" href="/">{{ __('messages.return.to.home.page') }}</a>
        </div>
    </div>
@endsection
