@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-semibold text-gray-800 mb-6">Projets</h1>
        
        <a href="{{ route('projets.create') }}" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4 inline-block">
            <i class="fas fa-plus mr-2"></i> Create New Projet
        </a>

        @if ($projets->isEmpty())
            <div class="bg-yellow-100 text-yellow-800 p-4 rounded-md mb-6">
                No projets available.
            </div>
        @else
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">#</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nom Projet</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Description</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projets as $projet)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $projet->id_projet }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $projet->nom_projet }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $projet->objectif }}</td>
                                <td class="px-4 py-2 text-sm flex justify-evenly">
                                    <a href="{{ route('projets.show', $projet->id_projet) }}" class="bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <i class="fas fa-eye mr-2"></i> View
                                    </a>
                                    <a href="{{ route('projets.edit', $projet->id_projet) }}" class="bg-yellow-500 text-white py-1 px-3 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                        <i class="fas fa-edit mr-2"></i> Edit
                                    </a>
                                    <form action="{{ route('projets.destroy', $projet->id_projet) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500" onclick="return confirm('Are you sure you want to delete this projet?')">
                                            <i class="fas fa-trash-alt mr-2"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
=======
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
>>>>>>> d7200db97e2629043118d7a025ac567b99a66ea6
        @endif
    </div>
@endsection
