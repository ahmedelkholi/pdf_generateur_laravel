<!-- resources/views/searchconsole/results.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-5">
    <h1 class="text-3xl font-bold mb-5">Search Analytics Data</h1>

    @if ($data)
        <table class="min-w-full bg-white border border-gray-300 mt-5">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Query</th>
                    <th class="py-2 px-4 border-b">Clicks</th>
                    <th class="py-2 px-4 border-b">Impressions</th>
                    <th class="py-2 px-4 border-b">CTR (%)</th>
                    <th class="py-2 px-4 border-b">Position</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->rows as $row)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $row->keys[0] }}</td>
                    <td class="py-2 px-4 border-b">{{ $row->clicks }}</td>
                    <td class="py-2 px-4 border-b">{{ $row->impressions }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($row->ctr * 100, 2) }}%</td>
                    <td class="py-2 px-4 border-b">{{ number_format($row->position, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No data available for the given date range.</p>
    @endif
</div>
@endsection
