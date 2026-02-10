@extends('layouts.admin')
@section('title', 'Edit Course')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Edit Course</h3>
        </div>
        <div class="admin-card-body">
            @if($errors->any())
                <div class="alert-error">
                    @foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach
                </div>
            @endif
            <form action="{{ route('admin.courses.update', $course) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="form-grid">
                    <div class="admin-form-group">
                        <label>Title *</label>
                        <input type="text" name="title" class="admin-form-control"
                            value="{{ old('title', $course->title) }}" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Category</label>
                        <input type="text" name="category" class="admin-form-control"
                            value="{{ old('category', $course->category) }}">
                    </div>
                    <div class="admin-form-group">
                        <label>Duration</label>
                        <input type="text" name="duration" class="admin-form-control"
                            value="{{ old('duration', $course->duration) }}">
                    </div>
                    <div class="admin-form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="admin-form-control" accept="image/*">
                        @if($course->image)
                            <p style="margin-top:6px;color:var(--text-muted);font-size:12px;">Current:
                        {{ basename($course->image) }}</p>@endif
                    </div>
                    <div class="admin-form-group full-width">
                        <label>Description</label>
                        <textarea name="description"
                            class="admin-form-control">{{ old('description', $course->description) }}</textarea>
                    </div>
                    <div class="admin-form-group">
                        <div class="form-check">
                            <input type="checkbox" name="status" id="status" value="1" {{ $course->status ? 'checked' : '' }}>
                            <label for="status">Active</label>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-admin-primary btn-sm">Update Course</button>
                    <a href="{{ route('admin.courses.index') }}" class="btn-back">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection