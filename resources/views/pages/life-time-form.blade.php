@extends('layouts.app')

@section('meta')
    <title>life time form</title>
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
                    <h2>Membership Form</h2>
                    <p>
                        <a href="{{ route('home') }}">Home</a> <i class='bx bx-chevrons-right'></i>Membership Form
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Banner -->
    <section class="lifeform-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="life-time-form">
                        <div class="life-time-head">
                            <h1>IIMM Life Membership Form</h1>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="name-box">
                                    <label class="mb-label">Name</label>
                                    <input type="text" class="form-control" aria-label="name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="name-box">
                                    <label class="mb-label">Phone number</label>
                                    <input type="number" placeholder="+91" class="form-control" aria-label="name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="name-box">
                                    <label class="mb-label">Address</label>
                                    <input type="text" class="form-control address" aria-label="name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="iim-gender">
                                    <label class="mb-label">Gender</label>
                                    <div class="form-tick">

                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label gender" for="defaultCheck1">
                                            Male
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label gender" for="defaultCheck1">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Name of Organization</label>
                                        <input type="text" class="form-control" aria-label="name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Designation</label>
                                        <input type="number" class="form-control" aria-label="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Office Address</label>
                                        <input type="text" class="form-control Office" aria-label="name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Office Phone</label>
                                        <input type="number" class="form-control Office" aria-label="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="name-box">
                                        <label class="mb-label">Qualification</label>
                                        <input type="text" class="form-control" aria-label="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Work Experience(Company Name)</label>
                                        <input type="text" class="form-control" placeholder="number of years" aria-label="name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Designation</label>
                                        <input type="number" class="form-control" aria-label="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Date of Birth</label>
                                        <input type="date" class="form-control" placeholder="number of years" aria-label="name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Aadhar Card</label>
                                        <input type="number" class="form-control" aria-label="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Email ID For Communication</label>
                                        <input type="text" class="form-control" aria-label="name">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="mb-label payment">Payment Details</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="fee-payment">
                                                <div class="membership-content">
                                                    <p>Life Membership Fee</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fee-payment">
                                                <div class="membership-content">
                                                    <p>Rs 500 – Entrance
                                                        Rs.12000 Fee. Plus
                                                        18% GST on Rs 12500</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fee-payment">
                                                <div class="membership-content">
                                                    <p>Payment made
                                                        direct to Bank</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="membership-content">
                                                <p>If Yes, Proof
                                                    Attached</p>
                                                <div class="form-tick">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label gender" for="defaultCheck1">
                                                        Yes
                                                    </label>
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label gender" for="defaultCheck1">
                                                        No
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="mb-label payment">Bank Details</label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="fee-payment">
                                                <div class="membership-content">
                                                    <p>Bank Details:
                                                        CSB Bank Ltd</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fee-payment">
                                                <div class="membership-content">
                                                    <p>Account No:
                                                        018611500711</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="fee-payment">
                                                <div class="membership-content">
                                                    <p>IFSC:CSBK0000186</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="membership-content">
                                                <p>Branch:
                                                    Girinagar
                                                    (Cochin)</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">  
                                    <div class="payment-methoed">
                                      <label class="mb-label payment">Payment Method</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Cheque Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Date</label>
                                        <input type="date" class="form-control" placeholder="date" >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Amount</label>
                                        <input type="number" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="submit-button">
                                <button type="button" class="btn btn-submit">Submit</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
