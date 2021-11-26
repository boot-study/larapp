@extends('admin.layouts.app')

@section('title', 'Categories')

@section('content')
    <h2>Categories</h2>

    @if(@session('created_successfully'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">{{ @session('created_successfully') }}</div>
            </div>
        </div>
    @endif

    @if(@session('updated_successfully'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">{{ @session('updated_successfully') }}</div>
            </div>
        </div>
    @endif

    @if(@session('deleted_successfully'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">{{ @session('deleted_successfully') }}</div>
            </div>
        </div>
    @endif

    <p><a href="{{ route('category.create') }}" class="btn btn-primary">+</a></p>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Slug</th>
            <th></th>
        </tr>
        <tr>
            <form action="">
                <td><input type="text" class="form-control"></td>
            </form>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->status }}</td>
                <td>{{ $category->slug }}</td>
                <th>
                    <a href="{{ route('category.show', ['category' => $category->id]) }}" class="btn btn-secondary">Show</a>
                    <a href="{{ route('category.edit', ['category' => $category->id]) }}" class="btn btn-info">Update</a>
                    <form action="{{ route('category.destroy', ['category' => $category]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection
