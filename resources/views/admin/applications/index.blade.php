@extends('layouts.admin')
@section('title', 'Applications')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>All Applications</h3>
        </div>
        <div class="admin-card-body" style="padding:0;">
            @if($applications->count())
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applications as $app)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="color:var(--text-primary);font-weight:500;">
                                    {{ $app->first_name }} {{ $app->last_name }}
                                </td>
                                <td>{{ $app->course_name }}</td>
                                <td>{{ $app->email }}</td>
                                <td>{{ $app->phone ?? '—' }}</td>
                                <td><span
                                        class="status-badge {{ $app->is_read ? 'read' : 'unread' }}">{{ $app->is_read ? 'Read' : 'Unread' }}</span>
                                </td>
                                <td>{{ $app->created_at->format('d M Y') }}</td>
                                <td>
                                    <div class="actions-cell">
                                        <a href="{{ route('admin.applications.show', $app) }}" class="btn-info-sm"><i
                                                class='bx bx-show'></i></a>
                                        <form action="{{ route('admin.applications.destroy', $app) }}" method="POST"
                                            onsubmit="return confirm('Delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-danger-sm"><i class='bx bx-trash'></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper" style="padding:20px;">{{ $applications->links() }}</div>
            @else
                <div class="empty-state"><i class='bx bxs-file-doc'></i>
                    <p>No applications yet.</p>
                </div>
            @endif
        </div>
    </div>
@endsection