@extends('layouts.admin')
@section('title', 'Edit Image')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Edit Gallery Image</h3>
        </div>
        <div class="admin-card-body">
            @if($errors->any())
            <div class="alert-error">@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach</div>@endif
            <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="form-grid">
                    <div class="admin-form-group"><label>Title</label><input type="text" name="title"
                            class="admin-form-control" value="{{ old('title', $gallery->title) }}"></div>

                    <div class="admin-form-group"><label>Image</label><input type="file" name="image"
                            class="admin-form-control" accept="image/*">
                        <p style="margin-top:6px;color:var(--text-muted);font-size:12px;">Current:
                            {{ basename($gallery->image) }}</p>
                    </div>
                    <div class="admin-form-group">
                        <div class="form-check"><input type="checkbox" name="status" id="status" value="1" {{ $gallery->status ? 'checked' : '' }}><label for="status">Active</label></div>
                    </div>
                </div>
                <div class="form-actions"><button type="submit" class="btn-admin-primary btn-sm">Update</button><a
                        href="{{ route('admin.galleries.index') }}" class="btn-back">Cancel</a></div>
            </form>
        </div>
    </div>
@endsection