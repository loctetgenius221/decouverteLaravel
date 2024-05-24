<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Voici les détails de l'article {{$article->numero}}</p>

    <p>Nom : <strong>{{$article->nom}}</strong></p>
    <p>Catégorie : <strong>{{$article->categorie}}</strong></p>
    <p>Description : <strong>{{$article->description}}</strong></p>
</body>
</html>
