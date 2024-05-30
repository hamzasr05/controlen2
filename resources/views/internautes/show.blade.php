<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la internaute</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Détails de la internaute</strong></h1>
    <p><strong>Nom :</strong> {{ $internaute->nom }}</p>
    <p><strong>Prenom:</strong> {{ $internaute->prenom }}</p>
    <p><strong>Adresse :</strong> {{ $internaute->adresse }}</p>
    <p><strong>Date de Naissance :</strong> {{ $internaute->date_naissance }}</p>
    <p><strong>CIN :</strong> {{ $internaute->cin}}</p>
    <a href="{{ route('internautes.index') }}" class="btn btn-secondary mt-3">Retour</a>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
