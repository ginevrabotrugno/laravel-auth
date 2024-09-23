@extends('layouts.app')

@section('content')

    <div class="container my-4">
        <h1>
            {{ $project->title }}
            <a href="#" class="btn btn-warning">
                <i class="fa-solid fa-pencil"></i>
            </a>
            <a href="#" class="btn btn-danger">
                <i class="fa-solid fa-trash"></i>
            </a>
        </h1>

        <h5 class="mx-4"> {{ $project->technologies }} </h5>

        <ul class="list-group list-group-flush my-4">
            <li class="list-group-item">
                <strong>Data di Inizio: </strong>
                <span> {{ $project->start_date }} </span>
            </li>
            <li class="list-group-item">
                <strong>Data di Fine: </strong>
                <span> {{ $project->end_date }} </span>
            </li>
            <li class="list-group-item">
                <strong>Stato: </strong>
                <span> {{ $project->status }} </span>
            </li>
            <li class="list-group-item">
                <a href="{{ $project->project_url }}">Link Progetto</a>
            </li>
        </ul>

        <p class="my-4">
            {{ $project->description }}
        </p>

        <a href="{{route('admin.projects.index')}}" class="btn btn-primary">
            Tutti i Progetti
        </a>
    </div>
@endsection
