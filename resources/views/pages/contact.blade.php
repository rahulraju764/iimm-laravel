@extends('layouts.app')

@section('meta')
    <title>Contact Us - IIMM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection

@section('content')
<!-- Start Main Banner -->
		<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/logestic%20450-4.webp') }});">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 text-center">
						<h2>Contact Us</h2>
						<p>
							<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> Contact Us
						</p>
					</div>
				</div>				
			</div>
		</section>
		<!-- End Home Banner -->

		<!-- Start Contact Us -->
		<section class="contact_us section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 wow fadeIn">
						<div class="contact_content">
							<img src="{{ asset('assets/img/contact/contact-image.webp') }}" alt="image">
							
						</div>
					</div> <!-- End Col -->
					
					<div class="col-xl-6 wow fadeIn">
						<div class="contact-form align-self-center">
							<div class="section-title">
								<span>Send us email</span>
							</div>
							
							<form method="post" action="contact.php">
								<div class="row">
									<div class="col-xl-6">
										<input type="text" placeholder="Enter Name" class="form-control form-box1">
									</div>	

									<div class="col-xl-6">
										<input type="email" placeholder="Enter Email" class="form-control form-box1">
									</div>	

									

									<div class="col-xl-12">
										<input type="text" placeholder="Enter Phone" class="form-control form-box1">
									</div>	
									<div class="col-xl-12 col-12">
										<select class="form-control form-box1">
											<option>Courses and other enquiries</option>
											<option>PG course enquiry</option>
											<option>Short-term course enquiry</option>
											<option>Seminar enquiry</option>
											<option>Other enquiry</option>
										</select>
									</div>
									<div class="col-12">
										<textarea placeholder="Enter Message" class="form-control form-t form-box1"></textarea>
									</div>
									
									<div class="col-12">
										<input type="submit" class="bg_btn bt" value="Send Message">
									</div>
								</div>
							</form>
						</div>
					</div> <!-- End Col -->	
					
				</div>
			</div>
		</section>
		<!-- End Contact Us -->

		<section class="contact-location">
			<div class="container">
				<div class="contact_info">
					<div class="row">
						<div class="col-xl-4 col-md-4 col-sm-12 col-12">
							<div class="contact_list">
								<div class="cicon">
									<i class='bx bx-phone-call'></i>
								</div>
								<div class="cinfo_content">
									<h4>For any Query?</h4>
									<p>
										<a href="tel:+914844619434">+91 94002 61874</a><br>
										<a href="tel:+914842203487">+91 484 2203487</a>
										
									</p>
								</div>
							</div>
						</div><!-- End contact_list -->

						<div class="col-xl-4 col-md-4">
							<div class="contact_list og-contact-list">
								<div class="cicon">
									<i class='bx bx-envelope' ></i>
								</div>
								<div class="cinfo_content">
									<h4>Email Us</h4>
									<p>
										<a href="mailto:iimmcochin@gmail.com">contact@iimmcochin.org</a>
										<a href="mailto:iimmcochin@gmail.com">iimmcochin@gmail.com</a><br>
										
									</p>
								</div>
							</div>		
						</div><!-- End contact_list -->	

						<div class="col-xl-4 col-md-4">
							<div class="contact_list">
								<div class="cicon">
									<i class='bx bx-map' ></i>
								</div>
								<div class="cinfo_content">
									<h4>Visiting Time</h4>
									<p>
									I I M M, GCDA Shopping Complex, Near Kadavanthra Metro Station.
									10:15 am to 4:30 pm
									</p>
								</div>
							</div>
						</div><!-- End contact_list -->
					</div>
				</div>
			</div>
		</section>
		
		<!-- Start google_map -->
		<section class="google_map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.595846046741!2d76.2983679!3d9.967543899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x98f7701607a4275%3A0xddc257dcd2e69dc2!2sIIMM%20COCHIN!5e0!3m2!1sen!2sin!4v1757542642628!5m2!1sen!2sin" width="100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>			
		</section>
		<!-- End google_map -->
@endsection
