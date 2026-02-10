@extends('layouts.admin')
@section('title', 'Manage Careers')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>All Career Posts</h3>
            <a href="{{ route('admin.careers.create') }}" class="btn-success-sm"><i class='bx bx-plus'></i> Add Career</a>
        </div>
        <div class="admin-card-body" style="padding:0;">
            @if($careers->count())
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($careers as $career)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="color:var(--text-primary);font-weight:500;">{{ $career->title }}</td>
                                <td>{{ $career->location ?? '—' }}</td>
                                <td>{{ $career->type }}</td>
                                <td><span
                                        class="status-badge {{ $career->status ? 'active' : 'inactive' }}">{{ $career->status ? 'Active' : 'Inactive' }}</span>
                                </td>
                                <td>
                                    <div class="actions-cell">
                                        <a href="{{ route('admin.careers.edit', $career) }}" class="btn-warning-sm"><i
                                                class='bx bx-edit'></i></a>
                                        <form action="{{ route('admin.careers.destroy', $career) }}" method="POST"
                                            onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button
                                                class="btn-danger-sm"><i class='bx bx-trash'></i></button></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper" style="padding:20px;">{{ $careers->links() }}</div>
            @else
                <div class="empty-state"><i class='bx bxs-briefcase'></i>
                    <p>No career posts found.</p>
                </div>
            @endif
        </div>
    </div>
@endsection