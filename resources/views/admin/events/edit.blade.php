@extends('layouts.admin')
@section('title', 'Edit Event')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Edit Event</h3>
        </div>
        <div class="admin-card-body">
            @if($errors->any())
            <div class="alert-error">@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach</div>@endif
            <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="form-grid">
                    <div class="admin-form-group"><label>Title *</label><input type="text" name="title"
                            class="admin-form-control" value="{{ old('title', $event->title) }}" required></div>
                    <div class="admin-form-group"><label>Date</label><input type="datetime-local" name="date"
                            class="admin-form-control"
                            value="{{ old('date', $event->date ? $event->date->format('Y-m-d\TH:i') : '') }}"></div>
                    <div class="admin-form-group"><label>Location</label><input type="text" name="location"
                            class="admin-form-control" value="{{ old('location', $event->location) }}"></div>
                    <div class="admin-form-group"><label>Image</label><input type="file" name="image"
                            class="admin-form-control" accept="image/*">@if($event->image)
                                <p style="margin-top:6px;color:var(--text-muted);font-size:12px;">Current:
                            {{ basename($event->image) }}</p>@endif
                    </div>
                    <div class="admin-form-group full-width"><label>Description</label><textarea name="description"
                            class="admin-form-control">{{ old('description', $event->description) }}</textarea></div>
                    <div class="admin-form-group">
                        <div class="form-check"><input type="checkbox" name="status" id="status" value="1" {{ $event->status ? 'checked' : '' }}><label for="status">Active</label></div>
                    </div>
                </div>
                <div class="form-actions"><button type="submit" class="btn-admin-primary btn-sm">Update Event</button><a
                        href="{{ route('admin.events.index') }}" class="btn-back">Cancel</a></div>
            </form>
        </div>
    </div>
@endsection