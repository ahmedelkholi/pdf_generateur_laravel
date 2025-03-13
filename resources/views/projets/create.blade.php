
@extends('layouts.app')

@section('content')
    <div class="">
        <h1>Create New Projet</h1>

        <form action="{{ route('projets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nom_projet" class="form-label">Nom Projet</label>
                <input type="text" class="form-control" id="nom_projet" name="nom_projet" required>
            </div>

            <div class="mb-3">
                <label for="nom_siteweb" class="form-label">Nom Siteweb</label>
                <input type="text" class="form-control" id="nom_siteweb" name="nom_siteweb">
            </div>

            <div class="mb-3">
                <label for="objectif" class="form-label">Objectif</label>
                <textarea class="form-control" id="objectif" name="objectif" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="image_path" class="form-label">Image</label>
                <input type="file" class="form-control" id="image_path" name="image_path">
            </div>

            <button type="submit" class="btn btn-success">Create Projet</button>
        </form>


    </div>
@endsection
