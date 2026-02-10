@extends('layouts.admin')
@section('title', 'Add News')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Create News Article</h3>
        </div>
        <div class="admin-card-body">
            @if($errors->any())
            <div class="alert-error">@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach</div>@endif
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-grid">
                    <div class="admin-form-group"><label>Title *</label><input type="text" name="title"
                            class="admin-form-control" value="{{ old('title') }}" required></div>
                    <div class="admin-form-group"><label>Published Date</label><input type="date" name="published_at"
                            class="admin-form-control" value="{{ old('published_at') }}"></div>
                    <div class="admin-form-group"><label>Image</label><input type="file" name="image"
                            class="admin-form-control" accept="image/*"></div>
                    <div class="admin-form-group">
                        <div class="form-check"><input type="checkbox" name="status" id="status" value="1" checked><label
                                for="status">Active</label></div>
                    </div>
                    <div class="admin-form-group full-width"><label>Content</label><textarea name="content"
                            class="admin-form-control" style="min-height:200px;">{{ old('content') }}</textarea></div>
                </div>
                <div class="form-actions"><button type="submit" class="btn-admin-primary btn-sm">Save News</button><a
                        href="{{ route('admin.news.index') }}" class="btn-back">Cancel</a></div>
            </form>
        </div>
    </div>
@endsection