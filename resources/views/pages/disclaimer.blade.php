@extends('layouts.app')

@section('meta')
    <title>Career with IIMM Cochin | Supply Chain & Materials Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Build a successful career with IIMM Cochin through professional courses in supply chain, logistics, and materials management. Choose from short-term and long-term programs designed for industry success." />
    <meta name="keywords" content="Career Opportunities, Materials Management" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Career Opportunities with IIMM Cochin" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content=" Advance your career with IIMM Cochin’s diploma, certification, and training programs in supply chain and materials management." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
	<section class="main-banner" style="background-image: url({{ asset('assets/img/banner/logestic%20450-1.webp') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 text-center">
					<h2>Disclaimer</h2>
					<p>
						<a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> Disclaimer
					</p>
				</div>
			</div>
		</div>
	</section>
<!-- End Main Banner -->
<section class="disclaimer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="disclaimer">
                    <div class="disclaimer-head">
                        <h1>DISCLAIMER BY IIMM</h1>
                    </div>
                    <div class="disclaimer-content">
                        <p>IIMM provides space in this website for giving free Advertisment for Job Opportunities.  This is to help job seekers and our students. We do not charge anything from either employers or job seekers or students. This is purely a free service. We are not responsible or liable for any kind of misleading / bogus or any other illegal advertisements. Also we give space for sponsors for placing their advertisement. We are not responsible or liable for any such publicity. It is for the readers to be vigilant against any such illegalities or malpractices. Therefore, any enquiry on such matters shall not be entertained.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
