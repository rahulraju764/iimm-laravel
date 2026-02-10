@extends('layouts.app')

@section('meta')
    <title>Events & seminar | IIMM Cochin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore IIMM Cochin’s latest events and seminars designed for professionals and students in supply chain, logistics, and materials management." />
    <meta name="keywords" content=" logistics chain, IIMM cochin" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Indian Institute of Materials Management | Programs & courses" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content="Stay updated with industry-focused events, workshops, and seminars at IIMM Cochin to enhance your skills and career growth." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
	<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/logestic%20450-2.webp') }};">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h2>Event</h2>
					<p>
						<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> Event
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Main Banner -->

	<!-- Start event -->
	<section class="event bstyle-2 section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="event-item">
						<div class="event-image">
							<img src="{{ asset('assets/img/event/event-1.webp') }}" alt="image" class="img-fluid">
						</div>

						<div class="event-content">


							<h3><a href="#">Seminar of success gathering of the students</a></h3>
							<div class="explor">
								<button>Explore More</button>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="event-item">
						<div class="event-image">
							<img src="{{ asset('assets/img/event/event-2.webp') }}" alt="image" class="img-fluid">
						</div>

						<div class="event-content">
							<h3><a href="#">Meet the team of IIMM sucess in Cochin</a></h3>
							<div class="explor">
								<button>Explore More</button>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="event-item">
						<div class="event-image">
							<img src="{{ asset('assets/img/event/event-3.webp') }}" alt="image" class="img-fluid">
						</div>
						<div class="event-content">

							<h3><a href="#">Well organised training programme conducted in Cochin</a></h3>

							<div class="explor">
								<button>Explore More</button>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="event-item">
						<div class="event-image">
							<img src="{{ asset('assets/img/event/event-4.webp') }}" alt="image">
						</div>

						<div class="event-content">
							<h3><a href="#">IIMM Mumbai had an event on Services Procurement.</a></h3>
							<div class="explor">
								<button>Explore More</button>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="event-item">
						<div class="event-image">
							<img src="{{ asset('assets/img/event/event-9.webp') }}" alt="image">
						</div>

						<div class="event-content">
							<h3><a href="#"></a>Chairman and Past Chairman with Officers of various Organisations</h3>
							<div class="explor">
								<button>Explore More</button>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="event-item">
						<div class="event-image">
							<img src="{{ asset('assets/img/event/event-3.0.webp') }}" alt="image">
						</div>

						<div class="event-content">
							<h3><a href="#">IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.</a></h3>

							<div class="explor">
								<button>Explore More</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="event-item">
						<div class="event-image">
							<img src="{{ asset('assets/img/event/event-6.0.webp') }}" alt="image">
						</div>

						<div class="event-content">
							<h3><a href="#">IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.</a></h3>

							<div class="explor">
								<button>Explore More</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="event-item">
						<div class="event-image">
							<img src="{{ asset('assets/img/event/event-7.0.webp') }}" alt="image">
						</div>

						<div class="event-content">
							<h3><a href="#">IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.</a></h3>

							<div class="explor">
								<button>Explore More</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="event-item">
						<div class="event-image">
							<img src="{{ asset('assets/img/event/event-5.0.webp') }}" alt="image">
						</div>

						<div class="event-content">
							<h3><a href="#">IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.</a></h3>

							<div class="explor">
								<button>Explore More</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="event-item">
						<div class="event-image">
							<img src="{{ asset('assets/img/event/event-4.0.webp') }}" alt="image">
						</div>

						<div class="event-content">
							<h3><a href="#">IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.</a></h3>

							<div class="explor">
								<button>Explore More</button>
							</div>
						</div>
					</div>
				</div>
				<!-- End Col -->

				<div class="col-12 text-center">
					<div class="post_pagination">
						<ul>
							<li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End event -->
@endsection
