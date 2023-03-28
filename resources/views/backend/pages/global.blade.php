
@extends('backend.layouts.app')

@section('title' ,'Global')

@push('css')
    <style>
        label{
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Global Setting</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Global</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-plus me-1"></i>
           <strong> Global Setting</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.global.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend class="text-muted"><h5>Profile Info</h5></legend>
                    <div class="row">
                        <div class="mb-4 col-lg-3">
                            <label for="exampleFormControlInput1" class="form-label">Profile Image</label>
                            <input type="file" name="image" >
                            @if($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}</div>
                            @endif
                            <div class="mt-2">
                                @if (!empty($global->profile_img))
                                    <img src="{{ asset('uploads/profile/'.$global->profile_img) }}" class="rounded" alt="img" style="width: 40px; height: 40px">
                                @endif
                            </div>
                        </div>
                        <div class="mb-3  col-lg-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" value="{{ $global->name ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                            @if($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="mb-3 col-lg-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $global->email ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
                            @if($errors->has('email'))
                                <div class="error text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                            <input type="text" name="phone" value="{{ $global->phone ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone">
                            @if($errors->has('phone'))
                                <div class="error text-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Location</label>
                            <input type="text" name="location" value="{{ $global->location ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter location">
                            @if($errors->has('location'))
                                <div class="error text-danger">{{ $errors->first('location') }}</div>
                            @endif
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Map</label>
                            <input type="text" name="map" value="{{ $global->map ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter map Url">
                            @if($errors->has('map'))
                                <div class="error text-danger">{{ $errors->first('map') }}</div>
                            @endif
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleFormControlInput1" class="form-label">Copyright</label>
                            <input type="text" name="copyright" value="{{ $global->copyright ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter copyright text">
                            @if($errors->has('copyright'))
                                <div class="error text-danger">{{ $errors->first('copyright') }}</div>
                            @endif
                        </div>
                        <div class="mb-4 col-lg-4">
                            <label for="exampleFormControlInput1" class="form-label">CV</label>
                            <input type="file" name="cv" >
                            @if($errors->has('cv'))
                                <div class="error text-danger">{{ $errors->first('cv') }}</div>
                            @endif
                            <div class="mt-2">
                                @if (!empty($global->cv))
                                    <p>{{ asset('uploads/cv/'.$global->cv) }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </fieldset>
                <hr>
                <fieldset class="py-1">
                    <legend class="text-muted"><h5>Social Info</h5></legend>
                    <div class="row">
                        <div class="mb-3 col-lg-4">
                            <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                            <input type="text" name="facebook" value="{{ $global->facebook ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Facebook url">
                            @if($errors->has('facebook'))
                                <div class="error text-danger">{{ $errors->first('facebook') }}</div>
                            @endif
                        </div>
                        <div class="mb-3  col-lg-4">
                            <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                            <input type="text" name="twitter" value="{{ $global->twitter ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Twitter url">
                            @if($errors->has('twitter'))
                                <div class="error text-danger">{{ $errors->first('twitter') }}</div>
                            @endif
                        </div>
                        <div class="mb-3  col-lg-4">
                            <label for="exampleFormControlInput1" class="form-label">LinkedIn</label>
                            <input type="text" name="linkedin" value="{{ $global->linkedin ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter LinkedIn url">
                            @if($errors->has('linkedin'))
                                <div class="error text-danger">{{ $errors->first('linkedin') }}</div>
                            @endif
                        </div>
                        <div class="mb-3  col-lg-4">
                            <label for="exampleFormControlInput1" class="form-label">Github</label>
                            <input type="text" name="github" value="{{ $global->github ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Github url">
                            @if($errors->has('github'))
                                <div class="error text-danger">{{ $errors->first('github') }}</div>
                            @endif
                        </div>
                        <div class="mb-3  col-lg-4">
                            <label for="exampleFormControlInput1" class="form-label">Skype</label>
                            <input type="text" name="skype" value="{{ $global->skype ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Skype url">
                            @if($errors->has('skype'))
                                <div class="error text-danger">{{ $errors->first('skype') }}</div>
                            @endif
                        </div>
                        <div class="mb-3  col-lg-4">
                            <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                            <input type="text" name="instagram" value="{{ $global->instagram ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Instagram url">
                            @if($errors->has('instagram'))
                                <div class="error text-danger">{{ $errors->first('instagram') }}</div>
                            @endif
                        </div>
                    </div>
                </fieldset>

                  <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

            </form>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush
