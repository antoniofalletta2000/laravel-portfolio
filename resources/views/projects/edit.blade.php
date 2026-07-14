@extends("layouts.projects")

@section("title", "Modifica un progetto")

@section("content")

<form action="{{route('projects.update', $project)}}" method="POST">
@csrf
@method("PUT")
<label for="nome">Nome</label>
<input type="text" name="nome" id="nome" value="{{$project->nome}}">

<label for="cliente">cliente</label>
<input type="text" name="cliente" id="cliente" value="{{$project->cliente}}">

<label for="periodo">data (Anno-Mese-Giorno)</label>
<input type="text" name="periodo" id="periodo" value="{{$project->periodo}}">

<label for="riassunto">riassunto</label>
<input type="text" name="riassunto" id="riassunto" value="{{$project->riassunto}}">

<input type="submit" value="Salva">


</form>

@endsection
