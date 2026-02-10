@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon purple"><i class='bx bxs-book-open'></i></div>
            <div class="stat-value">{{ $stats['courses'] }}</div>
            <div class="stat-label">Total Courses</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon cyan"><i class='bx bxs-calendar-event'></i></div>
            <div class="stat-value">{{ $stats['events'] }}</div>
            <div class="stat-label">Total Events</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class='bx bxs-news'></i></div>
            <div class="stat-value">{{ $stats['news'] }}</div>
            <div class="stat-label">News Articles</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon blue"><i class='bx bxs-edit-alt'></i></div>
            <div class="stat-value">{{ $stats['blogs'] }}</div>
            <div class="stat-label">Blog Posts</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon amber"><i class='bx bxs-image-alt'></i></div>
            <div class="stat-value">{{ $stats['galleries'] }}</div>
            <div class="stat-label">Gallery Images</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon purple"><i class='bx bxs-quote-alt-left'></i></div>
            <div class="stat-value">{{ $stats['testimonials'] }}</div>
            <div class="stat-label">Testimonials</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon cyan"><i class='bx bxs-briefcase'></i></div>
            <div class="stat-value">{{ $stats['careers'] }}</div>
            <div class="stat-label">Career Posts</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon rose"><i class='bx bxs-envelope'></i></div>
            <div class="stat-value">{{ $stats['enquiries'] }}</div>
            <div class="stat-label">Enquiries ({{ $stats['unread_enquiries'] }} unread)</div>
        </div>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Quick Overview</h3>
        </div>
        <div class="admin-card-body">
            <p style="color: var(--text-secondary); font-size: 14px;">
                Welcome to the IIMM Admin Panel. Use the sidebar to manage your website content including courses, events,
                news, blog posts, gallery images, testimonials, career opportunities, and enquiries.
            </p>
        </div>
    </div>
@endsection