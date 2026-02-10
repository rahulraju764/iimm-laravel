@extends('layouts.admin')
@section('title', 'Manage News')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>All News</h3>
            <a href="{{ route('admin.news.create') }}" class="btn-success-sm"><i class='bx bx-plus'></i> Add News</a>
        </div>
        <div class="admin-card-body" style="padding:0;">
            @if($news->count())
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
                        @foreach($news as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>@if($item->image)<img src="{{ asset('storage/' . $item->image) }}" class="table-img">@else <span
                                style="color:var(--text-muted);">—</span> @endif</td>
                                <td style="color:var(--text-primary);font-weight:500;">{{ $item->title }}</td>
                                <td>{{ $item->published_at ? $item->published_at->format('d M Y') : '—' }}</td>
                                <td><span
                                        class="status-badge {{ $item->status ? 'active' : 'inactive' }}">{{ $item->status ? 'Active' : 'Inactive' }}</span>
                                </td>
                                <td>
                                    <div class="actions-cell">
                                        <a href="{{ route('admin.news.edit', $item) }}" class="btn-warning-sm"><i
                                                class='bx bx-edit'></i></a>
                                        <form action="{{ route('admin.news.destroy', $item) }}" method="POST"
                                            onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button
                                                class="btn-danger-sm"><i class='bx bx-trash'></i></button></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper" style="padding:20px;">{{ $news->links() }}</div>
            @else
                <div class="empty-state"><i class='bx bxs-news'></i>
                    <p>No news found.</p>
                </div>
            @endif
        </div>
    </div>
@endsection