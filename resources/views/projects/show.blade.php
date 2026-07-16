@extends('layouts.projects')

{{-- @dd($project) --}}

@section('title', $project->nome)

@section('content')
    <a class="btn btn-warning" type="submit" href="{{ route('projects.edit', $project) }}">Modifica</a>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Cancella
    </button>



    <div class="d-flex flex-column gap-3 pt-4">
        {{-- @dd($types) --}}
         <div>
            <h3>Tipologia</h3>
            <p>{{ $project->type->nome }}</p>
        </div>
        <div>
            <h3>A chi è rivolto?</h3>
            <p>{{ $project->cliente }}</p>
        </div>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Stai eliminando il progetto definitivamente. Sei sicuro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input class="btn btn-danger" type="submit" value="Elimina">
                    </form>
                </div>
            </div>
        </div>
    </div>





@endsection
