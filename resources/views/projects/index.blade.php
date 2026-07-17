@extends("layouts.projects")

@section("title", "I miei progetti")

@section("content")

<a class="btn btn-primary" type="submit" href="{{route("projects.create")}}">Aggiungi progetto</a>

<div class="row row-cols-1 row-cols-md-3 pt-4">

    @foreach ($projects as $project)

    <div class="col">
        <div class="card">
            <h2 class="text-center mt-2">{{$project->nome}}</h2>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p>{{$project->type?->nome}}</p>
                   <a href="{{route('projects.show', $project)}}">Visualizza</a>
                </div>

            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection
