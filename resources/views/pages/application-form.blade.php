@extends('layouts.app')

@section('meta')
    <title>IIMM Cochin | Best courses for career</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Advance your career with IIMM Cochin’s professional courses in supply chain, logistics, and materials management. Choose from diploma, certification, and training programs." />
    <meta name="keywords" content=" career oriented," />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" Best Career-Oriented Courses" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description" content="We are providing industry-recognized short-term and long-term programs in supply chain and materials management at IIMM Cochin." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#">
@endsection

@section('content')
<!-- Start Main Banner -->
    <section class="main-banner" style="background-image: url({{ asset('assets/img/banner/event-banner.webp') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center">
                    <h2>Application Form</h2>
                    <p>
                        <a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i>Application Form
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Banner -->

    <section class="application-form-section">
        <div class="container">
            <div class="application-form">
                <div class="section-title about-title  app-form-title wow animated fadeIn ">
                    <h2> Application For Short Term Course</h2>
                </div>
                <form action="">
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            <div class="iimm-application">
                                <div class="row">

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">
                                            <label for="" class="form-label">First Name</label>
                                            <input type="text" placeholder="Enter First Name" class="form-control form-box1">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">
                                            <label for="" class="form-label">Last Name</label>
                                            <input type="text" placeholder="Enter Last Name" class="form-control form-box1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label gen-label">Gender</label>
                                            <div class="Gender-section">
                                                <input type="radio" name="gender" value="male">
                                                <label for="">Male</label>

                                                <input type="radio" name="gender" value="female">
                                                <label for="">Female</label>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Address</label>
                                            <textarea name="" id="" cols="5" rows="5" class="form-control form-box1" id=""></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Mobile Number</label>
                                            <input type="number" placeholder="Enter Mobile Number" class="form-control form-box1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Email</label>
                                            <input type="email" placeholder="Enter Email" class="form-control form-box1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Date Of Birth</label>
                                            <input type="date" placeholder="Enter DOB" class="form-control form-box1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Qualification(Copy of
                                                Certificate to be attached)</label>
                                            <div class="choose-file">
                                                <label for="myfile">Choose a file:</label>
                                                <input type="file" id="myfile" name="myfile">
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">If employed, Name & Address</label>
                                            <input type="text" placeholder="Enter Name & Adress" class="form-control form-box1">
                                        </div>

                                    </div>




                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="app-detail bank-detail">
                                            <h5>OUR BANK DETAILS</h5>
                                            <p>Name of bank:<span>CSB Bank</span></p>
                                            <p>BRANCH:<span> Girinagar</span></p>
                                            <p>A/c No:<span>  018600531630190001</span></p>
                                            <p> IFSC Code:<span>CSBK0000186</span></p>

                                        </div>
                                        <div class="app-detail">

                                            <label for="" class="form-label">Admission sought for
                                                (Name of Course)</label>
                                            <input type="text" placeholder="Enter Course" class="form-control form-box1">
                                        </div>

                                        <div class="app-detail">
                                            <label for="" class="gen-label">How did you know about this course</label>
                                            <div class="proof">
                                                <input type="radio" name="radio">
                                                <label for="">Name of Person / Friend:</label>
                                            </div>
                                            <div class="proof">
                                                <input type="radio" name="radio">
                                                <label for="">IIMM / Advertisement</label>
                                            </div>
                                        </div>

                                        
                                        <div class="app-detail">
                                            <label for="" class="form-label">Date</label>
                                            <input type="date" class="form-control form-box1">
                                        </div>

                                        <div class="app-detail">
                                            <button class="final-submit">submit</button>
                                        </div>



                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Details of Fee Paid :Amount RS :
                                            </label>
                                            <input type="number" placeholder="Enter Amount" class="form-control form-box1">
                                        </div>
                                        <div class="app-detail">

                                            <label for="" class="form-label"> Cheque Number
                                            </label>
                                            <input type="number" placeholder="Enter Number" class="form-control form-box1">
                                        </div>
                                        <div class="app-detail">

                                            <label for="" class="form-label"> Date
                                            </label>
                                            <input type="date" placeholder="Enter Amount" class="form-control form-box1">
                                        </div>

                                        <div class="app-detail">

                                            <label for="" class="form-label"> Name of Bank
                                            </label>
                                            <input type="text" placeholder="Bank Name" class="form-control form-box1">
                                        </div>
                                        
                                        <div class="app-detail">
                                            <label for="" class="form-label">Proof of payment made to bank (Pay in slip copy etc.)</label>
                                            <input type="file" id="myfile" name="myfile"><br>
                                        </div>

                                        <div class="app-detail">
                                            <label for="" class="gen-label">Attached proof of Transfer</label>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <select class=" form-select">
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>


                                            </div>
                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
