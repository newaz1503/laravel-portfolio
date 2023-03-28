
@extends('backend.layouts.app')

@section('title' ,'Service')

@push('css')
    <style>
        label{
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Service Create</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Service</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-plus me-1"></i>
           <strong> Service Info Store</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.service.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control" id="exampleFormControlInput1" placeholder="Enter Icon">
                    @if($errors->has('icon'))
                        <div class="error text-danger">{{ $errors->first('icon') }}</div>
                    @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title">
                    @if($errors->has('title'))
                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                     @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <textarea name="description" rows="5"  class="form-control" placeholder="Enter Description"></textarea>
                    @if($errors->has('description'))
                        <div class="error text-danger">{{ $errors->first('description') }}</div>
                    @endif
                  </div>


                  <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('admin.service.index') }}" class="btn btn-warning">
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
