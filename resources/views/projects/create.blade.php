@extends('layouts.projects')

@section('title', 'Aggiungi un progetto')

@section('content')

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-control">
            <div class="d-flex flex-column">
                <label class="fw-bold" for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="d-flex flex-column">
                <label class="fw-bold" for="cliente">cliente</label>
                <input type="text" name="cliente" id="cliente">
            </div>
            <div class="d-flex flex-column">
                <label class="fw-bold" for="periodo">data (Anno-Mese-Giorno)</label>
                <input type="text" name="periodo" id="periodo">
            </div>
            <div class="d-flex flex-column">
                <label class="fw-bold" for="riassunto">riassunto</label>
                <input type="text" name="riassunto" id="riassunto">
            </div>


            <div class="d-flex flex-column">
                <label class="fw-bold" for="type_id">tipologia</label>
                <select name="type_id" id="type_id">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->nome }}</option>
                    @endforeach
                </select>
            </div>



            <input class="mt-5" type="submit" value="Invia">

        </div>


    </form>

@endsection
