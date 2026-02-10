@extends('layouts.app')

@section('meta')
    <title>Career with IIMM Cochin | Supply Chain & Materials Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Build a successful career with IIMM Cochin through professional courses in supply chain, logistics, and materials management. Choose from short-term and long-term programs designed for industry success." />
    <meta name="keywords" content="Career Opportunities, Materials Management" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Career Opportunities with IIMM Cochin" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content=" Advance your career with IIMM Cochin’s diploma, certification, and training programs in supply chain and materials management." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
	<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/logestic%20450-5.webp') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h2>Blog</h2>
					<p>
						<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i>Blog
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Main Banner -->
	<section class="blog section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 col-md-12 col-12 wow fadeIn">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="blog-item">
								<div class="blog-image">
									<img src="{{ asset('assets/img/blog/warehouse.webp') }}" class="img-fluid" alt="image">
								</div>
								<div class="blog-content">
									<p>
										It's operations form a critical and integral part of modern supply management. IIMM firmly believes that strengthening these capabilities plays a pivotal role in making businesses sustainable, efficient, and competitive in today’s dynamic marketplace.
									</p>
									<div class="bmeta">
										<span>
											<i class="bx bx-time-five"></i> 27 Jan , 2025
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="blog-item">
								<div class="blog-image">
									<img src="{{ asset('assets/img/blog/logitics.webp') }}" class="img-fluid" alt="image">
								</div>
								<div class="blog-content">
									<p>
										Logistics offers varied career prospects, which blends problem-solving, international trade and technology. It provides stability, diverse roles, and growth opportunities across various industries. Logistics professionals manage supply chains and  making them vital to business success. With rising e-commerce and globalization, logistics careers are relevant, advanced, and provide rewarding opportunities worldwide.
									</p>
									<div class="bmeta">
										<span>
											<i class="bx bx-time-five"></i> 27 Jan , 2025
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="blog-item">
								<div class="blog-image">
									<img src="{{ asset('assets/img/blog/materials.webp') }}" class="img-fluid" alt="image">
								</div>
								<div class="blog-content">
									<p>
										Affiliation with International Federation of Purchasing And Supply Management.

Through our  affiliation with IFPSM, the world’s largest network of 2,50,000 purchasing and supply chain professionals, across 40 + countries, IIMM empowers its members with true global recognition.
									</p>
									<div class="bmeta">
										<span>
											<i class="bx bx-time-five"></i> 27 Jan , 2025
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-5 col-12 sidebar">



					<div class="widget popular-posts-widget wow fadeIn">
						<h3 class="widget-title">Popular Posts</h3>
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<li>

								<a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
									<div class="float-start ppimage">
										<img src="{{ asset('assets/img/blog/13.webp') }}" alt="image">
									</div>
									<div class="ppcontent">
										<h4>Is logistics a good career?</h4>
									</div>
								</a>
							</li>

							<li>
								<a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
									<div class="float-start ppimage">
										<img src="{{ asset('assets/img/blog/2.webp') }}" alt="image">
									</div>
									<div class="ppcontent">
										<h4>What is the main objective of a warehouse?</h4>
									</div>
								</a>
							</li>

							<li>
								<a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
									<div class="float-start ppimage">
										<img src="{{ asset('assets/img/blog/16.webp') }}" alt="image">
									</div>
									<div class="ppcontent">
										<h4>IIMM affiliation with IFPSM</h4>
									</div>
								</a>
							</li>
						</div>
					</div><!-- End widget -->

				</div><!-- End Col -->


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
			</div><!-- End Col -->


		</div>
	</section>
	<!-- End Blog -->
@endsection
