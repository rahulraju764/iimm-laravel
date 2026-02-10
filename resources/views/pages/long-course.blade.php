@extends('layouts.app')

@section('meta')
    <title> Long term Courses at IIMM Cochin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Join long term courses at IIMM Cochin to master supply chain, logistics, and materials management. Build expertise with structured programs designed for career growth" />
    <meta name="keywords" content="Long term Course, IIMM Cochin" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="2-year long term courses | IIMM" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content="Advance your career with IIMM’s 2-year long term courses in supply chain and materials management. Learn industry-relevant skills for lasting professional growth" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
	<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/event-banner.webp') }};">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h2>Course</h2>
					<p>
						<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> Long Term Course
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Main Banner -->

	<!-- Start Courses -->
	<section class="courses section-padding">
		<div class="container">
			<div class="row">


				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="single-course">
						<div class="course-img">
							<img src="{{ asset('assets/img/courses/course-1.webp') }}" alt="course-image">

						</div>

						<div class="course_content">
							<div class="crating">
								<a href="#">
									<i class="bx bxs-star"></i>
									<i class="bx bxs-star"></i>
									<i class="bx bxs-star"></i>
									<i class="bx bxs-star"></i>
									<i class="bx bxs-star"></i>
									<span>(21)</span>
								</a>
							</div>
							<h2><a href="{{ route('pgmm') }}">PGDMM (Post Graduate diploma in Marketing Management)</a></h2>

							<div class="cmeta">
								<div class="smeta">
									<i class='bx bx-user'></i>
									25 Students
								</div>

								<div class="smeta">
									<i class='bx bx-file'></i>
									15 Lessons
								</div>

								<div class="smeta">
									<i class='bx bx-time-five'></i>
									1.5 Hours
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- End Single Course -->

				<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
					<div class="single-course">
						<div class="course-img">
							<img src="{{ asset('assets/img/courses/course-2.webp') }}" alt="course-image">

						</div>

						<div class="course_content">
							<div class="crating">
								<a href="#">
									<i class="bx bxs-star"></i>
									<i class="bx bxs-star"></i>
									<i class="bx bxs-star"></i>
									<i class="bx bxs-star"></i>
									<i class="bx bxs-star"></i>
									<span>(21)</span>
								</a>
							</div>
							<h2><a href="{{ route('pgdl') }}">
									PGDL & SCM (Post Graduate dilpoma in logistics & supply chain Management)
								</a></h2>
							<div class="cmeta">
								<div class="smeta">
									<i class='bx bx-user'></i>
									25 Students
								</div>

								<div class="smeta">
									<i class='bx bx-file'></i>
									15 Lessons
								</div>

								<div class="smeta">
									<i class='bx bx-time-five'></i>
									1.5 Hours
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- End Single Course -->



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
	<!-- End Courses -->
@endsection
