<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <h1>Créer une Réservation</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="internaute_id">Internaute</label>
            <select class="form-control" id="internaute_id" name="internaute_id" required>
                @foreach($internautes as $internaute)
                    <option value="{{ $internaute->id }}">{{ $internaute->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="hotel_id">Hôtel</label>
            <select class="form-control" id="hotel_id" name="hotel_id" required>
                @foreach($hotels as $hotel)
                    <option value="{{ $hotel->id }}">{{ $hotel->titre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date_debut_sejour">Date de Début</label>
            <input type="date" class="form-control" id="date_debut_sejour" name="date_debut_sejour" required>
        </div>
        <div class="form-group">
            <label for="date_fin_sejour">Date de Fin</label>
            <input type="date" class="form-control" id="date_fin_sejour" name="date_fin_sejour" required>
        </div>
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>