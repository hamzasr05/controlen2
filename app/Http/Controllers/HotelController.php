<?php

// app/Http/Controllers/HotelController.php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'adresse' => 'required',
            'prix_unitaire' => 'required|numeric',
            'type_chambre' => 'required',
        ]);

        Hotel::create($request->all());
        return redirect()->route('hotels.index')->with('success', 'Hôtel créé avec succès.');
    }

    public function show(Hotel $hotel)
    {
        return view('hotels.show', compact('hotel'));
    }

    public function edit(Hotel $hotel)
    {
        return view('hotels.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'titre' => 'required',
            'adresse' => 'required',
            'prix_unitaire' => 'required|numeric',
            'type_chambre' => 'required',
        ]);

        $hotel->update($request->all());
        return redirect()->route('hotels.index')->with('success', 'Hôtel mis à jour avec succès.');
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index')->with('success', 'Hôtel supprimé avec succès.');
    }
}

