@extends('layouts.app')

@section('meta')
    <title>IIMM Cochin | Supply Chain & Materials Management Courses in Kerala</title>
    <meta name="description"
        content="IIMM is dedicated to the promotion of the profession of Materials Management, Supply Chain Management, Logistics Management, Procurement Management, Warehouse Management and other associated functional areas." />
    <meta name="keywords" content="IIMM Cochin, supply chain logistics, logistics management, material management" />
    <link rel="canonical" href="#">
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Professional Courses in Supply Chain | Materials Management " />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="IIMM Cochin" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description"
        content=" Explore skill-based programs, networking, and industry recognition at IIMM Cochin. Empowering professionals since 1975." />
    <meta name="robots" content="index, follow" />
@endsection

@section('preloader')
@endsection

@section('content')
    <!-- Start Home Banner -->
    <section class="home-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="banner-content">
                        <div class="banner-content-inner">
                            <span class="subtitle">IIMM-Indian Institute of Materials Management</span>
                            <h2 class="title">Creating a Better Future through Education</h2>
                            <div class="bbtns">
                                <a href="#" class="bg_btn bt">All Courses</a>
                                <a href="{{ route('contact') }}" class="wborder_btn bt">Contact Us</a>
                            </div>
                            <div class="sinfo">
                                <span>50k + Happy Students</span>
                            </div>
                            <div class="iimm-client-slider">
                                <h2>Officials Participated IIMM SEMINARS </h2>
                                <div class="iim-head">
                                    <h1>Executives and Top officials of many organisations often attend IIMM Management
                                        Seminars / Trainings. Some of the organizations are:</h1>
                                </div>
                                <div class="top-iimm-client owl-carousel">
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/shipyard.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/petronut.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/appollo.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/metro.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/hal.webp') }}" class="img-fluid">
                                    </div>

                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/aglog.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/army.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/crown-plaza.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/syntitye.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/sud.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/grand.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/reanikochi.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/cci.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/mm.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/kitex.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/dp-world.webp') }}" class="img-fluid">
                                    </div>
                                    <div class="iim-image">
                                        <img src="{{ asset('assets/img/slider/apollo.webp') }}" class="img-fluid">
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="sponser-slide">
                        <div class="banner_img">
                            <div class="sponser-content">
                                <h2>Sponsors</h2>
                            </div>
                            <div class="sponser-carousel owl-carousel owl-theme">
                                <div class="banner_img_inner moeffect">
                                    <img src="{{ asset('assets/img/sponcer/sponcer-1.webp') }}" alt="Banner Image">
                                </div>
                                <div class="banner_img_inner moeffect">
                                    <img src="{{ asset('assets/img/sponcer/sponcer-2.webp') }}" alt="Banner Image">

                                </div>
                                <div class="banner_img_inner moeffect">
                                    <img src="{{ asset('assets/img/sponcer/sponcer-3.webp') }}" alt="Banner Image">
                                </div>
                                <div class="banner_img_inner moeffect">
                                    <img src="{{ asset('assets/img/sponcer/mo-effect.webp') }}" alt="Banner Image">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>




        <div class="bg_shapes moeffect">
            <div class="bshape1 eitem" value="1">
                <svg fill="none" viewBox="0 0 188 188">
                    <mask id="a" fill="#fff">
                        <path d="M188 94a94.003 94.003 0 01-75.662 92.194 94.001 94.001 0 1148.13-158.662L94 94h94z" />
                    </mask>
                    <path stroke="#fff" stroke-dasharray="18 18" stroke-opacity=".19" stroke-width="8"
                        d="M188 94a94.003 94.003 0 01-75.662 92.194 94.001 94.001 0 1148.13-158.662L94 94h94z"
                        mask="url(#a)" />
                </svg>
            </div>

            <div class="bshape2 eitem" value="2.5">
                <svg fill="none" viewBox="0 0 45 43">
                    <path fill="#fff" fill-opacity=".14"
                        d="M20.598 1.854c.599-1.843 3.205-1.843 3.804 0l3.823 11.766a2 2 0 001.902 1.382H42.5c1.937 0 2.743 2.48 1.175 3.618l-10.008 7.272a2 2 0 00-.727 2.236l3.823 11.766c.599 1.843-1.51 3.375-3.078 2.236l-10.008-7.272a2 2 0 00-2.352 0L11.316 42.13c-1.568 1.139-3.677-.394-3.078-2.236l3.823-11.766a2 2 0 00-.726-2.236L1.325 18.62c-1.567-1.139-.761-3.618 1.176-3.618h12.372a2 2 0 001.902-1.382l3.823-11.766z" />
                    <path stroke="#fff" stroke-opacity=".13" stroke-width="2"
                        d="M21.549 2.163c.3-.921 1.603-.921 1.902 0l3.823 11.766a3 3 0 002.853 2.073H42.5c.968 0 1.371 1.24.587 1.81l-10.008 7.27a3 3 0 00-1.09 3.355l3.823 11.766c.3.921-.755 1.687-1.539 1.118l-10.009-7.272a3 3 0 00-3.526 0l-10.01 7.272c-.783.57-1.837-.197-1.538-1.118l3.823-11.766a3 3 0 00-1.09-3.354L1.914 17.81c-.784-.57-.381-1.809.587-1.809h12.372a3 3 0 002.853-2.073l3.823-11.766z" />
                </svg>
            </div>

            <div class="bshape3 eitem" value="-1.5">
                <svg fill="none" viewBox="0 0 57 57">
                    <path fill="#fff" fill-opacity=".2"
                        d="M46.865.174c-.345.122-.846.367-1.113.557-.268.19-9.479 9.334-20.46 20.316l-19.96 19.97-2.629 6.393C1.255 50.92.041 53.993.02 54.227-.171 55.597 1.089 57 2.514 57c.479 0 .902-.167 7.496-2.885l5.947-2.45 20.038-20.026c11.015-11.016 20.17-20.25 20.349-20.527.768-1.215.869-2.785.234-4.055-.279-.557-.836-1.18-3.208-3.542C50.964 1.121 50.396.608 49.85.363c-.868-.4-2.105-.479-2.985-.19zm-1.693 11.628c2.228 2.228 4.044 4.088 4.044 4.155 0 .144-2.139 2.283-2.284 2.283-.056 0-1.949-1.838-4.199-4.088l-4.099-4.099 1.136-1.136c.635-.635 1.192-1.147 1.26-1.147.055 0 1.926 1.816 4.142 4.032zm-5.87 1.259l1.727 1.726-7.106 7.106c-7.685 7.696-7.429 7.384-6.816 7.986.601.613.29.869 7.986-6.817l7.106-7.106 1.726 1.727c.947.947 1.726 1.77 1.726 1.838 0 .055-6.783 6.894-15.07 15.18l-15.058 15.06-1.782-1.783-1.782-1.782 7.106-7.106c7.685-7.696 7.429-7.384 6.816-7.986-.601-.612-.29-.869-7.986 6.817l-7.106 7.106-1.782-1.782-1.782-1.782 15.059-15.06c8.287-8.286 15.125-15.069 15.18-15.069.068 0 .892.78 1.839 1.727zM10.178 46.864c2.072 2.072 3.753 3.799 3.731 3.82-.09.068-6.16 2.551-6.382 2.618-.156.045-.68-.412-2.038-1.77-1.003-1.003-1.827-1.872-1.827-1.939 0-.156 2.606-6.516 2.673-6.516.034 0 1.76 1.705 3.843 3.787z" />
                </svg>
            </div>

            <div class="bshape4 eitem" value="2">
                <svg fill="none" viewBox="0 0 146 91">
                    <path stroke="#fff" stroke-opacity=".25" stroke-width="3"
                        d="M1 88.974c57.757 1.132 10.964-35.222 26.06-46.86 15.097-11.638 32.815 14.148 53.859 8.381 21.044-5.766-12.378-39.299 12.998-47.543C119.292-5.29 116.734 43.06 145 29.644" />
                </svg>
            </div>
        </div>

        <div class="tpshape">
            <svg fill="none" viewBox="0 0 147 297">
                <path fill-rule="evenodd" stroke="#fff" stroke-opacity=".05" stroke-width="7"
                    d="M83.755-55.798c33.904 36.979 10.442 93.21 19.058 142.218 9.073 51.606 59.065 103.667 31.95 147.908-27.292 44.529-94.427 31.803-146.613 39.177-53.094 7.503-112.908 37.432-155.043 3.451-41.916-33.803-18.758-98.921-28.438-151.421-10.342-56.091-57.129-112.778-29.34-161.951 28.69-50.767 97.899-59.728 156.706-63.423 54.33-3.414 114.657 3.619 151.72 44.041z"
                    clip-rule="evenodd" />
            </svg>
        </div>



        <div class="bwavehape">
            <svg fill="none" viewBox="0 0 1497 333">
                <path stroke="url(#paint0_linear_3203_231)" stroke-opacity=".05" stroke-width="20"
                    d="M5 108.243l40.92-22.41C88.08 63.42 169.92 18.598 253 11.127c83.08-7.47 164.92 22.411 248 82.174 83.08 59.764 164.92 149.408 248 194.231 83.08 44.822 164.92 44.822 248 7.47 83.08-37.352 164.92-112.056 248-134.467 83.08-22.411 164.92 7.47 207.08 22.411l40.92 14.941" />
                <defs>
                    <linearGradient id="paint0_linear_3203_231" x1="749" x2="749" y1="10" y2="422"
                        gradientUnits="userSpaceOnUse">
                        <stop offset=".182" stop-color="#0D5FF9" />
                        <stop offset=".844" stop-color="#fff" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
    <!-- End Home Banner -->


    <!-- Start Courses -->
    <section class="courses section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <span>Courses</span>
                    <h2>1) Most Popular Short-Term Courses</h2>
                </div>
                <div class="courses-slider owl-carousel">
                    <div class="courses-slider-box wow fadeIn">
                        <div class="single-course">
                            <div class="course-img">
                                <img src="{{ asset('assets/img/courses/logistics.webp') }}" alt="img-fluid">
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
                                <h2><a href="{{ route('logistics-course') }}">ADVANCED PROCUREMENT & LOGISTICS
                                        MANAGEMENT</a></h2>



                            </div>
                        </div>
                    </div>
                    <!-- End Single Course -->

                    <div class="courses-slider-box wow fadeIn">
                        <div class="single-course">
                            <div class="course-img">
                                <img src="{{ asset('assets/img/courses/warehouse.webp') }}" alt="course-image">

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
                                <h2><a href="{{ route('warehouse-course') }}">
                                        ADVANCED STORES & WAREHOUSE MANAGEMENT
                                    </a></h2>


                            </div>

                        </div>
                    </div>
                    <div class="courses-slider-box wow fadeIn">
                        <div class="single-course">
                            <div class="course-img">
                                <img src="{{ asset('assets/img/courses/10.webp') }}" alt="course-image" class="img-fluid">

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
                                <h2><a href="{{ route('warehouse-course') }}">
                                        SAP CERTIFICATION

                                    </a></h2>


                            </div>

                        </div>
                    </div>
                    <div class="courses-slider-box wow fadeIn">
                        <div class="single-course">
                            <div class="course-img">
                                <img src="{{ asset('assets/img/courses/11.webp') }}" alt="course-image" class="img-fluid">

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
                                <h2><a href="{{ route('artificial') }}">
                                        ARTIFICIAL INTELLIGENCE – AI CERTIFICATION

                                    </a></h2>


                            </div>

                        </div>
                    </div>
                    <!-- End Single Course -->
                </div>
                <div class="col-xl-12 col-12 wow fadeIn">
                    <div class="single-course-1">

                        <div class="course_caption">

                            <h2>
                                Many of our students are working professionals in various organisations. Our courses have
                                helped students to progress their career with well placed jobs. We have association with
                                IFPSM the international association. Students who have passed our courses are working in
                                organisations such as Reliance Industries, FACT, Apollo Tyres, VKC Group, HAL and many other
                                organisations.

                            </h2>


                        </div>

                    </div>
                </div>
                <!-- End Single Course -->
            </div>
        </div>
    </section>
    <!-- End Courses -->

    <!-- newss -->
    <div class="laitest-news">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="jobs-box">
                        <div class="jobs-title">
                            <h2>Job Opportunities</h2>
                        </div>
                        <div class="job-opt-iimm owl-carousel owl-theme">
                            <div class="jobs-list-item">
                                <a href="">
                                    <p>Wanted

                                        Trainees for a reputed Company in Ernakulam District

                                        Qualification : Any undergraduate degree

                                        Stipend : Rs 15000 pm

                                        Those who have studied our short-term Course and looking for job also may apply.
                                        Please send us your CV Immediately.
                                        Email: iimmcochin@gmail.com

                                        IIMM
                                        Cochin </p>
                                    <li>Click here</li>
                                </a>
                            </div>
                            <div class="jobs-list-item">
                                <a href="">
                                    <p>English, Chemistry, Economics, Geography, History, Mathematics and Physics (PG with
                                        B.Ed), Legal Studies (LLM) &amp; Physical Education (M.P. Ed) and Kindergarten
                                        Teachers with NTTC / Montessori /D.EI. Ed. Interested Candidates may send bio data
                                        to: hrjeevass@gmail.com with a recent photograph within14 days.
                                    </p>
                                    <li>Click here</li>
                                </a>
                            </div>
                            <div class="jobs-list-item">
                                <a href="">
                                    <p>KRIBHCO, A-10, Sector 1, Noida, UP invites applications for the following positions
                                        <br> a) General Manager (Production) <br> b) JGM /DGM/CM (Production)
                                        <br> c) Deputy Manager (MS) And various other positions in different disciplines.
                                        For details log on to website https://www.kribhco.net under Career section
                                    </p>
                                    <li>Click here</li>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="events-header">
                        <div class="events-title">
                            <h2>Events</h2>
                        </div>
                        <div class="row">
                            <!-- Card 2 -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="events-card">
                                    <img src="{{ asset('assets/img/event/2.webp') }}" alt="IIMM Conference"
                                        class="img-fluid">
                                    <h3 class="event-h3">IIMM Southern Regional Conference</h3>
                                </div>
                            </div>
                            <!-- Card 1 -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="events-card">
                                    <img src="{{ asset('assets/img/event/event-2.webp') }}" alt="IIMM Group Photo"
                                        class="img-fluid">
                                    <h3 class="event-h3">IIMM Seminar's group photo</h3>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- News Cards -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="adv-wrapper">

                        <div class="adv-image">
                            <img src="{{ asset('assets/img/banner/home-banner.webp') }}" class="img-fluid"
                                alt="Banner Image">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Start Courses -->
    <!-- Start Courses -->
    <section class="courses section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title  text-center">
                        <span>Courses - Govt of India AICTE Approved</span>
                        <h2>2) Most Popular Long Term Courses</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="short-term-cs col-xl-4 col-md-6 col-12 wow fadeIn">
                    <div class="single-course ">
                        <div class="course-img">
                            <img src="{{ asset('assets/img/courses/course-1.webp') }}" alt="course-image">

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
                            <h2><a href="{{ route('pgmm') }}">PGDMM (Post Graduate Diploma in Materials Management)</a></h2>



                        </div>
                    </div>
                </div>
                <!-- End Single Course -->

                <div class="col-xl-4 col-md-6 col-12 wow fadeIn">
                    <div class="single-course">
                        <div class="course-img">
                            <img src="{{ asset('assets/img/courses/course-2.webp') }}" alt="course-image">

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
                            <h2><a href="{{ route('pgdl') }}">
                                    PGDL & SCM (Post Graduate Diploma in Logistics & Supply Chain Management)
                                </a></h2>


                        </div>
                    </div>
                </div>

                <!-- End Single Course -->
            </div>
        </div>
    </section>
    <!-- End Courses -->
    <!-- Start Working Process -->
    <section class="working-process section-padding" style="background-image: url({{ asset('assets/img/bg/work.webp') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="section-title white-title text-center">

                        <h2>Guidance to Apply given below</h2>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-12 wow fadeIn">
                    <div class="single-work">
                        <div class="wicon">
                            <img src="{{ asset('assets/img/icons/career_18058242.png') }}" alt="">
                        </div>
                        <h4>Why choose our courses ?</h4>
                        <p>
                            IIMM is the pioneer institute in India for SCM. We started Materials Management (SCM) courses 50
                            years ago. It is to guide officers to function effectively and efficiently to handle Purchases,
                            Stores, Warehouse, Transportation of materials / goods in an organization. Our courses are
                            highly reputed in the industries in India as well as abroad. Institute is headed by
                            Professionals working in various Industries in the capacity as Officers, General Managers and
                            Directors.
                        </p>
                    </div>
                </div><!-- End Col -->

                <div class="col-xl-4 col-md-6 col-12 wow fadeIn">
                    <div class="single-work">
                        <div class="wicon">
                            <img src="{{ asset('assets/img/icons/instructions_16916838.png') }}" alt="">

                        </div>
                        <h4>How to Apply for Short-Term Courses?</h4>

                        <p>Application is provided in this website. Fill up the form online. Attach Copy of documents.
                            Attach Passport size Photograph. Pay the fees and submit the Form.</p>
                        Documents Required:
                        <li> Copy of Aadhar Card</li>
                        <li>Copy of Educational Certificates</li>
                        <li> Passport Size Photograph</li>
                        <li> Duly filled Application Form </li>
                        <li>Proof of Payment.</li>

                        </p>
                    </div>
                </div><!-- End Col -->

                <div class="col-xl-4 col-md-6 col-12 wow fadeIn">
                    <div class="single-work">
                        <div class="wicon">
                            <img src="{{ asset('assets/img/icons/online-learning_2436805.png') }}" alt="">

                        </div>
                        <h4>Make a Career</h4>
                        <p>
                            After Passing the Short-Term or PG Courses, we will be providing Internship in selected
                            Industries to Students who Perform well in the Examination and clear the Interview. Duration of
                            internship, Terms and Conditions will vary depending upon the Industry / Company.</p>
                        <li>IIMM will provide Career Guidance</li>
                        <li>Our Website will publish vacancies that arise in the Industries and intimated to us.</li>
                        </p>
                    </div>
                </div>
                <!-- End Col -->

            </div>
        </div>
    </section>
    <!-- End Working Process -->


    <!-- Start Feature -->
    <section class="features feature-section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <span>Features</span>
                        <h2>One Platform Many Courses</h2>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-12 wow fadeIn">
                    <div class="feature-item">
                        <div class="fea-icon">
                            <img src="{{ asset('assets/img/icons/award.webp') }}" class="img-fluid">
                        </div>
                        <h3>IIMM Certification</h3>
                        <p>Get recognized as a notch above the rest by undertaking IIMM Certifications. Our Certification
                            seeks to set industry standards for working professionals so that they can keep abreast of new
                            developments in the field of SCM/ Materials Management </p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 wow fadeIn">
                    <div class="feature-item og-contact-list">
                        <div class="fea-icon">
                            <img src="{{ asset('assets/img/icons/open-book.webp') }}">
                        </div>
                        <h3>IIMM Education</h3>
                        <p>Develop your professional knowledge and keep pace with current industry trends through IIMM
                            Education. IIMM offers a full range of short-term and extended programmes for working
                            professionals and students in both online and offline formats. </p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 wow fadeIn">
                    <div class="feature-item">
                        <div class="fea-icon">
                            <img src="{{ asset('assets/img/icons/talk.webp') }}">
                        </div>
                        <h3>Consultancy Services</h3>
                        <p>Consultancy is provided to Corporates for better Productivity and Profitability. We have
                            conducted Stores Audit for various organisations such as Cochin Shipyard, Malayala Manorama,
                            Arjuna Naturals, Apollo Tyres to name a few. </p>

                    </div>
                </div><!-- End Col -->
            </div>
        </div>
    </section>
    <!-- End Feature -->
@endsection