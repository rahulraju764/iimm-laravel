@extends('layouts.app')

@section('meta')
    <title>Logistics Courses| Supply Chain & Career Growth</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Learn logistics and supply chain management with IIMM Cochin. Our diploma and certification programs help you gain practical skills and advance your career in logistics." />
    <meta name="keywords" content="logistics, supply chain logistics, logistics management" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Logistics Programs | IIMM Cochin" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content="Explore logistics-focused courses at IIMM Cochin. Build expertise in supply chain and logistics management to upgrade your career." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
	<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/about-banner.webp') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h2>Course Details</h2>
					<p>
						<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> Course Details
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Main Banner -->

	<!-- Start Courses -->
	<section class="courses-details section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 wow fadeIn">
					<div class="scourse_image">
						<img src="{{ asset('assets/img/course-details/logic.webp') }}" alt="image">
						
					</div>

				

					<h2 class="scourse-title">ADVANCED PROCUREMENT & LOGISTICS MANAGEMENT</h2>


					

					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab" tabindex="0">
							<p>
								The Advanced Procurement & Logistics Management course offers a clear understanding of modern purchasing and logistics. It begins with the basics of purchase management and organization, followed by key topics like cost analysis, legal aspects, and vendor selection. It covers international purchasing, ERP systems (like SAP), and e-commerce tools used in procurement today. The course also includes project and public procurement, along with essential skills in logistics planning. In conclusion, it addresses conflict resolution within organizations, helping professionals manage challenges and improve efficiency in procurement and logistics roles.
							</p>
							<p class="warehouse-content">Students having good attendance, performance and marks in the Examination will be selected for Internship in the Industry.</p>
							<ul class="logicstic">
								<li>1. Introduction to Purchase Management & Purchase Organisation
								</li>
								<li>2. Purchase Principles, Cost, Price Analysis & Advanced Practice
								</li>
								<li>3. Legal Aspects of Purchasing
								</li>
								<li>4. Scientific Procurement, Vendor Selection & Value Analysis
								</li>
								<li>5. International Purchasing
								</li>
								<li>6. ERP – SAP etc. & E-Commerce
								</li>
								<li>7. Project & Public Procurement
								</li>
								<li>8. Logistics Management
								</li>
								<li>9. Green Purchasing, Reverse Logistics & Disposal Management
								</li>
								<li>10. Organisational Conflict & Resolution
								</li>
							</ul>

							<!-- <div class="row pt-2">
									<div class="col-xl-6 align-self-center">
										<img src="{{ asset('assets/img/courses/cd2.jpg') }}" class="pb-3" alt="image">
									</div>	

									<div class="col-xl-6 align-self-center">
										<h3>Why you want to learn PHP ?</h3>
										<ul>
											<li>Neque sodales ut etiam sit auctor</li>
											<li>Tristique nulla aliquet enim urna.</li>
											<li>Nam libero justo laoreet sit amet..</li>
											<li>Tempus imperdiet nulla malesuada .</li>
											<li>Perspiciatis unde omnis iste natus.</li>
											<li>consequat duis aute reprehenderit .</li>
											<li>Suspendisse ultrices gravida Risus. </li>
										</ul>
									</div>
								</div> -->
						</div>

						<div class="tab-pane fade" id="nav-curriculum" role="tabpanel" aria-labelledby="nav-curriculum-tab" tabindex="0">
							<div class="cd_curriculum">
								<h3>Starting Beginners Level Course</h3>
								<ul>
									<li><span><a href="#"><i class='bx bx-play-circle'></i> Introduction of Editing</a></span> <span class="cd_cur_right"><a href="#" class="cbtn">Preview</a>10 Minutes</span></li>
									<li><span><a href="#"><i class='bx bx-play-circle'></i> Overview of Editing</a></span> <span class="cd_cur_right"><a href="#" class="cbtn">Preview</a>8 Minutes</span></li>
									<li><span><a href="#"><i class='bx bx-folder'></i> Basic Editing Technology</a></span> <span class="cd_cur_right"><a href="#" class="cbtn">Preview</a>7 Minutes</span></li>
									<li><span><i class='bx bx-bulb'></i> Quiz</a></span> <span class="cd_cur_right"><a href="#" class="cbtn">Preview</a> 5 Minutes</span></li>
									<li><span><a href="#"><i class='bx bx-play-circle'></i> Introduction of Editing</a></span> <span class="cd_cur_right"><a href="#" class="cbtn">Preview</a>10 Minutes</span></li>
									<li><span><a href="#"><i class='bx bx-bulb'></i> Overview of Editing</a></span> <span class="cd_cur_right"><a href="#" class="cbtn">Preview</a>30 Minutes</span></li>
								</ul>
							</div>
						</div>

						<div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
							<div class="cd_rating">
								<h3>Student's Reviews</h3>
								<div class="cd_rating_top">
									<div class="cdr_rate_summary">
										<h1>5.0</h1>
										<span class="cdr_rating">
											<i class="bx bxs-star"></i>
											<i class="bx bxs-star"></i>
											<i class="bx bxs-star"></i>
											<i class="bx bxs-star"></i>
											<i class="bx bxs-star"></i>
										</span>

										<p>Total 3 Rating</p>
									</div>

									<div class="cdr_rate_number">
										<ul>
											<li>
												<span class="cdr_rate_star">5</span>
												<span class="cdr_rate_value">
													<span class="rating_width" style="width: 100%;"></span>
													<span class="cdr_rate_count">3 Rating</span>
												</span>

											</li>

											<li>
												<span class="cdr_rate_star">4</span>
												<span class="cdr_rate_value">
													<span class="rating_width" style="width: 80%;"></span>
													<span class="cdr_rate_count">2 Rating</span>
												</span>
											</li>

											<li>
												<span class="cdr_rate_star">3</span>
												<span class="cdr_rate_value">
													<span class="rating_width" style="width: 60%;"></span>
													<span class="cdr_rate_count">1 Rating</span>
												</span>
											</li>

											<li>
												<span class="cdr_rate_star">2</span>
												<span class="cdr_rate_value">
													<span class="rating_width" style="width: 40%;"></span>
													<span class="cdr_rate_count">2 Rating</span>
												</span>
											</li>

											<li>
												<span class="cdr_rate_star">1</span>
												<span class="cdr_rate_value">
													<span class="rating_width" style="width: 20%;"></span>
													<span class="cdr_rate_count">2 Rating</span>
												</span>
											</li>
										</ul>
									</div>
								</div>

								<div class="rating_list">
									<div class="rating_item">
										<div class="rating_item_avatar">
											<img src="{{ asset('assets/img/review/1.jpg') }}" alt="avatar">
											<div class="rava_conent">
												<h3>Robert Max</h3>
												<p>Outstanding Course </p>
												<span class="rating_item_ricon">
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
												</span>
											</div>
										</div>

										<div class="rating_item_content">
											<p>
												" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it "
											</p>
										</div>
									</div><!-- End Rating Item -->

									<div class="rating_item">
										<div class="rating_item_avatar">
											<img src="{{ asset('assets/img/review/2.jpg') }}" alt="avatar">
											<div class="rava_conent">
												<h3>Robert Max</h3>
												<p>Outstanding Course </p>
												<span class="rating_item_ricon">
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
												</span>
											</div>
										</div>

										<div class="rating_item_content">
											<p>
												" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it "
											</p>
										</div>
									</div><!-- End Rating Item -->

									<div class="rating_item">
										<div class="rating_item_avatar">
											<img src="{{ asset('assets/img/review/3.jpg') }}" alt="avatar">
											<div class="rava_conent">
												<h3>Robert Max</h3>
												<p>Outstanding Course </p>
												<span class="rating_item_ricon">
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
													<i class="bx bxs-star"></i>
												</span>
											</div>
										</div>

										<div class="rating_item_content">
											<p>
												" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it "
											</p>
										</div>
									</div><!-- End Rating Item -->
								</div><!-- End Rating List -->

								<div class="cdr_review_form">
									<h3>Add a Review</h3>
									<div class="review_form_ricon">
										<i class="bx bxs-star"></i>
										<i class="bx bxs-star"></i>
										<i class="bx bxs-star"></i>
										<i class="bx bxs-star"></i>
										<i class="bx bxs-star"></i>
									</div>

									<form action="#" class="rating_form">
										<textarea name="rating_form" placeholder="Write a Your Rating">
											</textarea><br>
										<button type="submit" class="bg_btn bt">
											Submit Review
										</button>
									</form>
								</div>

							</div>
						</div>

						<div class="tab-pane fade" id="nav-instructor" role="tabpanel" aria-labelledby="nav-instructor-tab" tabindex="0">
							<div class="cd_instructor">
								<div class="cdin_image">
									<img src="{{ asset('assets/img/instructor.jpg') }}" alt="">
									<ul>
										<li>
											<a href="#"><i class="bx bxl-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="bx bxl-linkedin"></i></a>
										</li>
										<li>
											<a href="#"><i class="bx bxl-youtube"></i></a>
										</li>
									</ul>
								</div>

								<div class="cdin_content">
									<h4><a href="#">Ekram Hossain</a></h4>
									<span>Web Designer</span>
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
									</p>
									<div class="cdin_meta">
										<div class="cdin_meta_item"><i class="bx bx-user"></i> 25+ Students</div>
										<div class="cdin_meta_item"><i class='bx bxs-folder-open'></i> 32 Courses</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-xl-4 wow fadeIn">
					<div class="course-sidebar">
						<h3>Course Features</h3>
						<ul class="scourse_list">
							<li>
								<span class="cside-label">
									<i class="fa-regular fa-clock"></i> Duration
								</span>

								<span class="cside-value">
									6 Months
								</span>
							</li>

							

							<li>
								<span class="cside-label">
									<i class="fa-solid fa-graduation-cap"></i> Student’s
								</span>

								<span class="cside-value">
									100
								</span>
							</li>

							

							<li>
								<span class="cside-label">
									<i class="fa-solid fa-chart-line"></i> Skill Level
								</span>

								<span class="cside-value">
									Advanced
								</span>
							</li>

							<li>
								<span class="cside-label">
									<i class="fa-solid fa-language"></i> Language
								</span>

								<span class="cside-value">
									English
								</span>
							</li>
						</ul>


						<div class="text-center">
							<a href="{{ route('contact') }}" class="bg_btn bt">Contact Now</a>
						</div>

					</div>
				</div>
			</div>



		</div>
		</div>

		</div>
	</section>
	<!-- End Courses -->
@endsection
