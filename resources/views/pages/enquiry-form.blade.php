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

						@if(session('success'))
							<div class="alert alert-success"
								style="background:#d4edda;color:#155724;padding:15px;border-radius:8px;margin-bottom:20px;">
								{{ session('success') }}
							</div>
						@endif

						@if($errors->any())
							<div class="alert alert-danger"
								style="background:#f8d7da;color:#721c24;padding:15px;border-radius:8px;margin-bottom:20px;">
								@foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach
							</div>
						@endif

						<form method="POST" action="{{ route('enquiry.submit') }}">
							@csrf
							<div class="row">
								<div class="col-xl-6 col-12">
									<input type="text" name="name" placeholder="Enter Name" class="form-control form-box1"
										value="{{ old('name') }}" required>
								</div>

								<div class="col-xl-6 col-12">
									<input type="email" name="email" placeholder="Enter Email"
										class="form-control form-box1" value="{{ old('email') }}" required>
								</div>
								<div class="col-xl-12 col-12">
									<input type="text" name="phone" placeholder="Enter Phone" class="form-control form-box1"
										value="{{ old('phone') }}">
								</div>
								<div class="col-xl-12 col-12">
									<select name="subject" class="form-control form-box1">
										<option value="Courses and other enquiries" {{ old('subject') == 'Courses and other enquiries' ? 'selected' : '' }}>Courses and other enquiries</option>
										<option value="PG course enquiry" {{ old('subject') == 'PG course enquiry' ? 'selected' : '' }}>PG course enquiry</option>
										<option value="Short-term course enquiry" {{ old('subject') == 'Short-term course enquiry' ? 'selected' : '' }}>Short-term course enquiry</option>
										<option value="Seminar enquiry" {{ old('subject') == 'Seminar enquiry' ? 'selected' : '' }}>Seminar enquiry</option>
										<option value="Other enquiry" {{ old('subject') == 'Other enquiry' ? 'selected' : '' }}>Other enquiry</option>
									</select>
								</div>
								<div class="col-12">
									<textarea name="message" placeholder="Enter Message"
										class="form-control form-t form-box1">{{ old('message') }}</textarea>
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