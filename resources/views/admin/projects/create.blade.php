@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <form action=" {{ route('admin.projects.store') }} " method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input name="text" type="text" class="form-control" id="title" value=" {{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10"> {{ old('description') }} </textarea>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Data di Inizio</label>
                <input name="start_date" type="date" class="form-control" id="start_date" value=" {{ old('start_date') }}">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">Data di Fine</label>
                <input name="end_date" type="date" class="form-control" id="end_date" value=" {{ old('end_date') }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Stato</label>
                <input name="status" type="text" class="form-control" id="status" value=" {{ old('status') }}">
            </div>
            <div class="mb-3">
                <label for="project_url" class="form-label">URL Progetto</label>
                <input name="'project_url" type="text" class="form-control" id="project_url" value=" {{ old('project_url') }}">
            </div>
            <div class="mb-3">
                <label for="technologies" class="form-label">Tecnologie</label>
                <input name="'technologies" type="text" class="form-control" id="technologies" value=" {{ old('technologies') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
@endsection
