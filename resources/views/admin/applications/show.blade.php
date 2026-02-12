@extends('layouts.admin')
@section('title', 'Application Details')

@section('content')
    <style>
        /* Web View Styles */
        .web-view .admin-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 20px;
        }
        .web-view .admin-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .web-view .admin-card-header h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }
        .web-view .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }
        .web-view .status-badge.read { background: #d4edda; color: #155724; }
        .web-view .status-badge.unread { background: #f8d7da; color: #721c24; }
        
        .web-view .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .web-view .detail-item label {
            display: block;
            font-size: 12px;
            color: #777;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .web-view .detail-item p {
            font-size: 15px;
            color: #333;
            font-weight: 500;
            margin: 0;
        }
        .web-view .detail-item.full-width {
            grid-column: 1 / -1;
        }
        .web-view .btn-info-sm {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: #17a2b8;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 12px;
        }
        .web-view .btn-info-sm:hover { background: #138496; }

        /* Print View Styles (Hidden on Screen) */
        .print-view {
            display: none;
        }

        @media print {
            body * {
                visibility: hidden;
            }
            .print-view, .print-view * {
                visibility: visible;
            }
            .print-view {
                display: block;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                background: white;
                color: black;
                font-family: 'Times New Roman', Times, serif; /* Formal Font */
                padding: 40px;
                box-sizing: border-box;
            }
            
            /* Letterhead Styles */
            .letterhead {
                text-align: center;
                border-bottom: 2px solid #000;
                padding-bottom: 10px;
                margin-bottom: 20px;
            }
            .letterhead h1 {
                font-size: 20pt; /* Reduced from 24pt */
                font-weight: bold;
                margin: 0;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            .letterhead h2 {
                font-size: 12pt; /* Reduced from 14pt */
                font-weight: normal;
                margin: 5px 0;
            }
            .letterhead p {
                font-size: 9pt;
                margin: 2px 0;
            }
            
            .form-title {
                text-align: center;
                font-size: 14pt;
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: 20px;
                text-transform: uppercase;
            }

            .print-row {
                display: flex;
                margin-bottom: 8px; /* Slightly tighter spacing */
                align-items: baseline; 
            }
            .print-label {
                width: 160px; /* Slightly reduced width */
                font-weight: bold;
                font-size: 10pt;
            }
            .print-value {
                flex-grow: 1;
                border-bottom: 1px dotted #000;
                font-size: 10pt;
                padding-left: 10px;
                min-height: 18px;
            }

            /* Personal Details with Photo Layout */
            .personal-details-wrapper {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
            }
            .personal-details-left {
                flex: 1;
                padding-right: 20px;
            }
            .personal-details-right {
                width: 35mm;
                flex-shrink: 0;
            }

            .photo-box {
                width: 35mm;
                height: 45mm;
                border: 1px solid #000;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 8pt;
                color: #666;
                margin-top: 5px; /* Visual alignment */
            }
            .photo-box img {
                max-width: 100%;
                max-height: 100%;
            }

            .section-header {
                font-size: 11pt;
                font-weight: bold;
                background: #eee;
                padding: 4px 10px;
                margin-top: 15px;
                margin-bottom: 10px;
                border: 1px solid #000;
                text-transform: uppercase;
            }

            .signature-block {
                margin-top: 50px;
                display: flex;
                justify-content: space-between;
                page-break-inside: avoid;
            }
            .sig-line {
                border-top: 1px solid #000;
                width: 200px;
                text-align: center;
                padding-top: 5px;
                font-size: 10pt;
                font-weight: bold;
            }
            
            /* Office Use Box */
            .office-use {
                margin-top: 30px;
                border: 1px solid #000;
                padding: 10px;
            }
            .office-use h4 {
                text-align: center;
                margin: 0 0 10px 0;
                text-transform: uppercase;
                font-size: 11pt;
                text-decoration: underline;
            }

            /* Hide Web Elements */
            .web-view, .admin-sidebar, .admin-header, .no-print {
                display: none !important;
            }
        }
    </style>

    <!-- WEB VIEW (Admin Dashboard Style) -->
    <div class="web-view">
        <div class="admin-back-btn">
            <a href="{{ route('admin.applications.index') }}"><i class='bx bx-arrow-back'></i> Back to Applications</a>
            <div style="margin-left:auto; display:flex; gap:10px;">
                <button onclick="window.print()" class="btn-info" style="background:#28a745; color:#fff; border:none; padding:8px 15px; border-radius:4px; cursor:pointer;">
                    <i class='bx bx-printer'></i> Print Application
                </button>
                <form action="{{ route('admin.applications.destroy', $application) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this application?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger" style="background:#dc3545; color:#fff; border:none; padding:8px 15px; border-radius:4px; cursor:pointer;">
                        <i class='bx bx-trash'></i> Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="admin-card">
            <div class="admin-card-header">
                <h3>Application Details</h3>
                <span class="status-badge {{ $application->is_read ? 'read' : 'unread' }}">
                    {{ $application->is_read ? 'Read' : 'Unread' }}
                </span>
            </div>
            <div class="admin-card-body">
                <div class="details-grid">
                    <div class="detail-item">
                        <label>Full Name</label>
                        <p>{{ $application->first_name }} {{ $application->last_name }}</p>
                    </div>
                    <div class="detail-item">
                        <label>Email</label>
                        <p><a href="mailto:{{ $application->email }}">{{ $application->email }}</a></p>
                    </div>
                    <div class="detail-item">
                        <label>Phone</label>
                        <p><a href="tel:{{ $application->phone }}">{{ $application->phone }}</a></p>
                    </div>
                    <div class="detail-item">
                        <label>Date of Birth</label>
                        <p>{{ $application->dob ? $application->dob->format('d M Y') : '—' }}</p>
                    </div>
                    <div class="detail-item">
                        <label>Gender</label>
                        <p>{{ ucfirst($application->gender) }}</p>
                    </div>
                    <div class="detail-item">
                        <label>Address</label>
                        <p>{{ $application->address }}</p>
                    </div>
                    <div class="detail-item">
                        <label>Course Name</label>
                        <p>{{ $application->course_name }}</p>
                    </div>
                    <div class="detail-item">
                        <label>Employer Info</label>
                        <p>{{ $application->employer_info ?? '—' }}</p>
                    </div>
                    <div class="detail-item">
                        <label>Referral Source</label>
                        <p>{{ $application->referral_source ?? '—' }}</p>
                    </div>
                    <div class="detail-item">
                        <label>Submitted At</label>
                        <p>{{ $application->created_at->format('d M Y, h:i A') }}</p>
                    </div>

                    <div class="detail-item full-width">
                        <h4 style="margin-top: 20px; border-bottom: 1px solid #eee; padding-bottom: 10px;">Payment Details</h4>
                    </div>

                    <div class="detail-item">
                        <label>Fee Amount</label>
                        <p>{{ $application->fee_amount ? '₹' . $application->fee_amount : '—' }}</p>
                    </div>
                    <div class="detail-item">
                        <label>Cheque Number</label>
                        <p>{{ $application->cheque_number ?? '—' }}</p>
                    </div>
                    <div class="detail-item">
                        <label>Payment Date</label>
                        <p>{{ $application->payment_date ? $application->payment_date->format('d M Y') : '—' }}</p>
                    </div>
                    <div class="detail-item">
                        <label>Bank Name</label>
                        <p>{{ $application->bank_name ?? '—' }}</p>
                    </div>

                    <div class="detail-item full-width">
                        <h4 style="margin-top: 20px; border-bottom: 1px solid #eee; padding-bottom: 10px;">Documents</h4>
                    </div>

                    <div class="detail-item">
                        <label>Passport Size Photo</label>
                        @if($application->photo)
                            <div style="margin-top:10px;">
                                <img src="{{ asset('storage/' . $application->photo) }}" alt="Photo"
                                    style="max-width: 150px; border-radius: 4px; border: 1px solid #ddd; cursor: pointer;"
                                    onclick="openModal(this.src)">
                                <br>
                                <a href="{{ asset('storage/' . $application->photo) }}" download class="btn-info-sm"
                                    style="display:inline-block;margin-top:5px;"><i class='bx bx-download'></i> Download Photo</a>
                            </div>
                        @else
                            <p>Not provided</p>
                        @endif
                    </div>

                    <div class="detail-item">
                        <label>Qualification Certificate</label>
                        @if($application->qualification_file)
                            <div style="margin-top:5px;">
                                <a href="{{ asset('storage/' . $application->qualification_file) }}" target="_blank" class="btn-info-sm"><i class='bx bx-show'></i> View</a>
                                <a href="{{ asset('storage/' . $application->qualification_file) }}" download class="btn-info-sm"><i class='bx bx-download'></i> Download</a>
                            </div>
                        @else
                            <p>Not provided</p>
                        @endif
                    </div>

                    <div class="detail-item">
                        <label>Payment Proof</label>
                        @if($application->payment_proof_file)
                            <div style="margin-top:5px;">
                                <a href="{{ asset('storage/' . $application->payment_proof_file) }}" target="_blank" class="btn-info-sm"><i class='bx bx-show'></i> View</a>
                                <a href="{{ asset('storage/' . $application->payment_proof_file) }}" download class="btn-info-sm"><i class='bx bx-download'></i> Download</a>
                            </div>
                        @else
                            <p>Not provided</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PRINT VIEW (Formal Letterhead Form) -->
    <div class="print-view">
        <div class="letterhead">
            <h1>Indian Institute of Materials Management</h1>
            <h2>Cochin Branch</h2>
            <p>Vidhya Bhavan, 30/1188B, Ponnurunni, Vytila P.O, Cochin-682019</p>
            <p>Phone: 0484-2304494 | Email: iimmcochin@gmail.com</p>
        </div>

        <div class="form-title">APPLICATION FOR ADMISSION</div>

        <!-- Layout for Personal Details & Photo -->
        <div class="personal-details-wrapper">
            <div class="personal-details-left">
                <div class="section-header" style="margin-top:0;">1. Personal Details</div>
                <div class="print-row">
                    <span class="print-label">Full Name:</span>
                    <span class="print-value">{{ $application->first_name }} {{ $application->last_name }}</span>
                </div>
                <div class="print-row">
                    <span class="print-label">Date of Birth:</span>
                    <span class="print-value">{{ $application->dob ? $application->dob->format('d M Y') : '' }}</span>
                </div>
                <!-- Gender Row extracted to avoid layout issues -->
                <div class="print-row">
                     <span class="print-label">Gender:</span>
                     <span class="print-value">{{ ucfirst($application->gender) }}</span>
                </div>
                <div class="print-row">
                    <span class="print-label">Address:</span>
                    <span class="print-value">{{ $application->address }}</span>
                </div>
                <div class="print-row">
                    <span class="print-label">Contact No:</span>
                    <span class="print-value">{{ $application->phone }}</span>
                </div>
                <div class="print-row">
                    <span class="print-label">Email ID:</span>
                    <span class="print-value">{{ $application->email }}</span>
                </div>
            </div>

            <div class="personal-details-right">
                <div class="photo-box">
                    @if($application->photo)
                        <img src="{{ asset('storage/' . $application->photo) }}" alt="Photo">
                    @else
                        PASTE PHOTO
                    @endif
                </div>
            </div>
        </div>

        <div class="section-header">2. Course Details</div>
        <div class="print-row">
            <span class="print-label">Course Applied For:</span>
            <span class="print-value">{{ $application->course_name }}</span>
        </div>
        <div class="print-row">
            <span class="print-label">Employer Info:</span>
            <span class="print-value">{{ $application->employer_info }}</span>
        </div>

        <div class="section-header">3. Payment Details</div>
        <div class="print-row">
            <span class="print-label">Fee Amount:</span>
            <span class="print-value">{{ $application->fee_amount ? 'Rs. ' . $application->fee_amount : '' }}</span>
        </div>
        <div class="print-row">
            <span class="print-label">Bank Name:</span>
            <span class="print-value">{{ $application->bank_name }}</span>
        </div>
        <div class="print-row">
            <span class="print-label">Cheque/Ref No:</span>
            <span class="print-value">{{ $application->cheque_number }}</span>
        </div>
        <div class="print-row">
            <span class="print-label">Payment Date:</span>
            <span class="print-value">{{ $application->payment_date ? $application->payment_date->format('d M Y') : '' }}</span>
        </div>

        <div class="office-use">
            <h4>For Office Use Only</h4>
            <div class="print-row">
                <span class="print-label">Application Status:</span>
                <span class="print-value">Received / Verified / Approved</span>
            </div>
            <div class="print-row">
                <span class="print-label">Documents Verified:</span>
                <span class="print-value">Yes / No</span>
            </div>
            <div class="print-row">
                <span class="print-label">Remarks:</span>
                <span class="print-value"></span>
            </div>
        </div>

        <div class="signature-block">
            <div class="sig-line">Signature of Applicant</div>
            <div class="sig-line">Signature of Course Director</div>
        </div>
        
        <div style="margin-top: 20px; text-align:center; font-size:9pt;">
            <p>Generated on: {{ date('d M Y, h:i A') }}</p>
        </div>
    </div>

    <!-- Image Modal for Web View -->
    <div id="imageModal" class="modal" style="display:none; position:fixed; z-index:1000; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(0,0,0,0.9);">
        <span class="close" onclick="closeModal()" style="position:absolute; top:15px; right:35px; color:#f1f1f1; font-size:40px; font-weight:bold; cursor:pointer;">&times;</span>
        <img class="modal-content" id="img01" style="margin: auto; display: block; width: 80%; max-width: 700px; padding-top: 60px;">
    </div>

    <script>
        function openModal(src) {
            var modal = document.getElementById("imageModal");
            var modalImg = document.getElementById("img01");
            modal.style.display = "block";
            modalImg.src = src;
        }

        function closeModal() {
            var modal = document.getElementById("imageModal");
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            var modal = document.getElementById("imageModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection