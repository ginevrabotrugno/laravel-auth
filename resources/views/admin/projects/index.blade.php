@extends('layouts.app')

@section('content')

    <div class="container my-4">
        <h1 class="my-5">I MIEI PROGETTI</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>#id</th>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th> {{ $project->id }} </th>
                        <td> {{ $project->title }} </td>
                        <td> {{ ($project->start_date)->format('d/m/Y') }} </td>
                        <td> {{ $project->status }} </td>
                        <td class="text-center">
                            <a href="{{route('admin.projects.show', $project)}}" class="btn btn-success">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-warning">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
