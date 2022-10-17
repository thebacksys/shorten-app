@extends('guest.layouts.app')
@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Login</h1>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    @if (\Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ \Session::get('success') }}
                        </div>
                    @endif
                    {{ \Session::forget('success') }}
                    @if (\Session::get('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ \Session::get('error') }}
                        </div>
                    @endif
                    <div class="card-body p-5">
                        <form action="{{ route('confirmLogin') }}" method="POST">
                            @csrf
                            <div class="form-outline mb-2">
                                <label class="form-label" for="email">Your Email</label>
                                <input type="email" id="email" name="email" class="form-control" />
                                @if ($errors->has('email'))
                                    <span class="help-block font-red-mint">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" />
                                @if ($errors->has('password'))
                                    <span class="help-block font-red-mint">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
