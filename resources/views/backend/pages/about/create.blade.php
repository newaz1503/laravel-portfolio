
@extends('backend.layouts.app')

@section('title' ,'About')

@push('css')
    <style>
        label{
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">About Create</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">About</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-plus me-1"></i>
           <strong> About Info Store</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" name="name" value="{{ $about->title ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter title">
                    @if($errors->has('name'))
                        <div class="error text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                   <textarea name="description" rows="5"  class="form-control" placeholder="Enter Description">{{ $about->description ?? '' }}</textarea>
                    @if($errors->has('description'))
                        <div class="error text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $about->email ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
                    @if($errors->has('email'))
                        <div class="error text-danger">{{ $errors->first('email') }}</div>
                     @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Website</label>
                    <input type="text" name="website" value="{{ $about->website ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Website">
                    @if($errors->has('website'))
                        <div class="error text-danger">{{ $errors->first('website') }}</div>
                     @endif
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Birthday</label>
                    <input type="text" name="birthday" value="{{ $about->birthday ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Birthday">
                    @if($errors->has('birthday'))
                        <div class="error text-danger">{{ $errors->first('birthday') }}</div>
                     @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Age</label>
                    <input type="text" name="age" value="{{ $about->age ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Age">
                    @if($errors->has('age'))
                        <div class="error text-danger">{{ $errors->first('age') }}</div>
                     @endif
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" name="phone" value="{{ $about->phone ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone">
                    @if($errors->has('phone'))
                        <div class="error text-danger">{{ $errors->first('phone') }}</div>
                     @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Degree</label>
                    <input type="text" name="degree" value="{{ $about->degree ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Degree">
                    @if($errors->has('degree'))
                        <div class="error text-danger">{{ $errors->first('degree') }}</div>
                     @endif
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">City</label>
                    <input type="text" name="city" value="{{ $about->city ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter City">
                    @if($errors->has('city'))
                        <div class="error text-danger">{{ $errors->first('city') }}</div>
                     @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Freelance</label>
                    <input type="text" name="freelance" value="{{ $about->freelance ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Freelance">
                    @if($errors->has('freelance'))
                        <div class="error text-danger">{{ $errors->first('freelance') }}</div>
                     @endif
                  </div>
                  <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">About Image</label>
                    <input type="file" name="image" class="form-control" >
                    @if($errors->has('image'))
                        <div class="error text-danger">{{ $errors->first('image') }}</div>
                     @endif
                     <div class="mt-2">
                        @if (!empty($about->image))
                            <img src="{{ asset('uploads/about/'.$about->image) }}" class="rounded" alt="img" style="width: 120px; height: 100px">
                        @endif
                     </div>
                  </div>
                  <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('admin.about') }}" class="btn btn-warning">
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
