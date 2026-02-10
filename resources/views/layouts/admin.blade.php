<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') - IIMM</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="admin-body">

    <!-- Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">IM</div>
            <h2>IIMM Admin</h2>
        </div>

        <nav class="sidebar-nav">
            <div class="sidebar-label">Main</div>
            <a href="{{ route('admin.dashboard') }}"
                class="sidebar-link {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                <i class='bx bxs-dashboard'></i>
                <span>Dashboard</span>
            </a>

            <div class="sidebar-label">Content Management</div>
            <a href="{{ route('admin.courses.index') }}"
                class="sidebar-link {{ request()->routeIs('admin.courses*') ? 'active' : '' }}">
                <i class='bx bxs-book-open'></i>
                <span>Courses</span>
            </a>
            <a href="{{ route('admin.events.index') }}"
                class="sidebar-link {{ request()->routeIs('admin.events*') ? 'active' : '' }}">
                <i class='bx bxs-calendar-event'></i>
                <span>Events</span>
            </a>
            <a href="{{ route('admin.news.index') }}"
                class="sidebar-link {{ request()->routeIs('admin.news*') ? 'active' : '' }}">
                <i class='bx bxs-news'></i>
                <span>News</span>
            </a>
            <a href="{{ route('admin.blogs.index') }}"
                class="sidebar-link {{ request()->routeIs('admin.blogs*') ? 'active' : '' }}">
                <i class='bx bxs-edit-alt'></i>
                <span>Blog Posts</span>
            </a>
            <a href="{{ route('admin.galleries.index') }}"
                class="sidebar-link {{ request()->routeIs('admin.galleries*') ? 'active' : '' }}">
                <i class='bx bxs-image-alt'></i>
                <span>Gallery</span>
            </a>
            <a href="{{ route('admin.testimonials.index') }}"
                class="sidebar-link {{ request()->routeIs('admin.testimonials*') ? 'active' : '' }}">
                <i class='bx bxs-quote-alt-left'></i>
                <span>Testimonials</span>
            </a>
            <a href="{{ route('admin.careers.index') }}"
                class="sidebar-link {{ request()->routeIs('admin.careers*') ? 'active' : '' }}">
                <i class='bx bxs-briefcase'></i>
                <span>Careers</span>
            </a>

            <div class="sidebar-label">Communications</div>
            <a href="{{ route('admin.enquiries.index') }}"
                class="sidebar-link {{ request()->routeIs('admin.enquiries*') ? 'active' : '' }}">
                <i class='bx bxs-envelope'></i>
                <span>Enquiries</span>
                @php $unreadCount = \App\Models\Enquiry::where('is_read', false)->count(); @endphp
                @if($unreadCount > 0)
                    <span class="badge">{{ $unreadCount }}</span>
                @endif
            </a>
        </nav>

        <div class="sidebar-footer">
            <a href="{{ route('home') }}" class="sidebar-link" target="_blank">
                <i class='bx bx-globe'></i>
                <span>View Site</span>
            </a>
        </div>
    </aside>

    <!-- Header -->
    <header class="admin-header">
        <h1 class="page-title">@yield('title', 'Dashboard')</h1>
        <div class="header-actions">
            <div class="header-user">
                <div class="user-avatar">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
                <span>{{ auth()->user()->name }}</span>
            </div>
            <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn-logout">
                    <i class='bx bx-log-out'></i> Logout
                </button>
            </form>
        </div>
    </header>

    <!-- Main Content -->
    <main class="admin-main">
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert-error">{{ session('error') }}</div>
        @endif
        @yield('content')
    </main>

    <script>
        // Mobile sidebar toggle
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.getElementById('adminSidebar');
            // Auto-dismiss alerts after 4s
            document.querySelectorAll('.alert-success, .alert-error').forEach(function (el) {
                setTimeout(function () { el.style.opacity = '0'; setTimeout(function () { el.remove(); }, 300); }, 4000);
            });
        });
    </script>
</body>

</html>