<?php
// app/Http/Controllers/ReservationController.php

namespace App\Http\Controllers;

use App\Reservation;
use App\Internaute;
use App\Hotel;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $internautes = Internaute::all();
        $hotels = Hotel::all();
        return view('reservations.create', compact('internautes', 'hotels'));
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'internaute_id' => 'required',
            'hotel_id' => 'required',
            'date_debut_sejour' => 'required|date',
            'date_fin_sejour' => 'required|date|after_or_equal:date_debut_sejour',
            'titre' => 'required',
        ]);

        // Créer une nouvelle réservation avec les données du formulaire
        Reservation::create($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('reservations.index')->with('success', 'Réservation créée avec succès.');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        $internautes = Internaute::all();
        $hotels = Hotel::all();
        return view('reservations.edit', compact('reservation', 'internautes', 'hotels'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        // Valider les données du formulaire
        $request->validate([
            'internaute_id' => 'required',
            'hotel_id' => 'required',
            'date_debut_sejour' => 'required|date',
            'date_fin_sejour' => 'required|date|after_or_equal:date_debut_sejour',
            'titre' => 'required',
        ]);

        // Mettre à jour la réservation avec les données du formulaire
        $reservation->update($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('reservations.index')->with('success', 'Réservation mise à jour avec succès.');
    }

    public function destroy(Reservation $reservation)
    {
        // Supprimer la réservation
        $reservation->delete();

        // Rediriger avec un message de succès
        return redirect()->route('reservations.index')->with('success', 'Réservation supprimée avec succès.');
    }
}
