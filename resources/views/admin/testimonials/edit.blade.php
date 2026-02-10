@extends('layouts.admin')
@section('title', 'Edit Testimonial')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Edit Testimonial</h3>
        </div>
        <div class="admin-card-body">
            @if($errors->any())
            <div class="alert-error">@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach</div>@endif
            <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST"
                enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="form-grid">
                    <div class="admin-form-group"><label>Name *</label><input type="text" name="name"
                            class="admin-form-control" value="{{ old('name', $testimonial->name) }}" required></div>
                    <div class="admin-form-group"><label>Designation</label><input type="text" name="designation"
                            class="admin-form-control" value="{{ old('designation', $testimonial->designation) }}"></div>
                    <div class="admin-form-group"><label>Image</label><input type="file" name="image"
                            class="admin-form-control" accept="image/*">@if($testimonial->image)
                                <p style="margin-top:6px;color:var(--text-muted);font-size:12px;">Current:
                            {{ basename($testimonial->image) }}</p>@endif
                    </div>
                    <div class="admin-form-group">
                        <div class="form-check"><input type="checkbox" name="status" id="status" value="1" {{ $testimonial->status ? 'checked' : '' }}><label for="status">Active</label></div>
                    </div>
                    <div class="admin-form-group full-width"><label>Content *</label><textarea name="content"
                            class="admin-form-control" required>{{ old('content', $testimonial->content) }}</textarea></div>
                </div>
                <div class="form-actions"><button type="submit" class="btn-admin-primary btn-sm">Update
                        Testimonial</button><a href="{{ route('admin.testimonials.index') }}" class="btn-back">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection