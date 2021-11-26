@extends('admin.layouts.app')

@section('title', 'Edit ' . $category->name)

@section('content')
    <h2>Edit {{ $category->name }}</h2>

{{--    @include('admin.includes.errors')--}}

    <form action="{{ route('category.update', ['category' => $category]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                    @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="status" class="control-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">---</option>
                        @foreach($statuses as $key => $status)
                            <option value="{{ $key }}" @if($category->status == $key) selected @endif>{{ $status }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </form>

@endsection
