@extends('layouts.app')

@section('meta')
    <title>life time form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content=" Advance your career with IIMM Cochin's professional courses in supply chain, logistics, and materials management. Choose from diploma, certification, and training programs." />
    <meta name="keywords" content=" career oriented," />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" Best Career-Oriented Courses" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Indobritco" />
    <meta property="og:image" content="#" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="550" />
    <meta property="og:description"
        content="We are providing industry-recognized short-term and long-term programs in supply chain and materials management at IIMM Cochin." />
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

                        <form action="{{ route('membership.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Name</label>
                                        <input type="text" name="name" class="form-control" aria-label="name"
                                            value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Phone number</label>
                                        <input type="text" name="phone" placeholder="+91" class="form-control"
                                            aria-label="name" value="{{ old('phone') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="name-box">
                                        <label class="mb-label">Address</label>
                                        <input type="text" name="address" class="form-control address" aria-label="name"
                                            value="{{ old('address') }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="iim-gender">
                                        <label class="mb-label">Gender</label>
                                        <div class="form-tick">

                                            <input class="form-check-input" type="radio" name="gender" value="Male"
                                                id="genderMale" {{ old('gender') == 'Male' ? 'checked' : '' }}>
                                            <label class="form-check-label gender" for="genderMale">
                                                Male
                                            </label>
                                            <input class="form-check-input" type="radio" name="gender" value="Female"
                                                id="genderFemale" {{ old('gender') == 'Female' ? 'checked' : '' }}>
                                            <label class="form-check-label gender" for="genderFemale">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Name of Organization</label>
                                            <input type="text" name="organization" class="form-control" aria-label="name"
                                                value="{{ old('organization') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Designation</label>
                                            <input type="text" name="designation" class="form-control" aria-label="name"
                                                value="{{ old('designation') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Office Address</label>
                                            <input type="text" name="office_address" class="form-control Office"
                                                aria-label="name" value="{{ old('office_address') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Office Phone</label>
                                            <input type="text" name="office_phone" class="form-control Office"
                                                aria-label="name" value="{{ old('office_phone') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="name-box">
                                            <label class="mb-label">Qualification</label>
                                            <input type="text" name="qualification" class="form-control" aria-label="name"
                                                value="{{ old('qualification') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Work Experience(Company Name)</label>
                                            <input type="text" name="work_experience" class="form-control"
                                                placeholder="number of years" aria-label="name"
                                                value="{{ old('work_experience') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Designation</label>
                                            <input type="text" name="work_designation" class="form-control"
                                                aria-label="name" value="{{ old('work_designation') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" placeholder="number of years"
                                                aria-label="name" value="{{ old('dob') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Aadhar Card</label>
                                            <input type="text" name="aadhar" class="form-control" aria-label="name"
                                                value="{{ old('aadhar') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Email ID For Communication</label>
                                            <input type="email" name="email" class="form-control" aria-label="name"
                                                value="{{ old('email') }}" required>
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
                                                        <input class="form-check-input" type="radio" name="proof_attached"
                                                            value="1" id="proofYes" {{ old('proof_attached') == '1' ? 'checked' : '' }}>
                                                        <label class="form-check-label gender" for="proofYes">
                                                            Yes
                                                        </label>
                                                        <input class="form-check-input" type="radio" name="proof_attached"
                                                            value="0" id="proofNo" {{ old('proof_attached') == '0' ? 'checked' : '' }}>
                                                        <label class="form-check-label gender" for="proofNo">
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
                                            <input type="text" name="cheque_number" class="form-control"
                                                id="exampleFormControlInput1" placeholder="Cheque Number"
                                                value="{{ old('cheque_number') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Date</label>
                                            <input type="date" name="payment_date" class="form-control" placeholder="date"
                                                value="{{ old('payment_date') }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="name-box">
                                            <label class="mb-label">Amount</label>
                                            <input type="number" name="amount" class="form-control"
                                                value="{{ old('amount') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-button">
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection