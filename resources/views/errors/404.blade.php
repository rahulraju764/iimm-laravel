@extends('layouts.app')

@section('meta')
    <title>404 - Page Not Found | IIMM Cochin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@endsection

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-1">404</h1>
                    <h2>Page Not Found</h2>
                    <p class="lead">The page you are looking for might have been removed, had its name changed, or is
                        temporarily unavailable.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Go to Homepage</a>
                </div>
            </div>
        </div>
    </section>
@endsection