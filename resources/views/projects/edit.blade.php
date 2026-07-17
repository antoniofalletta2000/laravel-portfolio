@extends('layouts.projects')

@section('title', 'Modifica un progetto')

@section('content')

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-control">
            <div class="d-flex flex-column">
                <label class="fw-bold" for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ $project->nome }}">
            </div>

            <div class="d-flex flex-column">
                <label class="fw-bold" for="cliente">cliente</label>
                <input type="text" name="cliente" id="cliente" value="{{ $project->cliente }}">
            </div>

            <div class="d-flex flex-column">
                <label class="fw-bold" for="periodo">data (Anno-Mese-Giorno)</label>
                <input type="text" name="periodo" id="periodo" value="{{ $project->periodo }}">
            </div>

            <div class="form-control my-3 d-flex flex-wrap">
            @foreach ($technologies as $technology)
                <div class="technology me-2">
                    <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->id}}" {{$project->technologies->contains($technology->id) ? "checked" : " "}}>
                    <label for="technology-{{$technology->id}}">{{ $technology->nome }}</label>
                </div>
            @endforeach
        </div>

            <div class="d-flex flex-column">
                <label class="fw-bold" for="riassunto">riassunto</label>
                <input type="text" name="riassunto" id="riassunto" value="{{ $project->riassunto }}">
            </div>

            <div class="d-flex flex-column">
                <div class="d-flex flex-column">
                    <label class="fw-bold" for="type_id">tipologia</label>
                    <select name="type_id" id="type_id">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <input class="mt-5" type="submit" value="Salva">

        </div>


    </form>

@endsection
