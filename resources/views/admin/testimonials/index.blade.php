@extends('layouts.admin')
@section('title', 'Manage Testimonials')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>All Testimonials</h3>
            <a href="{{ route('admin.testimonials.create') }}" class="btn-success-sm"><i class='bx bx-plus'></i> Add
                Testimonial</a>
        </div>
        <div class="admin-card-body" style="padding:0;">
            @if($testimonials->count())
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $t)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>@if($t->image)<img src="{{ asset('storage/' . $t->image) }}" class="table-img">@else <span
                                style="color:var(--text-muted);">—</span> @endif</td>
                                <td style="color:var(--text-primary);font-weight:500;">{{ $t->name }}</td>
                                <td>{{ $t->designation ?? '—' }}</td>
                                <td><span
                                        class="status-badge {{ $t->status ? 'active' : 'inactive' }}">{{ $t->status ? 'Active' : 'Inactive' }}</span>
                                </td>
                                <td>
                                    <div class="actions-cell">
                                        <a href="{{ route('admin.testimonials.edit', $t) }}" class="btn-warning-sm"><i
                                                class='bx bx-edit'></i></a>
                                        <form action="{{ route('admin.testimonials.destroy', $t) }}" method="POST"
                                            onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button
                                                class="btn-danger-sm"><i class='bx bx-trash'></i></button></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper" style="padding:20px;">{{ $testimonials->links() }}</div>
            @else
                <div class="empty-state"><i class='bx bxs-quote-alt-left'></i>
                    <p>No testimonials found.</p>
                </div>
            @endif
        </div>
    </div>
@endsection