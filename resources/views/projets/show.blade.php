<!-- resources/views/projets/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $projet->nom_projet }}</h1>

    <p><strong>Nom du Site Web:</strong> {{ $projet->nom_siteweb ?? 'N/A' }}</p>
    <p><strong>Objectif:</strong> {{ $projet->objectif ?? 'N/A' }}</p>

    @if($projet->image_path)
        <div class="mt-3">
            <strong>Image:</strong><br>
            <img src="{{ asset('storage/' . $projet->image_path) }}" alt="Image" style="max-width: 400px;">
        </div>
    @endif

    <p><strong>Créé le:</strong> {{ $projet->created_at->format('d-m-Y') }}</p>
    <p><strong>Dernière mise à jour:</strong> {{ $projet->updated_at->format('d-m-Y') }}</p>
    
    <a href="{{ route('projets.index') }}" class="btn btn-primary mt-3">Retour à la liste</a>
</div>
@endsection
