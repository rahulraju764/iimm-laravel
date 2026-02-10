@extends('layouts.app')

@section('meta')
    <title>Best SAP Certification Program | ERP course in Kerala</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Join Kerala’s most trusted ERP course and become SAP-certified. Learn key modules with professionals." />
    <meta name="keywords" content="SAP Supply chain Management, Certification courses in kerala" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SAP Supply Chain Management Certification | Top Courses in Kerala" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content="Learn from qualified professionals, and become an expert entrepreneur with IIMM." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
		<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/event-banner.webp') }};">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 text-center">
						<h2>Blog Details</h2>
						<p>
							<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> Blog Details
						</p>
					</div>
				</div>				
			</div>			
		</section>
		<!-- End Main Banner -->

		<!-- START Blog Grid -->
		<section class="blog-details section-padding">			
			<div class="container">	
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12 col-12 wow fadeIn">
						<div class="post-inner">
							<div class="post-image">
								<img src="{{ asset('assets/img/blog/blog.jpg') }}" class="img-fluid" alt="image">
							</div>	
							
							<div class="entry-content">
								<h2>IIMM affiliation with IFPSM</h2>
								<p>
									Affiliation with International Federation of Purchasing And Supply Management
								</p>
								<p>
								Through our  affiliation with IFPSM, the world’s largest network of 2,50,000 purchasing and supply chain professionals, across 40 + countries, IIMM empowers its members with true global recognition.
								</p>
								
																
							</div>
							
							
						</div><!-- End post-inner -->	

					</div><!-- END Col -->	
					
						
				</div>
			</div>			
		</section>
		<!-- END Blog Details -->
@endsection
