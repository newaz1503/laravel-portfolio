
@extends('backend.layouts.app')

@section('title' ,'Service')

@push('css')

@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Service List
        <a href="{{ route('admin.service.create') }}" class="btn btn-primary btn-md float-end">
            <i class="fas fa-plus me-1"></i>
            Create New Service
        </a>
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Service</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Service List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>title</th>
                        <th>description</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($services) > 0)
                        @foreach ($services as $key=>$service)
                        <tr>
                            <td>1</td>
                            <td>{{ $service->title ?? '' }}</td>
                            <td>{{ Str::limit($service->description ?? '', 30, '...') }}</td>
                            <td>
                                @if (!empty($service->icon))
                                    <i class="{{ $service->icon }}"></i>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirm('Are you sure to delete ?!!') && document.getElementById('deleteService').submit()">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <form action="{{ route('admin.service.destroy', $service->id) }}  }}" method="post" id="deleteService">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush
