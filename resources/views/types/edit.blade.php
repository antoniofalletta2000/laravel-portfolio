@extends('layouts.projects')

@section('title', 'Modifica la tipologia')

@section('content')

    <form action="{{ route('types.update', $type) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-control">

            <div class="d-flex flex-column">
                <label class="fw-bold" for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ $type->nome }}">
            </div>



            <input class="mt-5" type="submit" value="Salva">

        </div>


    </form>

@endsection

