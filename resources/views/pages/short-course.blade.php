@extends('layouts.app')

@section('meta')
    <title>Short-Term-Courses - IIMM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection

@section('content')
<!-- Start Main Banner -->
		<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/event-banner.webp') }});">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 text-center">
						<h2>Course</h2>
						<p>
							<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i>Short Term Course
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
							<img src="{{ asset('assets/img/courses/logistics.webp') }}" alt="course-image">

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
							<h2><a href="{{ route('logistics-course') }}">ADVANCED PROCUREMENT & LOGISTICS MANAGEMENT</a></h2>

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
							<img src="{{ asset('assets/img/courses/warehouse.webp') }}" alt="course-image">

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
							<h2><a href="{{ route('warehouse-course') }}">
									ADVANCED STORES & WAREHOUSE MANAGEMENT
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
