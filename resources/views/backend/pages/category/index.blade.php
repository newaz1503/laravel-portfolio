
@extends('backend.layouts.app')

@section('title' ,'Category')

@push('css')

@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Category List
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-md float-end">
            <i class="fas fa-plus me-1"></i>
            Create New Category
        </a>
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Category</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Category List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>name</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($categories) > 0)
                        @foreach ($categories as $key=>$category)
                        <tr>
                            <td>1</td>
                            <td>{{ $category->name ?? '' }}</td>
                            <td>
                                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirm('Are you sure to delete ?!!') && document.getElementById('deleteCategory').submit()">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <form action="{{ route('admin.category.destroy', $category->id) }}  }}" method="post" id="deleteCategory">
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
