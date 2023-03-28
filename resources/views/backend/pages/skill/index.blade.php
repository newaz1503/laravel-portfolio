
@extends('backend.layouts.app')

@section('title' ,'Skill')

@push('css')

@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Skill List
        <a href="{{ route('admin.skill.create') }}" class="btn btn-primary btn-md float-end">
            <i class="fas fa-plus me-1"></i>
            Create New Skill
        </a>
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Skill</li>
    </ol>
    <div class="card mb-4">

    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Skill List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>name</th>
                        <th>percentage</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($skills) > 0)
                        @foreach ($skills as $key=>$skill)
                        <tr>
                            <td>1</td>
                            <td>{{ $skill->name ?? '' }}</td>
                            <td>{{ $skill->percentage ?? '' }}</td>
                            <td>
                                <a href="{{ route('admin.skill.edit', $skill->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirm('Are you sure to delete ?!!') && document.getElementById('deleteSkill').submit()">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <form action="{{ route('admin.skill.destroy', $skill->id) }}  }}" method="post" id="deleteSkill">
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
