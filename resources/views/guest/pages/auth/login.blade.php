@extends('guest.layouts.app')
@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Login</h1>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                        <form>
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form3Example3cg">Your Email</label>
                                <input type="email" id="form3Example3cg" class="form-control" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example4cg">Password</label>
                                <input type="password" id="form3Example4cg" class="form-control" />
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-lg">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
