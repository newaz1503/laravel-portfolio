
@extends('backend.layouts.app')

@section('title' ,'About')

@push('css')

@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">About List
        <a href="{{ route('admin.about.create') }}" class="btn btn-primary btn-md float-end">
            <i class="fas fa-plus me-1"></i>
            Edit About Item
        </a>
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">About</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            About List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>title</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>Image</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $about->title ?? '' }}</td>
                        <td>{{ $about->email ?? '' }}</td>
                        <td>{{ $about->phone ?? '' }}</td>
                        <td>
                            @if (!empty($about->image))
                                <img src="{{ asset('uploads/about/'.$about->image) }}" class="rounded" alt="img" style="width: 60px; height: 40px">
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush
