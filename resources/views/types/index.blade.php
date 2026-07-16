@extends('layouts.projects')

@section('title', 'Le tipologia dei miei progetti')
{{-- @dd($types) --}}
@section('content')

    <div class="container">
        <a class="btn btn-primary" type="submit" href="{{ route('types.create') }}">Aggiungi tipologia</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->nome }}</td>
                        <td>
                            <div class="d-flex gap-3">
                                <a class="btn btn-warning" type="submit" href="{{ route('types.edit', $type) }}">Modifica</a>
                                <form action="{{ route('types.destroy', $type) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Cancella">
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach



            </tbody>
        </table>


    </div>

@endsection
