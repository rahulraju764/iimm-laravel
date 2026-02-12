@extends('layouts.app')

@section('meta')
	<title>Events & seminar | IIMM Cochin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Explore IIMM Cochin’s latest events and seminars designed for professionals and students in supply chain, logistics, and materials management." />
	<meta name="keywords" content=" logistics chain, IIMM cochin" />
	<meta property="og:locale" content="en_IN" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Indian Institute of Materials Management | Programs & courses" />
	<meta property="og:url" content="PAGE_URL" />
	<meta property="og:site_name" content="Indobritco" />
	<meta property="og:image" content="#" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="550" />
	<meta property="og:description"
		content="Stay updated with industry-focused events, workshops, and seminars at IIMM Cochin to enhance your skills and career growth." />
	<meta name="robots" content="index, follow" />
	<link rel="canonical" href="#">
@endsection

@section('content')
	<!-- Start Main Banner -->
	<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/logestic%20450-2.webp') }});">
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

				@foreach($events as $event)
					<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
						<div class="event-item">
							<div class="event-image">
								<img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="img-fluid">
							</div>

							<div class="event-content">
								<h3><a href="#">{{ $event->title }}</a></h3>
								<div class="explor">
									<button>Explore More</button>
								</div>
							</div>
						</div>
					</div><!-- End Col -->
				@endforeach

				<div class="col-12 text-center">
					<div class="post_pagination">
						{{ $events->links('vendor.pagination.custom') }}
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End event -->
@endsection