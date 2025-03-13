@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Google Search Console Data</h1>
    
    @if(count($data) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Query</th>
                    <th>Clicks</th>
                    <th>Impressions</th>
                    <th>CTR</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row['keys'][0] }}</td>
                        <td>{{ $row['clicks'] }}</td>
                        <td>{{ $row['impressions'] }}</td>
                        <td>{{ $row['ctr'] }}</td>
                        <td>{{ $row['position'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No data available for the selected date range.</p>
    @endif

    <a href="{{ route('searchconsole.form') }}" class="btn btn-primary">Back</a>
</div>
@endsection
