@extends('layouts.admin')
@section('title', 'Add Event')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Create New Event</h3>
        </div>
        <div class="admin-card-body">
            @if($errors->any())
            <div class="alert-error">@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach</div>@endif
            <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-grid">
                    <div class="admin-form-group"><label>Title *</label><input type="text" name="title"
                            class="admin-form-control" value="{{ old('title') }}" required></div>
                    <div class="admin-form-group"><label>Date</label><input type="datetime-local" name="date"
                            class="admin-form-control" value="{{ old('date') }}"></div>
                    <div class="admin-form-group"><label>Location</label><input type="text" name="location"
                            class="admin-form-control" value="{{ old('location') }}"></div>
                    <div class="admin-form-group"><label>Image</label><input type="file" name="image"
                            class="admin-form-control" accept="image/*"></div>
                    <div class="admin-form-group full-width"><label>Description</label><textarea name="description"
                            class="admin-form-control">{{ old('description') }}</textarea></div>
                    <div class="admin-form-group">
                        <div class="form-check"><input type="checkbox" name="status" id="status" value="1" checked><label
                                for="status">Active</label></div>
                    </div>
                </div>
                <div class="form-actions"><button type="submit" class="btn-admin-primary btn-sm">Save Event</button><a
                        href="{{ route('admin.events.index') }}" class="btn-back">Cancel</a></div>
            </form>
        </div>
    </div>
@endsection