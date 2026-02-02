@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Books Management</h2>
            <a href="{{ route('books.create') }}" class="btn btn-success">+ Add New Book</a>
        </div>
    </div>

    <!-- Search Form -->
    <div class="search-container" style="padding: 15px; background: #f8f9fa; border-bottom: 1px solid #dee2e6;">
        <form action="{{ route('books.index') }}" method="GET" style="display: flex; gap: 10px; max-width: 500px;">
            <input type="text" name="search" placeholder="Search books by title, ISBN, description or author..." 
                   value="{{ $search ?? '' }}" 
                   style="flex: 1; padding: 10px; border: 1px solid #ced4da; border-radius: 4px;">
            <button type="submit" class="btn btn-primary">Search</button>
            @if(isset($search) && $search)
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Clear</a>
            @endif
        </form>
    </div>

    @if($books->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Author</th>
                    <th>Published Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td><strong>{{ $book->title }}</strong></td>
                        <td>{{ $book->isbn }}</td>
                        <td>
                            <a href="{{ route('authors.show', $book->author->id) }}">{{ $book->author->name }}</a>
                        </td>
                        <td>{{ $book->published_year }}</td>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="text-center mt-4">
            <p>No books found. Start by adding your first book!</p>
            <a href="{{ route('books.create') }}" class="btn btn-success mt-4">+ Add New Book</a>
        </div>
    @endif
</div>
@endsection
