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

    <p><a href="{{ route('category.create') }}" class="btn btn-primary">+</a></p>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->status }}</td>
                    <td>{{ $category->slug }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection
