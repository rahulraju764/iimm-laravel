@extends('layouts.admin')
@section('title', 'Edit Blog Post')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Edit Blog Post</h3>
        </div>
        <div class="admin-card-body">
            @if($errors->any())
            <div class="alert-error">@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach</div>@endif
            <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="form-grid">
                    <div class="admin-form-group"><label>Title *</label><input type="text" name="title"
                            class="admin-form-control" value="{{ old('title', $blog->title) }}" required></div>
                    <div class="admin-form-group"><label>Published Date</label><input type="date" name="published_at"
                            class="admin-form-control"
                            value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d') : '') }}">
                    </div>
                    <div class="admin-form-group"><label>Image</label><input type="file" name="image"
                            class="admin-form-control" accept="image/*">@if($blog->image)
                                <p style="margin-top:6px;color:var(--text-muted);font-size:12px;">Current:
                            {{ basename($blog->image) }}</p>@endif
                    </div>
                    <div class="admin-form-group">
                        <div class="form-check"><input type="checkbox" name="status" id="status" value="1" {{ $blog->status ? 'checked' : '' }}><label for="status">Active</label></div>
                    </div>
                    <div class="admin-form-group full-width"><label>Content</label><textarea name="content"
                            class="admin-form-control"
                            style="min-height:200px;">{{ old('content', $blog->content) }}</textarea></div>
                </div>
                <div class="form-actions"><button type="submit" class="btn-admin-primary btn-sm">Update Post</button><a
                        href="{{ route('admin.blogs.index') }}" class="btn-back">Cancel</a></div>
            </form>
        </div>
    </div>
@endsection