@extends("layouts.projects")

@section("titolo", "Aggiungi un progetto")

@section("content")

<form action="{{route('projects.store')}}" method="POST">
@csrf

<label for="nome">Nome</label>
<input type="text" name="nome" id="nome">

<label for="cliente">cliente</label>
<input type="text" name="cliente" id="cliente">

<label for="periodo">data (Anno-Mese-Giorno)</label>
<input type="text" name="periodo" id="periodo">

<label for="riassunto">riassunto</label>
<input type="text" name="riassunto" id="riassunto">

<input type="submit" value="Invia">


</form>

@endsection
