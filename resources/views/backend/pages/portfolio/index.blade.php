
@extends('backend.layouts.app')

@section('title' ,'Portfolio')

@push('css')

@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Portfolio List
        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary btn-md float-end">
            <i class="fas fa-plus me-1"></i>
            Create New Portfolio
        </a>
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Portfolio</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Portfolio List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>category</th>
                        <th>title</th>
                        <th>url</th>
                        <th>image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $key=>$portfolio)
                        <tr>
                            <td>1</td>
                            <td>{{ $portfolio->category->name ?? '' }}</td>
                            <td>{{ $portfolio->title ?? '' }}</td>
                            <td>{{ Str::limit($portfolio->url ?? '', 20, '...') }}</td>
                            <td>
                                <img src="{{ asset('uploads/portfolio/'. $portfolio->image ?? '') }}" alt="portfolio" width="100" height="80">
                            </td>
                            <td>
                                <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirm('Are you sure to delete ?!!') && document.getElementById('deletePortfolio').submit()">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}  }}" method="post" id="deletePortfolio">
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
