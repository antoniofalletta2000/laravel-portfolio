@extends('layouts.projects')

{{-- @dd($project) --}}

@section('title', $project->nome)

@section('content')
<a class="btn btn-warning" type="submit" href="{{route("projects.edit", $project)}}">Modifica</a>
    <div class="d-flex flex-column gap-3">
        <div>
            <h3>A chi è rivolto?</h3>
            <p>{{ $project->cliente }}</p>
        </div>

        <div>
            <h3>Riassunto</h3>
            <p>{{ $project->riassunto }}</p>
        </div>

        <div>
            <h3>Data</h3>
            <p>{{ $project->periodo }}</p>
        </div>
    </div>







@endsection
