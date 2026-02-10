@extends('layouts.app')

@section('meta')
    <title>programmes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IIMM is dedicated to the promotion of the profession of Materials Management, Supply Chain Management, Logistics Management, Procurement Management, Warehouse Management and other associated functional areas." />
    <meta name="keywords" content="IIMM Cochin, supply chain logistics, logistics management, material management" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Professional Courses in Supply Chain | Materials Management " />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="IIMM Cochin" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content=" Explore skill-based programs, networking, and industry recognition at IIMM Cochin. Empowering professionals since 1975." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/event-banner.webp') }};">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <h2>Programmes</h2>
                <p>
                    <a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i>Programmes
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Main Banner -->

 
<section class="programme-section">
    <div class="container">
        <h1>IIMM Programmes</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="programmes">
                    <div class="programme-images">
                        <img src="{{ asset('assets/img/programmes/programme-images.webp') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="programmes">
                    <div class="programme-images">
                        <img src="{{ asset('assets/img/programmes/programme-images-2.webp') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="programmes">
                    <div class="programme-images">
                        <img src="{{ asset('assets/img/programmes/programme-images-3.webp') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="programmes">
                    <div class="programme-images">
                        <img src="{{ asset('assets/img/programmes/progamme-images-4.webp') }}">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
