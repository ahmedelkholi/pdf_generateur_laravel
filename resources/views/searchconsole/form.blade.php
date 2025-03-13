<!-- resources/views/searchconsole/form.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Enter Google API Key and Site URL</h1>
        <form action="{{ route('searchconsole.fetchData') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="urlSite" class="form-label">Site URL</label>
                <input type="text" class="form-control" id="urlSite" name="urlSite" required>
            </div>

            <button type="submit" class="btn btn-primary">Get Search Console Data</button>
        </form>
    </div>
@endsection
