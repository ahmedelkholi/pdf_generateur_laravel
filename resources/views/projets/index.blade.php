@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Projets</h1>
        <a href="{{ route('projets.create') }}" class="btn btn-primary mb-3">Create New Projet</a>
        
        @if ($projets->isEmpty())
            <div class="alert alert-warning">No projets available.</div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom Projet</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projets as $projet)
                        <tr>
                            <td>{{ $projet->id_projet }}</td>
                            <td>{{ $projet->nom_projet }}</td>
                            <td>{{ $projet->description }}</td>
                            <td>
                                <a href="{{ route('projets.show', $projet->id_projet) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('projets.edit', $projet->id_projet) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('projets.destroy', $projet->id_projet) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this projet?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
