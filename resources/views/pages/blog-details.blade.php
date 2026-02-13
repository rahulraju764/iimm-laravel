@extends('layouts.app')

@section('meta')
	<title>{{ $blog->title }} | IIMM Cochin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Join Kerala’s most trusted ERP course and become SAP-certified. Learn key modules with professionals." />
	<meta name="keywords" content="SAP Supply chain Management, Certification courses in kerala" />
	<meta property="og:locale" content="en_IN" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="SAP Supply Chain Management Certification | Top Courses in Kerala" />
	<meta property="og:url" content="{{ route('blog-details', ['slug' => $blog->slug]) }}" />
	<meta property="og:site_name" content="Indobritco" />
	<meta property="og:image" content="{{ asset('storage/' . $blog->image) }}" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="550" />
	<meta property="og:description" content="{{ Str::limit(strip_tags($blog->content), 150) }}" />
	<meta name="robots" content="index, follow" />
	<link rel="canonical" href="{{ route('blog-details', ['slug' => $blog->slug]) }}">
@endsection

@section('content')
	<!-- Start Main Banner -->
	<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/event-banner.webp') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h2>Blog Details</h2>
					<p>
						<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i>
						{{ $blog->title }}
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
							<img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid" alt="{{ $blog->title }}">
						</div>

						<div class="entry-content">
							<h2>{{ $blog->title }}</h2>
							<p>
								{!! $blog->content !!}
							</p>
						</div>
					</div><!-- End post-inner -->
				</div><!-- END Col -->

				<!--<div class="col-xl-4 col-lg-4 col-md-12 col-12 sidebar wow fadeIn">
									<div class="widget popular-posts-widget">
										<h3 class="widget-title">Popular Posts</h3>
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											@foreach($popularPosts as $post)
												<li>
													<a class="nav-link" href="{{ route('blog-details', ['slug' => $post->slug]) }}">
														<div class="float-start ppimage">
															<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
														</div>
														<div class="ppcontent">
															<h4>{{ $post->title }}</h4>
														</div>
													</a>
												</li>
											@endforeach
										</div>
									</div>
								</div>-->

				<!-- END Col -->


			</div>
		</div>
	</section>
	<!-- END Blog Details -->
@endsection