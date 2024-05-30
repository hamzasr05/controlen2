<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Réservation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Détails de la Réservation <strong>{{ $reservation->internaute->nom}} {{ $reservation->internaute->Prenom}}</strong></h1>
    <p><strong>Internaute:</strong> {{ $reservation->internaute->nom }}</p>
    <p><strong>Hôtel:</strong> {{ $reservation->hotel->titre }}</p>
    <p><strong>Date de Début:</strong> {{ $reservation->date_debut_sejour }}</p>
    <p><strong>Date de Fin:</strong> {{ $reservation->date_fin_sejour }}</p>
    <p><strong>Titre:</strong> {{ $reservation->titre }}</p>
    <a href="{{ route('reservations.index') }}" class="btn btn-secondary mt-3">Retour</a>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
