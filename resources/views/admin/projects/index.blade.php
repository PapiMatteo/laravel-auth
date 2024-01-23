@extends('layouts.admin')

@section('content')
    <table class="table table-hover my-5 ">
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
                    <td>{{ $project->decription }} </td>
                    <td>

                    </td>
                </tr>
            @endforeach
            
            
        </tbody>
    </table>
@endsection
