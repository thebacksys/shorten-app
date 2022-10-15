@extends('guest.layouts.app')
@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Why {{ env('APP_NAME') }}?</h1>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Easy</h5>
                        <p class="card-text">ShortURL is easy and fast, enter the long link to get your shortened link</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Shortened</h5>
                        <p class="card-text">Use any link, no matter what size, ShortURL always shortens</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Secure</h5>
                        <p class="card-text">It is fast and secure, our service have HTTPS protocol and data encryption</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Statistics</h5>
                        <p class="card-text">Check the amount of clicks that your shortened url received</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Reliable</h5>
                        <p class="card-text">All links that try to disseminate spam, viruses and malware are deleted</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Devices</h5>
                        <p class="card-text">Compatible with smartphones, tablets and desktop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
