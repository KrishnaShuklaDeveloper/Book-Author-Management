@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Authors Management</h2>
            <a href="{{ route('authors.create') }}" class="btn btn-success">+ Add New Author</a>
        </div>
    </div>

    <!-- Search Form -->
    <div class="search-container" style="padding: 15px; background: #f8f9fa; border-bottom: 1px solid #dee2e6;">
        <form action="{{ route('authors.index') }}" method="GET" style="display: flex; gap: 10px; max-width: 500px;">
            <input type="text" name="search" placeholder="Search authors by name or bio..." 
                   value="{{ $search ?? '' }}" 
                   style="flex: 1; padding: 10px; border: 1px solid #ced4da; border-radius: 4px;">
            <button type="submit" class="btn btn-primary">Search</button>
            @if(isset($search) && $search)
                <a href="{{ route('authors.index') }}" class="btn btn-secondary">Clear</a>
            @endif
        </form>
    </div>

    @if($authors->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Bio</th>
                    <th>Books Count</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td><strong>{{ $author->name }}</strong></td>
                        <td>{{ Str::limit($author->bio, 50) }}</td>
                        <td>
                            <span class="badge badge-info">{{ $author->books->count() }} books</span>
                        </td>
                        <td>
                            <a href="{{ route('authors.show', $author->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this author? All their books will also be deleted.')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="text-center mt-4">
            <p>No authors found. Start by adding your first author!</p>
            <a href="{{ route('authors.create') }}" class="btn btn-success mt-4">+ Add New Author</a>
        </div>
    @endif
</div>
@endsection
