@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1 class="my-5">New Project</h1>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action=" {{ route('admin.projects.update', $project) }} " method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value=" {{ old('title', $project->title) }}">
                @error('title')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10"> {{ old('description', $project->description) }} </textarea>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Data di Inizio</label>
                <input name="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" value="{{ old('start_date', $project->start_date ? $project->start_date->format('Y-m-d') : '') }}">
                @error('start_date')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">Data di Fine</label>
                <input name="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" value="{{ old('end_date', $project->end_date ? $project->end_date->format('Y-m-d') : '') }}">
                @error('end_date')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Stato</label>
                <input name="status" type="text" class="form-control @error('status') is-invalid @enderror" id="status" value=" {{ old('status', $project->status) }}">
                @error('status')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="project_url" class="form-label">URL Progetto</label>
                <input name="project_url" type="text" class="form-control @error('project_url') is-invalid @enderror" id="project_url" value=" {{ old('project_url', $project->project_url) }}">
                @error('project_url')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="technologies" class="form-label">Tecnologie</label>
                <input name="technologies" type="text" class="form-control @error('technologies') is-invalid @enderror" id="technologies" value=" {{ old('technologies', $project->technologies) }}">
                @error('technologies')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            <button type="submit" class="btn btn-warning">Modifica</button>
            <a href="{{route('admin.projects.index')}}" class="btn btn-secondary">Annulla</a>
        </form>
    </div>
@endsection



