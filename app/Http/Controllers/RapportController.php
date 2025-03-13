<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use App\Models\Projet;
use Illuminate\Http\Request;

class RapportController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $rapports = Rapport::all();  // Retrieve all rapports
        return view('rapports.index', compact('rapports'));  // Return the view with the rapports
    }

    // Show the form for creating a new resource
    public function create()
    {
        $projets = Projet::all();  // Get all projets for the select dropdown
        return view('rapports.create', compact('projets'));  // Return view for creating a new rapport
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_projet' => 'required|exists:projets,id_projet',
            'nom_rapport' => 'required|string|max:255',
            'periode' => 'required|date',
            'total_clicks' => 'required|integer',
            'total_impressions' => 'required|integer',
            'avg_ctr' => 'required|numeric',
            'avg_position' => 'required|numeric',
            'nb_sessions' => 'required|integer',
            'nb_active_users' => 'required|integer',
            'nb_new_users' => 'required|integer',
            'page_speed' => 'required|numeric',
            'performance' => 'required|numeric',
            'accessibility' => 'required|numeric',
            'best_practices' => 'required|numeric',
            'seo' => 'required|numeric',
            'nb_backlinks' => 'required|integer',
            'nb_orders' => 'required|integer',
            'nb_cart' => 'required|integer',
        ]);

        Rapport::create($validated);  // Create a new rapport record

        return redirect()->route('rapports.index');  // Redirect back to the index page
    }

    // Display the specified resource
    public function show($id)
    {
        $rapport = Rapport::findOrFail($id);  // Find the rapport by its ID
        return view('rapports.show', compact('rapport'));  // Return the view to show the rapport
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $rapport = Rapport::findOrFail($id);  // Find the rapport by its ID
        $projets = Projet::all();  // Get all projets for the select dropdown
        return view('rapports.edit', compact('rapport', 'projets'));  // Return view for editing the rapport
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_projet' => 'required|exists:projets,id_projet',
            'nom_rapport' => 'required|string|max:255',
            'periode' => 'required|date',
            'total_clicks' => 'required|integer',
            'total_impressions' => 'required|integer',
            'avg_ctr' => 'required|numeric',
            'avg_position' => 'required|numeric',
            'nb_sessions' => 'required|integer',
            'nb_active_users' => 'required|integer',
            'nb_new_users' => 'required|integer',
            'page_speed' => 'required|numeric',
            'performance' => 'required|numeric',
            'accessibility' => 'required|numeric',
            'best_practices' => 'required|numeric',
            'seo' => 'required|numeric',
            'nb_backlinks' => 'required|integer',
            'nb_orders' => 'required|integer',
            'nb_cart' => 'required|integer',
        ]);

        $rapport = Rapport::findOrFail($id);  // Find the rapport by its ID
        $rapport->update($validated);  // Update the rapport with the validated data

        return redirect()->route('rapports.index');  // Redirect back to the index page
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $rapport = Rapport::findOrFail($id);  // Find the rapport by its ID
        $rapport->delete();  // Delete the rapport

        return redirect()->route('rapports.index');  // Redirect back to the index page
    }
}
