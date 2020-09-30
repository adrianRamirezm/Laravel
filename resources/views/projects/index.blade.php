@extends('layout')

@section('title','PORTAFLIO')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-4 mb-0">PORTAFLIO</h1>

        @auth
            <a class="btn btn-primary" href="{{route('projects.create')}}">
                Crear proyecto
            </a>
        @endauth
    </div>
    <hr>
    <p class="lead text-secondary">
            Proyectos realizados Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>

    <ul class="list-group">
        @forelse ($projects as $project)
            <li class="list-group-item border-0 shadow">
                 <a class="d-flex justify-content-between align-items-center" href="{{route('projects.show',$project)}}">
                    <span >
                        {{$project->title }}
                    </span>
                    <span class="text-secondary">
                      {{$project->created_at->format('d/m/Y')}}
                    </span>
                </a>
            </li>
         @empty
            <li class="list-group-item border-0 shadow">
                No hay proyectos para mostrar
             </li>
        @endforelse
        {{ $projects->links() }}
    </ul>

</div>

@endsection
