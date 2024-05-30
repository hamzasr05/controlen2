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
    <h1>Modifier l'Hôtel</h1>
    <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ $hotel->titre }}" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $hotel->adresse }}" required>
        </div>
        <div class="form-group">
            <label for="prix_unitaire">Prix Unitaire</label>
            <input type="text" class="form-control" id="prix_unitaire" name="prix_unitaire" value="{{ $hotel->prix_unitaire }}" required>
        </div>
        <div class="form-group">
            <label for="type_chambre">Type de Chambre</label>
            <input type="text" class="form-control" id="type_chambre" name="type_chambre" value="{{ $hotel->type_chambre }}" required>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>