
@extends('backend.layouts.app')

@section('title' ,'Hero')

@push('css')
    <style>
        label{
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Hero Create</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Hero</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-plus me-1"></i>
           <strong> Hero Info Store</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.hero.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $hero->title ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Full Name">
                    @if($errors->has('name'))
                        <div class="error text-danger">{{ $errors->first('name') }}</div>
                    @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Type</label>
                    <input type="text" name="type" value="{{ $hero->sub_title ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Type">
                    @if($errors->has('type'))
                        <div class="error text-danger">{{ $errors->first('type') }}</div>
                     @endif
                  </div>
                  <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Hero Image</label>
                    <input type="file" name="image" class="form-control" >
                    @if($errors->has('image'))
                        <div class="error text-danger">{{ $errors->first('image') }}</div>
                     @endif
                     <div class="mt-2">
                        <img src="{{ asset('uploads/hero/'.$hero->image) }}" class="rounded" alt="img" style="width: 120px; height: 100px">
                     </div>
                  </div>
                  <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('admin.hero') }}" class="btn btn-warning">
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
