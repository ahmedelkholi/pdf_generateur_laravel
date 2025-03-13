<!-- resources/views/searchconsole/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Google Search Console Data</h1>

        <p><strong>Total Clicks:</strong> {{ $totalClicks }}</p>
        <p><strong>Total Impressions:</strong> {{ $totalImpressions }}</p>
        <p><strong>Average CTR:</strong> {{ number_format($avgCTR * 100, 2) }}%</p>
        <p><strong>Average Position:</strong> {{ number_format($avgPosition, 2) }}</p>

        <h3>Top 10 Keywords</h3>
        <ul>
            @foreach ($topKeywords as $keyword)
                <li>{{ $keyword }}</li>
            @endforeach
        </ul>
    </div>
@endsection
