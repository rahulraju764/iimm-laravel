@extends('layouts.admin')
@section('title', 'Manage Blog Posts')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>All Blog Posts</h3>
            <a href="{{ route('admin.blogs.create') }}" class="btn-success-sm"><i class='bx bx-plus'></i> Add Post</a>
        </div>
        <div class="admin-card-body" style="padding:0;">
            @if($blogs->count())
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Published</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>@if($blog->image)<img src="{{ asset('storage/' . $blog->image) }}" class="table-img">@else <span
                                style="color:var(--text-muted);">—</span> @endif</td>
                                <td style="color:var(--text-primary);font-weight:500;">{{ $blog->title }}</td>
                                <td>{{ $blog->published_at ? $blog->published_at->format('d M Y') : '—' }}</td>
                                <td><span
                                        class="status-badge {{ $blog->status ? 'active' : 'inactive' }}">{{ $blog->status ? 'Active' : 'Inactive' }}</span>
                                </td>
                                <td>
                                    <div class="actions-cell">
                                        <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn-warning-sm"><i
                                                class='bx bx-edit'></i></a>
                                        <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST"
                                            onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button
                                                class="btn-danger-sm"><i class='bx bx-trash'></i></button></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper" style="padding:20px;">{{ $blogs->links() }}</div>
            @else
                <div class="empty-state"><i class='bx bxs-edit-alt'></i>
                    <p>No blog posts found.</p>
                </div>
            @endif
        </div>
    </div>
@endsection