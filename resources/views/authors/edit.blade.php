@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Edit Author</h2>
    </div>

    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Author Name *</label>
            <input type="text" id="name" name="name" value="{{ old('name', $author->name) }}" required>
            @error('name')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="bio">Biography</label>
            <textarea id="bio" name="bio" rows="4">{{ old('bio', $author->bio) }}</textarea>
            @error('bio')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" class="btn btn-success">Update Author</button>
            <a href="{{ route('authors.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </form>
</div>
@endsection
