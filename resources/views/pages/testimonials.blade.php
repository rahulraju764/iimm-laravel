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
	<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/about-banner.webp') }};">
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

	<!-- Start Review -->
<section class="review section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp">
                <div class="section-title text-center">
                    <span>Our Students' Review.</span>
                </div>
            </div>

            <div class="col-xl-12 wow fadeIn">
                <div class="review-slider owl-carousel">
                    <div class="review-item">
                        <div class="rimage">
                            <img src="{{ asset('assets/img/review/review-2.webp') }}" alt="review">
                        </div>

                        <div class="rev-content">
                            <h4>Sudheer V. R.</h4>
                            <div class="rev-designation-li">
                                <li>General Manager  </li>
                                <li> Procurement Contracts</li>
                                <li>Reliance Industries Limited,</li>
                                <li>Reliance Corporate Park, Mumbai.  </li>
                                

                            </div>
                            <p>I strongly recommend IIMM to aspiring procurement and supply chain professionals who seek a solid foundation for excellence, supported by a community dedicated to advancing professional standards in materials management nationwide.
                            </p>
                            <li>General Manager – Procurement Contracts Reliance Industries Limited</li>
                        </div>
                    </div><!-- End review-item -->

                    <div class="review-item">
                        <div class="rimage">
                            <img src="{{ asset('assets/img/review/review-3.webp') }}" alt="review">
                        </div>

                        <div class="rev-content">
                            <h4>Bhanupriya Bhatty</h4>
                            <div class="rev-designation-li">
                                  <li>Materials Controller @ Cambridge University Hospitals, UK(Sep 2024 to Sep 2025)</li>
                                <li>Inventory Management Supervisor @ University Hospitals Dorset, UK(Present)</li>
                            </div>
                            <p>I had the opportunity to complete a 6 month short course at (IIMM), Kadavanthra, Kochi. It was an excellent learning experience, the course content was well structured, The faculty demonstrated strong subject expertise, and the sessions provided valuable insights into materials management.
                            </p>
                          

                        </div>
                    </div><!-- End review-item -->

                    <div class="review-item">
                        <div class="rimage">
                            <img src="{{ asset('assets/img/review/review-1.webp') }}" alt="review">
                        </div>

                        <div class="rev-content">
                            <h4>Dr. A V  Shama Sundar</h4>
                            <div class="rev-designation-li">
                                <li>Sr.DGM (Retd)</li>
                                <li> L&T (CMB), Bangalore.</li>
                            </div>
                            <p>I have studied varous Management  course from IIMM.  IIMM is a good institute. The Courses and faculties are good. The Courses are worth doing.</p>

                        </div>
                    </div>
                    <!-- End review-item -->
                    <div class="review-item">
                        <div class="rimage">
                            <img src="{{ asset('assets/img/review/review-4.webp') }}" alt="review">
                        </div>

                        <div class="rev-content">
                            <h4>Rajesh Nair</h4>
                            <div class="rev-designation-li">
                                <li>Director (Purchase)</li>
                                <li>Grand Hyatt, Bolgatty, Cochin</li>
                            </div>
                            <p>I am so proud to introduce IIMM as it is a good professional institute having good SCM  Courses. I am fortunate having studied IIMM PG courses having Central Govt AICTE Approval. IIMM has All India presence and well known in the country and I recommend IIMM whoever pursuing Supply chain Management courses in India.</p>

                        </div>
                    </div>
                    <!-- End review-item -->
                    <div class="review-item">
                         <video width="100%" height="400" controls>
                            <source src="{{ asset('assets/img/video/iim.mp4') }}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                        </video>
                        <div class="rev-designation-li">
                            <li>Priya Sakaria  </li>
                            <li>Assistant Manager HOCL  </li>
                            <li>(IIMM PG Student)</li>

                        </div>
                    </div>
                    <!-- End review-item -->
                    <div class="review-item">
                         <video width="100%" height="400" controls>
                            <source src="{{ asset('assets/img/video/Vishnu-IIMM.mp4') }}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                        </video>
                        <div class="rev-designation-li">
                            <li>Mr Vishnu Surendran </li>
                            <li>Deputy Manager Hindustan Organic Chemicals Ltd. Cochin  </li>
                            <li>(IIMM PG Student)</li>

                        </div>
                    </div>
                    <!-- End review-item -->
                    <div class="review-item">
                         <video width="100%" height="400" controls>
                            <source src="{{ asset('assets/img/video/iim%20(2).mp4') }}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                        </video>
                        <div class="rev-designation-li">
                            <li>Senthilkumar Gounder</li>
                            <li>Manager-Materials</li>
                            <li>Apollo Hospital, Bangalore</li>

                        </div>
                    </div>
                    <!-- End review-item -->
                </div>
            </div>
        </div>
    </div>

    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</section>
@endsection
