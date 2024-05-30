<?php
// app/Http/Controllers/InternauteController.php

namespace App\Http\Controllers;

use App\Internaute;
use Illuminate\Http\Request;

class InternauteController extends Controller
{
    public function index()
    {
        $internautes = Internaute::all();
        return view('internautes.index', compact('internautes'));
    }

    public function create()
    {
        return view('internautes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'date_naissance' => 'required|date',
            'cin' => 'required|unique:internautes',
        ]);

        Internaute::create($request->all());
        return redirect()->route('internautes.index')->with('success', 'Internaute créé avec succès.');
    }

    public function show(Internaute $internaute)
    {
        return view('internautes.show', compact('internaute'));
    }

    public function edit(Internaute $internaute)
    {
        return view('internautes.edit', compact('internaute'));
    }

    public function update(Request $request, Internaute $internaute)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'date_naissance' => 'required|date',
            'cin' => 'required|unique:internautes,cin,' . $internaute->id,
        ]);

        $internaute->update($request->all());
        return redirect()->route('internautes.index')->with('success', 'Internaute mis à jour avec succès.');
    }

    public function destroy(Internaute $internaute)
    {
        $internaute->delete();
        return redirect()->route('internautes.index')->with('success', 'Internaute supprimé avec succès.');
    }
}
