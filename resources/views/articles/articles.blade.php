<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
</head>
<body>

    <h1>Liste des articles</h1>



    <div class="container">
    <div class="row d-flex">
    @foreach ($mes_donnees_a_afficher as $item)
        <img src="{{ $item->image_url}}" alt="">
        <p>Nom : <strong>{{$item->nom}}</strong></p>
        <p>Catégorie : <strong>{{$item->categorie}}</strong></p>
        <p>Description : <strong>{{$item->description}}</strong></p>
        <a href="/article/{{$item->id}}" class="btn btn-primary">Lire plus..</a>
        <hr>
    @endforeach
    </div>
    </div>


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
</body>
</html>
