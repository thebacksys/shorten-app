@extends('guest.layouts.app')
@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Welcome to {{ env('APP_NAME') }}</h1>
        <p class="lead">Create a shortened link making it easy to remember</p>
        <a href="#" class="btn btn-lg btn-primary">Try it for free</a>
    </div>
@endsection
