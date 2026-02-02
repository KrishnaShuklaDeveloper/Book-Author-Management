@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Book Details</h2>
    </div>

    <div style="margin-bottom: 30px;">
        <h3>{{ $book->title }}</h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 20px;">
            <div>
                <strong>ISBN:</strong><br>
                {{ $book->isbn ?: 'N/A' }}
            </div>
            <div>
                <strong>Published Year:</strong><br>
                {{ $book->published_year ?: 'N/A' }}
            </div>
            <div>
                <strong>Author:</strong><br>
                <a href="{{ route('authors.show', $book->author->id) }}">{{ $book->author->name }}</a>
            </div>
        </div>

        @if($book->description)
            <div style="margin-top: 20px;">
                <strong>Description:</strong><br>
                <p style="margin-top: 10px; color: #666;">{{ $book->description }}</p>
            </div>
        @endif
    </div>

    <div style="margin-top: 30px; display: flex; gap: 10px;">
        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit Book</a>
        <a href="{{ route('books.index') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>
@endsection
