@extends('layouts.app')

@section('meta')
    <title>IIMM Cochin | Best courses for career</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Advance your career with IIMM Cochin's professional courses in supply chain, logistics, and materials management. Choose from diploma, certification, and training programs." />
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

                @if(session('success'))
                    <div class="alert alert-success" style="background:#d4edda;color:#155724;padding:15px;border-radius:8px;margin-bottom:20px;max-width:900px;margin-left:auto;margin-right:auto;">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger" style="background:#f8d7da;color:#721c24;padding:15px;border-radius:8px;margin-bottom:20px;max-width:900px;margin-left:auto;margin-right:auto;">
                        @foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach
                    </div>
                @endif

                <form action="{{ route('application.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            <div class="iimm-application">
                                <div class="row">

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">
                                            <label for="" class="form-label">First Name</label>
                                            <input type="text" name="first_name" placeholder="Enter First Name" class="form-control form-box1" value="{{ old('first_name') }}" required>
                                            @error('first_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">
                                            <label for="" class="form-label">Last Name</label>
                                            <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control form-box1" value="{{ old('last_name') }}">
                                            @error('last_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label gen-label">Gender</label>
                                            <div class="Gender-section">
                                                <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                                <label for="">Male</label>

                                                <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                                <label for="">Female</label>
                                                @error('gender')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Address</label>
                                            <textarea name="address" cols="5" rows="5" class="form-control form-box1">{{ old('address') }}</textarea>
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Mobile Number</label>
                                            <input type="text" name="phone" placeholder="Enter Mobile Number" class="form-control form-box1" value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Email</label>
                                            <input type="email" name="email" placeholder="Enter Email" class="form-control form-box1" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Date Of Birth</label>
                                            <input type="date" name="dob" placeholder="Enter DOB" class="form-control form-box1" value="{{ old('dob') }}">
                                            @error('dob')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Passport Size Photo</label>
                                            <div class="choose-file">
                                                <label for="photo">Choose a file:</label>
                                                <input type="file" id="photo" name="photo">
                                                @error('photo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Qualification(Copy of
                                                Certificate to be attached)</label>
                                            <div class="choose-file">
                                                <label for="qualification_file">Choose a file:</label>
                                                <input type="file" id="qualification_file" name="qualification_file">
                                                @error('qualification_file')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">If employed, Name & Address</label>
                                            <input type="text" name="employer_info" placeholder="Enter Name & Adress" class="form-control form-box1" value="{{ old('employer_info') }}">
                                            @error('employer_info')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
                                            <input type="text" name="course_name" placeholder="Enter Course" class="form-control form-box1" value="{{ old('course_name') }}">
                                            @error('course_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="app-detail">
                                            <label for="" class="gen-label">How did you know about this course</label>
                                            <div class="proof">
                                                <input type="radio" name="referral_source" value="Person/Friend" {{ old('referral_source') == 'Person/Friend' ? 'checked' : '' }}>
                                                <label for="">Name of Person / Friend:</label>
                                            </div>
                                            <div class="proof">
                                                <input type="radio" name="referral_source" value="IIMM/Advertisement" {{ old('referral_source') == 'IIMM/Advertisement' ? 'checked' : '' }}>
                                                <label for="">IIMM / Advertisement</label>
                                            </div>
                                            @error('referral_source')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        
                                        <div class="app-detail">
                                            <label for="" class="form-label">Date</label>
                                            <input type="date" name="application_date" class="form-control form-box1" value="{{ old('application_date') }}">
                                            @error('application_date')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="app-detail">
                                            <button type="submit" class="final-submit">submit</button>
                                        </div>



                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-detail">

                                            <label for="" class="form-label">Details of Fee Paid :Amount RS :
                                            </label>
                                            <input type="number" name="fee_amount" placeholder="Enter Amount" class="form-control form-box1" value="{{ old('fee_amount') }}">
                                            @error('fee_amount')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="app-detail">

                                            <label for="" class="form-label"> Cheque Number
                                            </label>
                                            <input type="text" name="cheque_number" placeholder="Enter Number" class="form-control form-box1" value="{{ old('cheque_number') }}">
                                            @error('cheque_number')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="app-detail">

                                            <label for="" class="form-label"> Date
                                            </label>
                                            <input type="date" name="payment_date" placeholder="Enter Amount" class="form-control form-box1" value="{{ old('payment_date') }}">
                                            @error('payment_date')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="app-detail">

                                            <label for="" class="form-label"> Name of Bank
                                            </label>
                                            <input type="text" name="bank_name" placeholder="Bank Name" class="form-control form-box1" value="{{ old('bank_name') }}">
                                            @error('bank_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="app-detail">
                                            <label for="" class="form-label">Proof of payment made to bank (Pay in slip copy etc.)</label>
                                            <input type="file" id="payment_proof_file" name="payment_proof_file">
                                            @error('payment_proof_file')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <br>
                                        </div>

                                        <div class="app-detail">
                                            <label for="" class="gen-label">Attached proof of Transfer</label>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <select name="proof_attached" class=" form-select">
                                                        <option value="Yes" {{ old('proof_attached') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                        <option value="No" {{ old('proof_attached') == 'No' ? 'selected' : '' }}>No</option>
                                                    </select>
                                                    @error('proof_attached')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
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
