@extends('layouts.app')

@section('meta')
	<title>Career with IIMM Cochin | Supply Chain & Materials Management</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content=" Build a successful career with IIMM Cochin through professional courses in supply chain, logistics, and materials management. Choose from short-term and long-term programs designed for industry success." />
	<meta name="keywords" content="Career Opportunities, Materials Management" />
	<meta property="og:locale" content="en_IN" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Career Opportunities with IIMM Cochin" />
	<meta property="og:url" content="PAGE_URL" />
	<meta property="og:site_name" content="Indobritco" />
	<meta property="og:image" content="#" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="550" />
	<meta property="og:description"
		content=" Advance your career with IIMM Cochin’s diploma, certification, and training programs in supply chain and materials management." />
	<meta name="robots" content="index, follow" />
	<link rel="canonical" href="#">
@endsection

@section('content')
	<!-- Start Main Banner -->
	<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/logestic%20450-5.webp') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h2>Blog</h2>
					<p>
						<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i>Blog
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Main Banner -->
	<section class="blog section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 col-md-12 col-12 wow fadeIn">
					<div class="tab-content" id="v-pills-tabContent">
						@foreach($blogs as $blog)
							<div class="blog-item mb-4">
								<div class="blog-image">
									<img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid"
										alt="{{ $blog->title }}">
								</div>
								<div class="blog-content">
									<h3 class="mt-3"><a
											href="{{ route('blog-details', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
									</h3>
									<p>
										{{ Str::limit($blog->content, 200) }}
									</p>
									<div class="bmeta">
										<span>
											<i class="bx bx-time-five"></i> {{ $blog->published_at->format('d M, Y') }}
										</span>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>

				<div class="col-xl-4 col-lg-5 col-12 sidebar">

					<div class="widget popular-posts-widget wow fadeIn">
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
					</div><!-- End widget -->

				</div><!-- End Col -->


				<div class="col-12 text-center">
					<div class="post_pagination">
						{{ $blogs->links('pagination::bootstrap-5') }}
					</div>
				</div>
			</div><!-- End Col -->


		</div>
	</section>
	<!-- End Blog -->
@endsection