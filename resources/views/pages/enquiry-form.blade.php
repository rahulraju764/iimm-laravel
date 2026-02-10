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
						<h2>Enquiry Form</h2>
						<p>
							<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> enquiry form
						</p>
					</div>
				</div>				
			</div>
		</section>
		<!-- End Home Banner -->

		<!-- Start Contact Us -->
		<section class="Enquiry_us">
			<div class="container">
				<div class="row">
					
					<div class="col-xl-8 mx-auto wow fadeIn">
						<div class="Enquiry-form align-self-center">
							
							<form method="post" action="contact.php">
								<div class="row">
									<div class="col-xl-6 col-12">
										<input type="text" placeholder="Enter Name" class="form-control form-box1">
									</div>	

									<div class="col-xl-6 col-12">
										<input type="email" placeholder="Enter Email" class="form-control form-box1">
									</div>	
									<div class="col-xl-12 col-12">
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
										<input type="submit" class="bg_btn bt" value="Submit Now">
									</div>
								</div>
							</form>
						</div>
					</div> <!-- End Col -->	
					
				</div>
			</div>
		</section>
		<!-- End Contact Us -->
@endsection
