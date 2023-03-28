
@extends('backend.layouts.app')

@section('title' ,'Hero')

@push('css')

@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Hero List
        <a href="{{ route('admin.hero.create') }}" class="btn btn-primary btn-md float-end">
            <i class="fas fa-plus me-1"></i>
            Edit Hero Item
        </a>
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Hero</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Hero List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Image</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $hero->title ?? '' }}</td>
                        <td>Edinburgh</td>
                        <td>
                            @if (!empty($hero->image))
                                <img src="{{ asset('uploads/hero/'.$hero->image) }}" class="rounded" alt="img" style="width: 60px; height: 40px">
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
