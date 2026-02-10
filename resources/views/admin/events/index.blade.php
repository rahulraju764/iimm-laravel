@extends('layouts.admin')
@section('title', 'Manage Events')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>All Events</h3>
            <a href="{{ route('admin.events.create') }}" class="btn-success-sm"><i class='bx bx-plus'></i> Add Event</a>
        </div>
        <div class="admin-card-body" style="padding:0;">
            @if($events->count())
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>@if($event->image)<img src="{{ asset('storage/' . $event->image) }}" class="table-img">@else
                                <span style="color:var(--text-muted);">—</span> @endif</td>
                                <td style="color:var(--text-primary);font-weight:500;">{{ $event->title }}</td>
                                <td>{{ $event->date ? $event->date->format('d M Y') : '—' }}</td>
                                <td>{{ $event->location ?? '—' }}</td>
                                <td><span
                                        class="status-badge {{ $event->status ? 'active' : 'inactive' }}">{{ $event->status ? 'Active' : 'Inactive' }}</span>
                                </td>
                                <td>
                                    <div class="actions-cell">
                                        <a href="{{ route('admin.events.edit', $event) }}" class="btn-warning-sm"><i
                                                class='bx bx-edit'></i></a>
                                        <form action="{{ route('admin.events.destroy', $event) }}" method="POST"
                                            onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button
                                                class="btn-danger-sm"><i class='bx bx-trash'></i></button></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper" style="padding:20px;">{{ $events->links() }}</div>
            @else
                <div class="empty-state"><i class='bx bxs-calendar-event'></i>
                    <p>No events found.</p>
                </div>
            @endif
        </div>
    </div>
@endsection