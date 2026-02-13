@extends('layouts.app')

@section('meta')
    <title>IIMM Cochin | Best courses for career</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content=" Advance your career with IIMM Cochin’s professional courses in supply chain, logistics, and materials management. Choose from diploma, certification, and training programs." />
    <meta name="keywords" content=" career oriented," />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" Best Career-Oriented Courses" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description"
        content="We are providing industry-recognized short-term and long-term programs in supply chain and materials management at IIMM Cochin." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
    <!-- Start Main Banner -->
    <section class="main-banner" style="background-image: url({{ asset('assets/img/banner/logestic%20450-1.webp') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2>Gallery</h2>
                    <p>
                        <a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> Gallery
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Banner -->
    <section class="gallery-section">
        <div class="container">
            <div class="row">
                @foreach($galleries as $gallery)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="gallery">
                            <div class="gallery-image">
                                <a class="pop-up-link" href="{{ asset('storage/' . $gallery->image) }}">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid"
                                        alt="{{ $gallery->title }}">
                                </a>
                                <div class="gallery-content">
                                    <div class="gallery-bx">
                                        <h2 class="box-head">{{ $gallery->title }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center">
                    <div class="post_pagination">
                        {{ $galleries->links('vendor.pagination.custom') }}
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- gallery -->
@endsection