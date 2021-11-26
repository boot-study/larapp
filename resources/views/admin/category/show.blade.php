@extends('admin.layouts.app')

@section('title', $category->name)

@section('content')
    <h2>{{ $category->name }}</h2>

    <table class="table table-hover table-bordered">
        <tr>
            <th>Name</th>
            <td>{{ $category->name }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $category->get_statuses() }}</td>
        </tr>
        <tr>
            <th>Slug</th>
            <td>{{ $category->slug }}</td>
        </tr>
    </table>
@endsection
