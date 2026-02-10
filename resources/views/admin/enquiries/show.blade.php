@extends('layouts.admin')
@section('title', 'View Enquiry')

@section('content')
    <div class="detail-card">
        <div style="margin-bottom:20px;">
            <a href="{{ route('admin.enquiries.index') }}" class="btn-back"><i class='bx bx-arrow-back'></i> Back to
                Enquiries</a>
        </div>

        <div class="detail-row">
            <div class="detail-label">Name</div>
            <div class="detail-value">{{ $enquiry->name }}</div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Email</div>
            <div class="detail-value"><a href="mailto:{{ $enquiry->email }}"
                    style="color:var(--primary-light);">{{ $enquiry->email }}</a></div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Phone</div>
            <div class="detail-value">{{ $enquiry->phone ?? '—' }}</div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Date</div>
            <div class="detail-value">{{ $enquiry->created_at->format('d M Y, h:i A') }}</div>
        </div>
        <div class="detail-row">
            <div class="detail-label">Message</div>
            <div class="detail-value">{{ $enquiry->message ?? 'No message.' }}</div>
        </div>

        <div style="margin-top:24px;">
            <form action="{{ route('admin.enquiries.destroy', $enquiry) }}" method="POST"
                onsubmit="return confirm('Delete this enquiry?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn-danger-sm"><i class='bx bx-trash'></i> Delete Enquiry</button>
            </form>
        </div>
    </div>
@endsection