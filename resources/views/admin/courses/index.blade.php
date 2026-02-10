@extends('layouts.admin')
@section('title', 'Manage Courses')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>All Courses</h3>
            <a href="{{ route('admin.courses.create') }}" class="btn-success-sm"><i class='bx bx-plus'></i> Add Course</a>
        </div>
        <div class="admin-card-body" style="padding:0;">
            @if($courses->count())
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if($course->image)
                                        <img src="{{ asset('storage/' . $course->image) }}" class="table-img" alt="">
                                    @else
                                        <span style="color:var(--text-muted);">—</span>
                                    @endif
                                </td>
                                <td style="color:var(--text-primary); font-weight:500;">{{ $course->title }}</td>
                                <td>{{ $course->category ?? '—' }}</td>
                                <td>{{ $course->duration ?? '—' }}</td>
                                <td>
                                    <span class="status-badge {{ $course->status ? 'active' : 'inactive' }}">
                                        {{ $course->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="actions-cell">
                                        <a href="{{ route('admin.courses.edit', $course) }}" class="btn-warning-sm"><i
                                                class='bx bx-edit'></i></a>
                                        <form action="{{ route('admin.courses.destroy', $course) }}" method="POST"
                                            onsubmit="return confirm('Delete this course?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn-danger-sm"><i class='bx bx-trash'></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper" style="padding:20px;">{{ $courses->links() }}</div>
            @else
                <div class="empty-state">
                    <i class='bx bxs-book-open'></i>
                    <p>No courses found. Click "Add Course" to create one.</p>
                </div>
            @endif
        </div>
    </div>
@endsection