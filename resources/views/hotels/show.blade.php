<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la hotel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Détails de la hotel</strong></h1>
    <p><strong>Titre :</strong> {{ $hotel->titre }}</p>
    <p><strong>Adresse:</strong> {{ $hotel->adresse }}</p>
    <p><strong>Prix Unitaire :</strong> {{ $hotel->prix_unitaire }}</p>
    <p><strong>Type de Chambre :</strong> {{ $hotel->type_chambre }}</p>
    <a href="{{ route('hotels.index') }}" class="btn btn-secondary mt-3">Retour</a>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
