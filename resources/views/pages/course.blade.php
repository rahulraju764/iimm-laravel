@extends('layouts.app')

@section('meta')
    <title> The Best Institute for Materials Management Course | IIMM Cochin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Join IIMM Cochin, the leading institute for materials management, supply chain, and logistics courses in Kerala. Upgrade your career with industry-recognized certifications." />
    <meta name="keywords" content="Material management, supply chain management logistics" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="IIMM Cochin | Institute for material management course " />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content=" Learn from experts at IIMM Cochin. Explore PG Diplomas, certifications, and training programs in supply chain, logistics, and materials management" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
	<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/about-banner.webp') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h2>Courses</h2>
					<p>
						<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> About Us
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
                <div class="section-title text-center">
                    <span>Courses</span>
                    <h2>1) Most Popular Short-Term Courses</h2>
                </div>
                <div class="courses-slider owl-carousel">
                    <div class="courses-slider-box wow fadeIn">
                        <div class="single-course">
                            <div class="course-img">
                                <img src="{{ asset('assets/img/courses/logistics.webp') }}" alt="img-fluid">
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

                                

                            </div>
                        </div>
                    </div>
                    <!-- End Single Course -->

                    <div class="courses-slider-box wow fadeIn">
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
                                

                            </div>

                        </div>
                    </div>
                    <div class="courses-slider-box wow fadeIn">
                        <div class="single-course">
                            <div class="course-img">
                                <img src="{{ asset('assets/img/courses/10.webp') }}" alt="course-image" class="img-fluid">

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
                                <h2><a href="{{ route('sap') }}">
                                        SAP CERTIFICATION

                                    </a></h2>
                                

                            </div>

                        </div>
                    </div>
                    <div class="courses-slider-box wow fadeIn">
                        <div class="single-course">
                            <div class="course-img">
                                <img src="{{ asset('assets/img/courses/11.webp') }}" alt="course-image" class="img-fluid">

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
                                <h2><a href="{{ route('artificial') }}">
                                        ARTIFICIAL INTELLIGENCE – AI CERTIFICATION

                                    </a></h2>
                                

                            </div>

                        </div>
                    </div>
                    <!-- End Single Course -->
                </div>
                <div class="course-btn">
                    <a href="{{ route('application-form') }}">Apply now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses -->
    <section class="courses course-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title  text-center">
                        <span>Courses  - Govt of India AICTE Approved</span>
                        <h2>2)  Most Popular Long Term Courses</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="short-term-cs col-xl-4 col-md-6 col-12 wow fadeIn">
                    <div class="single-course ">
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
                            <h2><a href="{{ route('pgmm') }}">PGDMM (Post Graduate Diploma in Materials Management)</a></h2>

                            

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
                                    PGDL & SCM (Post Graduate Diploma in Logistics & Supply Chain Management)
                                </a></h2>
                            

                        </div>
                    </div>
                </div>

                <!-- End Single Course -->
            </div>
             <div class="course-btn">
                    <a href="{{ route('application-form') }}">Apply now</a>
                </div>
        </div>
    </section>
    <!-- End Courses -->
@endsection
