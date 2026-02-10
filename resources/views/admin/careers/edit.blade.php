@extends('layouts.admin')
@section('title', 'Edit Career')

@section('content')
    <div class="admin-card">
        <div class="admin-card-header">
            <h3>Edit Career Post</h3>
        </div>
        <div class="admin-card-body">
            @if($errors->any())
            <div class="alert-error">@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach</div>@endif
            <form action="{{ route('admin.careers.update', $career) }}" method="POST">
                @csrf @method('PUT')
                <div class="form-grid">
                    <div class="admin-form-group"><label>Title *</label><input type="text" name="title"
                            class="admin-form-control" value="{{ old('title', $career->title) }}" required></div>
                    <div class="admin-form-group"><label>Location</label><input type="text" name="location"
                            class="admin-form-control" value="{{ old('location', $career->location) }}"></div>
                    <div class="admin-form-group">
                        <label>Type</label>
                        <select name="type" class="admin-form-control">
                            <option value="Full-time" {{ $career->type == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                            <option value="Part-time" {{ $career->type == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                            <option value="Contract" {{ $career->type == 'Contract' ? 'selected' : '' }}>Contract</option>
                            <option value="Internship" {{ $career->type == 'Internship' ? 'selected' : '' }}>Internship
                            </option>
                        </select>
                    </div>
                    <div class="admin-form-group">
                        <div class="form-check"><input type="checkbox" name="status" id="status" value="1" {{ $career->status ? 'checked' : '' }}><label for="status">Active</label></div>
                    </div>
                    <div class="admin-form-group full-width"><label>Description</label><textarea name="description"
                            class="admin-form-control">{{ old('description', $career->description) }}</textarea></div>
                </div>
                <div class="form-actions"><button type="submit" class="btn-admin-primary btn-sm">Update Career</button><a
                        href="{{ route('admin.careers.index') }}" class="btn-back">Cancel</a></div>
            </form>
        </div>
    </div>
@endsection