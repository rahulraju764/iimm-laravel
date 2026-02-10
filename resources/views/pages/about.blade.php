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
					<h2>About Us</h2>
					<p>
						<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> About Us
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Main Banner -->

	<!-- Start About -->
	<!-- Start About -->
	<section class="about section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 align-self-center">
					<img src="{{ asset('assets/img/about/about.webp') }}" class="img-fluid">
				</div><!-- End Col -->

				<div class="col-xl-6 col-lg-6 align-self-center wow animated fadeIn">
					<div class="about-div">
						<div class="section-title about-title  wow animated fadeIn">
							<h2>IIMM - THE PIONEERS IN SCM EDUCATION IN INDIA</h2>
						</div>

						<p class="gn-abt mb-3  wow animated fadeIn">
							IIMM is dedicated to the promotion of the profession of Materials Management, Supply Chain Management, Logistics Management, Procurement Management, Warehouse Management and other associated functional areas. IIMM is the only professional body representing Materials and Supply Chain Management in India for over three decades that offers courses approved by AICTE, Govt. of India. The Institute has its Centre for Advanced Management Studies at Mumbai and Centre for Research in Materials Management (CRIMM) at Kolkata. IIMM has 54 branches across India, having Head Office at Navi Mumbai, Plot No. 102 & 104, Sector 15, Institutional Area, CBD Belapur, Navi Mumbai - 400 614.
						</p>
						<div class="single_about">
							<div class="aicon">
								<i class="fa fa-snowflake-o" aria-hidden="true"></i>

							</div>

							<div class="sbcontent">
								<h4>OUR VISION</h4>
								<p>
									To be an Excellent Educational Institution in SCM, Management Training & Consultancy in India.
								</p>
							</div>
							
						</div>
						<div class="single_about  wow animated fadeIn">
							<div class="aicon">
								<i class="fa fa-book" aria-hidden="true"></i>

							</div>

							<div class="sbcontent">
								<h4>OUR MISSION</h4>
								<p>
									To promote Professional Excellence in Management Functions; towards National Prosperity through sustainable development </p>
							</div>
						</div>
						<div class="how-to-members">
								<p>IIMM TEAM MEMBERS & How To Become  IIMM Members (Below)</p>
							</div>
					</div>

				</div><!-- End Col -->
			</div>
		</div>
	</section>
	<section class="iimmm-course">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="iimm-cts">
						<h3 class="text-center">IIMM</h3>
						<p class="text-center">IIMM is a national apex body for professionals in materials management and recognized by the Indian Society for Technical Education (ISTE) and the Ministry of Human Resource Development (MHRD). It conducts PG Courses approved by AICTE, Seminars, Conferences, in-house training, Consultancy and Research programmes. It does not have profit motive and governed by Charitable Trust.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="iimm-cts">
						<h3>Which Course is suitable for me?</h3>
						<p>A) If you have passed any Graduation, you can apply for PG Courses. Duration : 2 years with 4 Semesters </p>
						<p>(1) PGDMM - Post Graduate Diploma in Materials Management (2) PGDL & SCM - Post Graduate Diploma in Logistics & Supply Chain Management. </p>
						<p>You have to appear for All India Entrance Test conducted by IIMM and based on the score, will be admitted. </p>
						<p>B)If you have passed Plus 2 or ITI or Diploma, you can join our 6 months Short-Term Courses. These are skill development courses with certification.</p>
						<ul>
							<li>1. Advanced Procurement & Logistics Management</li>
							<li>2. Advanced Stores & Warehouse Management</li>
							<li>3. Certification in AI (Artificial Intelligence)</li>
							<li>4. SAP Certification</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End About -->
	<section class="imm-objectives">
		<div class="container">

			<div class="row">
				<div class="col-xl-6 col-lg-6 wow animated fadeIn">
					<div class="subcontent">
						<h4>OBJECTIVE</h4>
						<ul>
							<li>To secure a wider recognition and promote the importance of efficient Materials Management in commercial and industrial undertakings.</li>
							<li>To safeguard and elevate the professional status of individuals engaged in Materials Management Fraternity.</li>
							<li>To constantly impart advanced professional knowledge and thus improve the skill of the professionals engaged in the Materials Management functions.</li>
							<li>Propagate and promote among the members, strict adherence to IIMM code and ethics.</li>
						</ul>
					</div>

				</div>
				<div class="col-xl-6 col-lg-6 wow animated fadeIn">
					<div class="subcontent">
						<h4>CODE OF ETHICS</h4>
						<ul>
							<li>To consider first the total interest of one’s organization in all transactions without impairing the dignity and responsibility of one’s office.</li>
							<li>To buy without prejudice, seeking to obtain the maximum ultimate value for each rupee of expenditure.</li>
							<li>To subscribe and work for honesty and truth in buying and selling: to denounce all forms and manifestations of commercial bribery and to eschew anti-social practices.</li>
							<li>To accord a prompt and courteous reception so far as conditions will permit, to all who call upon legitimate business mission.</li>
							<li>To respect one’s obligations and those of one’s organization consistent with good business practices.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start Instructors -->
	<section class="instructors section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-md-12 wow fadeInUp">
					<div class="section-title text-center">
						<h2>IIMM TEAM MEMBERS</h2>
					</div>
				</div>

				<div class="col-xl-6 col-md-6 col-12 wow fadeIn mx-auto">
					<div class="single-instructor-vc">
						<div class="row">
							<div class="col-sm-6">
								<div class="inimage">
									<img src="{{ asset('assets/img/about/IIMM.webp') }}" class="img-fluid" width="200px" alt="">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="chairman-details">
									<div class="members-details">
										<div class="details-chairman">
											<h3><a href="#">P. V. PAULSON</a></h3>
											<span class="chairman-name">Chairman</span>
											<ul>
												<li>Ex Sr Manager </li>
												<li> The Times of India Group,</li>
												<li>Ex CEO, Director</li>
												<li> American Academy Business Strategist</li>
											</ul>

										</div>
									</div>
								</div>

							</div>
						</div>
					</div><!-- End instructor -->
				</div>
				<div class="row">
					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/Roby TA.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">ADV ROBY TA</a></h3>
								<span class="designation">Ex Vice President (South)</span>
								<ul>
									<li>High Court of Kerala,
										Consultant & Trainer</li>
								</ul>
							</div>
						</div>
					</div><!-- End instructor -->
					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/KS Shaji.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">K.S. SHAJI</a></h3>
								<span class="designation">Vice Chairman</span>
								<ul>
									<li>Ex DGM</li>
									<li>Traco Cable Ltd</li>
								</ul>

							</div>
						</div>
					</div><!-- End instructor -->

					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/Thomas George.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">THOMAS GEORGE</a></h3>
								<span class="designation">Hon secretary</span>
								<ul>
									<li>Ex Sales Head</li>
									<li>Materials Handling</li>
									<li>M/s Godrej</li>
								</ul>

							</div>
						</div>
					</div><!-- End instructor -->

					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/John Mathew.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">JOHN MATHEW</a></h3>
								<span class="designation">Treasurer</span>
								<ul>
									<li>Lead - Corporate Sustainability,</li>
									<li>Tata Consultancy Services Limited</li>
								</ul>

							</div>
						</div>
					</div><!-- End instructor -->





					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/oommen.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">OOMMEN JOHNSON</a></h3>
								<span class="designation">Founder member and past<br> Chairman</span>
								<ul>
									<li>Chief General Manager</li>
									<li>Materials,O/E/N India Ltd, <br>Retired.</li>
								</ul>

							</div>
						</div>
					</div><!-- End instructor -->





					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/Jacob Mathew.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">JACOB MATHEW</a></h3>
								<span class="designation">Course Coordinator</span>
								<ul>
									<li>Ex Chief Manager</li>
									<li>FACT
										Purchase Head, Skyline Builders Ltd,
										Consultant</li>
								</ul>

							</div>
						</div>
					</div><!-- End instructor -->
					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/Sekaran.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">SEKAREN MCC</a></h3>
								<span class="designation">Skill Development Director</span>
								<ul>
									<li>Ex Director, Lakshadweep Corporation</li>
								</ul>

							</div>
						</div>
					</div><!-- End instructor -->

					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/Dr Babu Jose.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">Dr BABU JOSE</a></h3>
								<span class="designation">General Manager</span>
								<ul>
									<li> (Production)</li>
									<li>FACT</li>
								</ul>

							</div>
						</div>
					</div><!-- End instructor -->


					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/Bijoy.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">ADV BIJOY SREEDHARAN</a></h3>
								<span class="designation">Advocate, kerala High Court</span>
								<ul>
									<li>Director, Poonkavanam
										Biomass Briquetts Pvt .Ltd</li>
								</ul>

							</div>
						</div>
					</div><!-- End instructor -->


					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/Mr Mahesh.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">MAHESH P</a></h3>
								<span class="designation">Consultant in Shipping, Ports & <br>Logistics</span>
								<ul>
									<li>Ex AP Moller </li>
									<li>Maersk Wallem</li>
									<li>Tata Consultancy Services</li>
								</ul>

							</div>
						</div>
					</div><!-- End instructor -->


					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/Johnvargheese.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#">JOHN VARGHESE</a></h3>
								<span class="designation">Ex AGM</span>
								<ul>
									<li>SFO Technologies Pvt Ltd
										& Ex Supply Chain Head
										Kohler India Pvt Ltd</li>
								</ul>									

							</div>
						</div>
					</div><!-- End instructor -->
					<div class="col-xl-3 col-md-6 col-12 wow fadeIn">
						<div class="single-instructor">
							<div class="inimage">
								<img src="{{ asset('assets/img/about/jagadhish.webp') }}" class="img-fluid" width="200px" alt="">
								<!-- <span class="sicon"><a href="#"><i class='bx bx-plus'></i></a></span> -->

							</div>

							<div class="inbottom">
								<h3><a href="#"> Prof. Dr. JAGATHY RAJ V.P</a></h3>
								<!--<p class="mem-qualification">B tech, MBA, Ph.D(IITKGP), PE_C.Eng(IISE), C.Eng(IEI), C.Eng(IETE)</p>-->

								<span class="designation">IIMM Life Member & Permanent Invitee</span>
								<ul>
									<li>Vice Chancellor</li>
									<li>Sree Narayana Guru Open University</li>
								</ul>

							</div>
						</div>
					</div><!-- End instructor -->

				</div>
			</div>
	</section>
	<!-- End Instructors -->
	<section class="membership">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="iimm-membership">
						<div class="membership-content">
							<h1>Become IIMM Member</h1>
							<div class="membership-content">
							
								<h2>1. Life Membership</h2> 
							<ul>
								<li>a. Fee Rs 12500 plus 18 per cent GST
								Eligibility: Age: Minimum 23, Qualification: University Degree or Diploma in Engg or a recognised course in Materials Management.</li>
								<li>b. Experience : 2 years</li>
								<li>c. Benefit: Life time membership</li>
								<li>d .No other subscription fee required for the life. 25 per cent discount on all our Seminars. Becoming part of network of prestigeous Management Professionals body in India, having More than 10000 members. Opportunity to participate in the governance of IIMM. Opportunity for Professional Growth. Free subscription of our monthly publications. Free participation of our programmes meant for members</li>
								<li>f.Documents Required: (a) Copy of Aadhar Card (b) Copy of Certificates (c) Two passport size photos (d) Duly filled form</li>
								</ul>
							</div>

							<div class="membership-content">
								<h2>2. Institutional Membership (For Organisations)
										Eligibility</h2>
								<ul>
								<li>
									  a. Having Paid up Capital of more than Rs 1 crore or an Annual Turnover of Rs 50 crores.
										Fee : Rs 7000
										(Entrance : Rs 1000, Subscription: Rs 6000)
										Membership to be renewed.

								</li>
								<li>b. Any firm having SSI Registration
										Fee : Rs 3000
										(Entrance : Rs 500 and Subscription : Rs 2500). To be renewed every year.
								</li>
								<li>c. Benefit for above all categories</li>
								<li>d. 25 per cent discount up to 2 participants for large institutional members from the same organisation and one participant will get above discount for SSI firms while attending our Seminars. Free subscription of our monthly publication. Opportunity for Professional Growth. Free participation of our programmes meant for our members.</li>
							</ul>
						</div>

							<div class="membership-content">
								<ul>
								<li> Other Category members:  Contact for details.</li>
								
							</ul>
							
						</div>
						<div class="member-apply">
						<a href="{{ route('life-time-form') }}">Apply Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
