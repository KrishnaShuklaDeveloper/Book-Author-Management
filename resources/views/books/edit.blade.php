@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Edit Book</h2>
    </div>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Book Title *</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required>
            @error('title')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="author_id">Author *</label>
            <select id="author_id" name="author_id" required>
                <option value="">Select an Author</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ old('author_id', $book->author_id) == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
            @error('author_id')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" value="{{ old('isbn', $book->isbn) }}">
            @error('isbn')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="published_year">Published Year</label>
            <input type="number" id="published_year" name="published_year" value="{{ old('published_year', $book->published_year) }}" min="1800" max="2100">
            @error('published_year')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4">{{ old('description', $book->description) }}</textarea>
            @error('description')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" class="btn btn-success">Update Book</button>
            <a href="{{ route('books.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </form>
</div>
@endsection
