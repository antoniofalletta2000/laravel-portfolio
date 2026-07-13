@extends("layouts.projects")

@section("title", "I miei progetti")

@section("content")

<div class="row row-cols-1 row-cols-md-3">

    @foreach ($projects as $project)

    <div class="col">
        <div class="card">
            <h2 class="text-center mt-2">{{$project->nome}}</h2>
            <div class="card-body">
                <a href="{{route('projects.show', $project)}}">Visualizza</a>
            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection
