@extends('layouts.app')

@section('meta')
    <title>IIMM Cochin | Best courses for career</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Advance your career with IIMM Cochin’s professional courses in supply chain, logistics, and materials management. Choose from diploma, certification, and training programs."/>
    <meta name="keywords" content=" career oriented,"/>
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" Best Career-Oriented Courses" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content="We are providing industry-recognized short-term and long-term programs in supply chain and materials management at IIMM Cochin." />
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <a class="pop-up-link" href="assets/img/gallery/1.webp">
                        <img src="{{ asset('assets/img/gallery/1.webp') }}" class="img-fluid">
                        </a>
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM Seminar at Cochin Branch</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/10.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM Seminar at Mumbai Branch</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/13.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM Seminar at Cochin Branch</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/3.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">Certificate Ceremony</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/iimm-gallery-12.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM Seminar on Contract and Negotiation</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/15.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">Certificate Ceremony</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           	
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/exicutive-meeting.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM HOLDING EXECUTIVE COMMITTEE</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/event-14.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM Seminar on Contract and Negotiation</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/event-15.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM Seminar on Contract and Negotiation</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/iimm-3.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM Seminar on Contract and Negotiation</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/iimm-gallery.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM Seminar on Contract and Negotiation</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/iimm-gallery-11.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM Seminar on Contract and Negotiation</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/gallery-4.0.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/gallery-3.0.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery">
                    <div class="gallery-image">
                        <img src="{{ asset('assets/img/gallery/gallery-1.webp') }}" class="img-fluid">
                        <div class="gallery-content">
                            <div class="gallery-bx">
                                <h2 class="box-head">IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery -->
@endsection
