@extends('layouts.admin')

@section('content')

    <div class="container mt-5">
        <h1>Lista progetti</h1>

        <div class="text-end">
            <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Crea un nuovo progetto</a>
        </div>

        @if (session('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
        @endif

        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
    
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td >{{ substr($project->description, 0, 80) . "..." }} </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.projects.show', ['project'=> $project->slug]) }}">Mostra</a>
                            <a class="btn btn-warning" href="{{ route('admin.projects.edit', ['project'=> $project->slug]) }}">Modifica</a>
                            <form class="d-inline-block" action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
                
            </tbody>
        </table>
    </div>
    
@endsection
