
@extends('backend.layouts.app')

@section('title' ,'Setting')

@push('css')
    <style>
        label{
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Change Password</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Setting</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-plus me-1"></i>
           <strong> Change Password</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.setting.update') }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Current/old Password</label>
                    <input type="password" name="current_password" class="form-control" id="exampleFormControlInput1" placeholder="Enter password">
                    @if($errors->has('current_password'))
                        <div class="error text-danger">{{ $errors->first('current_password') }}</div>
                    @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">New Password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter password">
                    @if($errors->has('password'))
                        <div class="error text-danger">{{ $errors->first('password') }}</div>
                    @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleFormControlInput1" placeholder="Enter password">

                  </div>

                  <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush
