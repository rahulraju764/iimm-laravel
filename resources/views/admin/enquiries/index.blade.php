@extends('layouts.admin')
@section('title', 'Enquiries')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>All Enquiries</h3>
        </div>
        <div class="admin-card-body" style="padding:0;">
            @if($enquiries->count())
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enquiries as $enq)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="color:var(--text-primary);font-weight:500;">{{ $enq->name }}</td>
                                <td>{{ $enq->email }}</td>
                                <td>{{ $enq->phone ?? '—' }}</td>
                                <td><span
                                        class="status-badge {{ $enq->is_read ? 'read' : 'unread' }}">{{ $enq->is_read ? 'Read' : 'Unread' }}</span>
                                </td>
                                <td>{{ $enq->created_at->format('d M Y') }}</td>
                                <td>
                                    <div class="actions-cell">
                                        <a href="{{ route('admin.enquiries.show', $enq) }}" class="btn-info-sm"><i
                                                class='bx bx-show'></i></a>
                                        <form action="{{ route('admin.enquiries.destroy', $enq) }}" method="POST"
                                            onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button
                                                class="btn-danger-sm"><i class='bx bx-trash'></i></button></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper" style="padding:20px;">{{ $enquiries->links() }}</div>
            @else
                <div class="empty-state"><i class='bx bxs-envelope'></i>
                    <p>No enquiries yet.</p>
                </div>
            @endif
        </div>
    </div>
@endsection