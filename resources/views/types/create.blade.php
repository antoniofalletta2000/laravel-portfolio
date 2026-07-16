@extends('layouts.projects')

@section('title', 'Aggiungi una tipologia')

@section('content')

    <form action="{{ route('types.store') }}" method="POST">
        @csrf
        <div class="form-control">
            <div class="d-flex flex-column">
                <label class="fw-bold" for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>


            <input class="mt-5" type="submit" value="Invia">

        </div>


    </form>

@endsection
