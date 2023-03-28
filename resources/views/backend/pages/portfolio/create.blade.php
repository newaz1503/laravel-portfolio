@extends('backend.layouts.app')

@section('title', 'Portfolio')

@push('css')
    <style>
        label {
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Portfolio Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Portfolio</li>
        </ol>
        <div class="card mb-4">

        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-plus me-1"></i>
                <strong> Portfolio Info Store</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.portfolio.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category</label>
                        <select name="category_id" class="form-control">
                            <option value="" selected disabled>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name ?? '' }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                            <div class="error text-danger">{{ $errors->first('category_id') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" />

                        @if ($errors->has('title'))
                            <div class="error text-danger">{{ $errors->first('title') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Portfolio Url</label>
                        <input type="text" name="url" class="form-control" id="exampleFormControlInput1" placeholder="Enter Url" />
                        @if ($errors->has('url'))
                            <div class="error text-danger">{{ $errors->first('url') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                       <input type="file" name="image">
                       @if ($errors->has('image'))
                             <div class="error text-danger">{{ $errors->first('image') }}</div>
                        @endif
                    </div>

                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.portfolio.index') }}" class="btn btn-warning">
                            Back
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
