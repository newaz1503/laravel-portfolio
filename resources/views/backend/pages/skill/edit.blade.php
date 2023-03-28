
@extends('backend.layouts.app')

@section('title' ,'Skill')

@push('css')
    <style>
        label{
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Skill</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Skill</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-plus me-1"></i>
           <strong> Edit Skill Info</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.skill.update', $skill->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $skill->name ?? ''}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter name">
                    @if($errors->has('name'))
                        <div class="error text-danger">{{ $errors->first('name') }}</div>
                    @endif
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Percentage</label>
                    <input type="text" name="percentage" value="{{ $skill->percentage ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Percentage">
                    @if($errors->has('percentage'))
                        <div class="error text-danger">{{ $errors->first('percentage') }}</div>
                     @endif
                  </div>

                  <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('admin.skill.index') }}" class="btn btn-warning">
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
