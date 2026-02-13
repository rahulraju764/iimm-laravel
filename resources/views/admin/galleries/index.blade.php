@extends('layouts.admin')
@section('title', 'Manage Gallery')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Gallery Images</h3>
            <a href="{{ route('admin.galleries.create') }}" class="btn-success-sm"><i class='bx bx-plus'></i> Upload
                Image</a>
        </div>
        <div class="admin-card-body" style="padding:0;">
            @if($galleries->count())
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>

                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $gallery)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('storage/' . $gallery->image) }}" class="table-img"></td>
                                <td style="color:var(--text-primary);font-weight:500;">{{ $gallery->title ?? '—' }}</td>

                                <td><span
                                        class="status-badge {{ $gallery->status ? 'active' : 'inactive' }}">{{ $gallery->status ? 'Active' : 'Inactive' }}</span>
                                </td>
                                <td>
                                    <div class="actions-cell">
                                        <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn-warning-sm"><i
                                                class='bx bx-edit'></i></a>
                                        <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST"
                                            onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button
                                                class="btn-danger-sm"><i class='bx bx-trash'></i></button></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper" style="padding:20px;">{{ $galleries->links() }}</div>
            @else
                <div class="empty-state"><i class='bx bxs-image-alt'></i>
                    <p>No images in gallery.</p>
                </div>
            @endif
        </div>
    </div>
@endsection