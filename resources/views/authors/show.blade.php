@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Author Details</h2>
    </div>

    <div style="margin-bottom: 30px;">
        <h3>{{ $author->name }}</h3>
        @if($author->bio)
            <p style="margin-top: 15px; color: #666;">{{ $author->bio }}</p>
        @endif
    </div>

    @if($author->books->count() > 0)
        <h3 style="margin-bottom: 15px;">Books by {{ $author->name }}</h3>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Published Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($author->books as $book)
                    <tr>
                        <td><strong>{{ $book->title }}</strong></td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->published_year }}</td>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="text-center mt-4">
            <p>No books found for this author.</p>
            <a href="{{ route('books.create') }}?author_id={{ $author->id }}" class="btn btn-success mt-4">+ Add Book for This Author</a>
        </div>
    @endif

    <div style="margin-top: 30px; display: flex; gap: 10px;">
        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit Author</a>
        <a href="{{ route('authors.index') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>
@endsection
