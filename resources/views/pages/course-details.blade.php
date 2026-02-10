@extends('layouts.app')

@section('meta')
    <title> Short term & Long term Courses | IIMM Cochin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Build your career with IIMM Cochin through short-term and long-term courses in supply chain, logistics, and materials management. Learn from experts and earn industry recognition." />
    <meta name="keywords" content=" short term course, long term course, SAP" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" Short & Long Term Courses | SAP" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content=" Explore professional certification, diploma, and training programs in materials management and supply chain at IIMM Cochin." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
		<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/about-banner.webp') }};">
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
							<img src="{{ asset('assets/img/courses/courseDetails.webp') }}" alt="image">
							<a href="https://www.youtube.com/watch?v=AnQ7XZHnxvk" class="scbtn vbtn"><svg fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512"><path fill="#000001" d="M67.5-.5h20c7.153 2.115 14.153 4.948 21 8.5a55665.69 55665.69 0 00346 197c26.897 18.751 32.063 42.251 15.5 70.5a138.27 138.27 0 01-14.5 13.5 49163.454 49163.454 0 01-360 219 171.862 171.862 0 00-10 3.5h-19c-20.173-5.684-31.673-19.017-34.5-40-.667-144-.667-288 0-432 3.637-20.794 15.47-34.127 35.5-40zm10 45a131.554 131.554 0 0114 6.5 83499.427 83499.427 0 00337 192 12.375 12.375 0 015 4.5 31765.454 31765.454 0 01-355 218 3.647 3.647 0 01-1.5-1c-.83-140.04-.663-280.04.5-420z" opacity=".978"/></svg></a>
						</div>
						
						<div class="scourse_meta">
							<div class="smeta">
								<img src="{{ asset('assets/img/instructor.jpg') }}" alt="author">
								<div class="smeta_text">
									<span>Instructor:</span>
									<p>
										<a href="#">Tony Stark</a>
									</p>
								</div>	
							</div>	

							<div class="smeta">
								<span>Category:</span>
								<p>
									Web Devilipment
								</p>			
							</div>	

							<div class="smeta">
								<span>Last Update:</span>
								<p>
									13 March, 2024
								</p>
		
							</div>	

							<div class="smeta">
								<span>Review:</span>
								<p>
									<a href="#">
										<span class="rev_icons">
											<i class="bx bxs-star"></i>
											<i class="bx bxs-star"></i>
											<i class="bx bxs-star"></i>
											<i class="bx bxs-star"></i>
											<i class="bx bxs-star"></i>
										</span>
										<span class="rev_content">
											(5.00)
										</span>
									</a>
								</p>
							</div> 
						</div><!-- End Meta -->	
						
						<h2 class="scourse-title">The Complete Web Devoloper Guideline 2024</h2>

						<nav class="cd_tab">
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-overview-tab" data-bs-toggle="tab" data-bs-target="#nav-overview" type="button" role="tab" aria-controls="nav-overview" aria-selected="true">Overview</button>
								<button class="nav-link" id="nav-curriculum-tab" data-bs-toggle="tab" data-bs-target="#nav-curriculum" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Curriculum</button>
								<button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Review</button>
								<button class="nav-link" id="nav-instructor-tab" data-bs-toggle="tab" data-bs-target="#nav-instructor" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">Instructor</button>
							</div>
						</nav>
						
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab" tabindex="0">
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
								</p>	

								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</p>

								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
								</p>
								
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
										24 Hours
									</span>
								</li>	

								<li>
									<span class="cside-label">
										<i class="fa-regular fa-file"></i> Lesson 
									</span>

									<span class="cside-value">
										15
									</span>
								</li>	

								<li>
									<span class="cside-label">
										<i class="fa-solid fa-graduation-cap"></i> Student’s 
									</span>

									<span class="cside-value">
										150
									</span>
								</li>	

								<li>
									<span class="cside-label">
										<i class="fa-solid fa-clapperboard"></i> Video 
									</span>

									<span class="cside-value">
										10 Hours
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

				<div class="related-courses">
					<h3 class="created-title">Courses You May Like</h3>
					
					<div class="row">
						<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
							<div class="single-course">
								<div class="course-img">
									<img src="{{ asset('assets/img/courses/course-1.webp') }}" alt="course image">
									
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
									<h2><a href="#">Photography Crash Course 
									for Photographer</a></h2>
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
									
									<div class="course_btm">
										<div class="cauthor">
											<a href="#">
												<img src="{{ asset('assets/img/review/1.jpg') }}" alt="">
												<span>Masum Billah</span>
											</a>
										</div>	

										<div class="ccategory">
											<a href="#">
												Photography
											</a>
										</div>
									</div>										
								</div>
							</div>
						</div>
						<!-- End Single Course -->
						
						<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
							<div class="single-course">
								<div class="course-img">
									<img src="{{ asset('assets/img/courses/course-2.webp') }}" alt="course image">
									
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
									<h2><a href="#">Financial Security Thinking and Principles Theory</a></h2>
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
									
									<div class="course_btm">
										<div class="cauthor">
											<a href="#">
												<img src="{{ asset('assets/img/review/2.jpg') }}" alt="">
												<span>Masum Billah</span>
											</a>
										</div>	

										<div class="ccategory">
											<a href="#">
												Security
											</a>
										</div>
									</div>										
								</div>
							</div>
						</div>
						<!-- End Single Course -->
						
						<div class="col-xl-4 col-md-6 col-12 wow fadeIn">
							<div class="single-course">
								<div class="course-img">
									<img src="{{ asset('assets/img/courses/course-3.webp') }}" alt="course image">
									
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
									<h2><a href="#">Professional Ceramic Moulding for Beginners</a></h2>
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
									
									<div class="course_btm">
										<div class="cauthor">
											<a href="#">
												<img src="{{ asset('assets/img/review/3.jpg') }}" alt="">
												<span>Masum Billah</span>
											</a>
										</div>	

										<div class="ccategory">
											<a href="#">
												Ceramic
											</a>
										</div>
									</div>										
								</div>
							</div>
						</div>
						<!-- End Single Course -->								
					</div>	
				</div>	
						
			</div>
		</section>
		<!-- End Courses -->
@endsection
