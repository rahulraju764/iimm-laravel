@extends('layouts.app')

@section('meta')
    <title>Upgrade Your Career with IIMM Cochin | Supply Chain & Materials Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Upgrade your career with IIMM Cochin’s professional courses in supply chain, logistics, and materials management. Choose from diplomas, certifications, and training programs designed for success." />
    <meta name="keywords" content="upgrade career, career development, Supply Chain" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Career Opportunities with IIMM Cochin" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content=" Take your career to the next level with IIMM Cochin’s industry-recognized courses in supply chain and materials management." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
    <section class="main-banner" style="background-image: url({{ asset('assets/img/banner/logestic%20450-6.webp') }};">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2>News</h2>
                    <p>
                        <a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i> News
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Banner -->

    <!-- Start career -->

    <section class="career-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-12">

                    <div class="leader-box">
                        <div class="leader-title">
                            <h2>Chairman's Message</h2>
                        </div>
                        <div class="leader-says">
                            <div class="leader-image">
                                <img src="{{ asset('assets/img/about/PV-Paulson.webp') }}" class="img-fluid">
                            </div>
                            <div class="leader-content">
                                <p>IIMM was established 50 years ago when there were few institutions in India to teach Materials Management. IIMM is governed by Management Professionals. IIMM is a charitable institution and it’s an organization with non profit objective.
                                </p>
                                <p class="leader-content">
                                 Therefore, fee of our two years AICTE approved PG courses are very reasonable and low. We sustain with the help of revenue from such PG and Short-term courses, corporate consultancy work, training of employees, officers, Managers, General Managers, Directors and CEOs of various industries. Seminars are conducted frequently to upgrade knowledge of Executives in the field of Management functions.</p>
                                 <p class="leader-content">
                                 Procurement is life line of a nation as Purchase in terms of value of nations varies from 10% to 25% of GDP. It’s profit facilitates development, generation of employment and boost economical activities leading to progress of the nation; and society at large.</p>
                                 <p class="leader-content">
                                    Therefore, SCM professionals should update, keep abreast about events happening around and perform exceptionally well so as to contribute to the bottom line of the organization.
                                 </p>
                                 <p class="leader-content">
                                    We have the best faculties with experience, qualification and knowledge which are best in the Industry.
                                 </p>
                                 <div class="leader">
                                    <div class="leader-name">
                                        <h3>P V Paulson</h3>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="latest-news-sec wow fadeIn">
                        <h2 class="adver-title">Latest News</h2>
                        <div class="news-content">
                            <div class="news-item">
                                <div class="news-item-text">
                                    <h5>Finance Minister weighs 3 PSUs insurers’ merger</h5>
                                    <p> The finance ministry is considering a proposal to merge three state-owned general insurance companies into a single entity as their financial health has been improved.</p>
                                        
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-item-text">
                                    <h5>India and Israel plan to roll out FTA in two phases</h5>
                                    <p> India and Israel are considering implementing their proposed free trade agreement (FTA) in two phases to ensure benefits for the trade community of both countries, as stated by Commerce Minister Piyush Goyal. He has inked ToR to launch negotiations for the agreement. It includes market access for goods by eliminating tariff and non-tariff barriers.</p>
                                        
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-item-text">
                                    <h5>Economists expect RBI to cut rates</h5>
                                    <p>RBI may cut rates as inflation eases. Lower Prices should allow support for growth amid Tariff Hit. It is expected that repo rate may be cut on 25 bps in December 2025 In that case the terminal repo rate should fall to 5.25%. Near zero CPI inflation has strengthened confidence that RBI can ease rates. A cut helps borrowers while savers may shift to markets as nominal returns fall due to any such cut.</p>
                                    <p>IMF says India’s economy will stay robust despite external headwinds as inflation remains well contained.</p>
                                       
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-item-text">
                                    <h5><i>Sources: The Times of India, Economic Times</i></h5>
                                       
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End career -->
@endsection
